import React, { Component } from 'react';

import Circular_scale_1 from '../mysurvey_page/Circular_scale_1';
import Question from '../mysurvey_page/Question';
import Slider_scale from '../mysurvey_page/Slider_scale';
import HomePageRadioButton from '../mysurvey_page/HomepageRadioButton';

import {ModalContainer, ModalDialog} from 'react-modal-dialog';
import PlayerStatus from '../components/PlayerStatus';

class Survey extends Component {
    constructor(props) {
        super(props);
        this.state = {
            data:[],
            currentQuestion: null,
            answer:null,
            question_id:null,
            isShowingModal: false,
            playerStatus:null,
            answered: null,
            survey_id:0,
            loaded: false,
            secondsElapsed: 0,
        };
        this.handleNextButton= this.handleNextButton.bind(this);
        this.handlePrevButton= this.handlePrevButton.bind(this);
        this.handleAnswer= this.handleAnswer.bind(this);
        this.sendAnswers=this.sendAnswers.bind(this);
        this.handleGoBackBtn = this.handleGoBackBtn.bind(this);
        this.handleOnClick=this.handleOnClick.bind(this);
    }

    tick() {
        this.setState((prevState) => ({
            secondsElapsed: prevState.secondsElapsed + 1
        }));
    }
    handleOnClick(event){
        this.props.onClick(event);
    }
    componentWillUnmount() {
        clearInterval(this.interval);
    }
    //this contains the answers the user responded and will be send to server when all survey questions are finished
    answers = [];





    handlePrevButton() {
        this.setState({
            currentQuestion: this.state.currentQuestion-1,
        }, function () {
            for (var i = 0; i < this.answers.length; i++) {
                if (i == this.state.currentQuestion){
                    // this.setState({answer:this.answers[i].c_id})
                    this.setState({answered: this.answers[i].index});
                    return
                }
            }
        });
        this.setState({answered: null});
    }

    handleNextButton(){

        this.setState({
            currentQuestion: this.state.currentQuestion+1,
        }, function () {
            if(this.state.currentQuestion >= this.state.data.length-1){
                console.log("time to send answers")
            }
            console.log(this.state.currentQuestion)
            for (var i = 0; i < this.answers.length; i++) {
                if (i == this.state.currentQuestion){
                    this.setState({answered: this.answers[i].index});
                    return
                }
            }

            this.answers.push({});
            this.setState({answered: null});
        });

    }

    handleAnswer(choice_index, question_id){
        this.setState({answered: choice_index});

        var answer = this.state.data[this.state.currentQuestion].choices[choice_index].id;
        for (var i = 0; i < this.answers.length; i++) {
            if (i == this.state.currentQuestion){
                this.answers.splice(i, 1, {c_id:answer, q_id: question_id, index:choice_index});
                console.log(this.answers);

                if(this.props.withNext == false){
                    var that=this;
                    setTimeout(function() {
                        console.log("fished waiting");
                        that.handleNextButton();
                    }, 2000);

                }
                return
            }
        }
        this.answers.push({c_id:answer, q_id: question_id, index:choice_index});
        console.log(this.answers);
        if(this.props.withNext == false){
            var that=this;
            setTimeout(function() {
                console.log("fished waiting");
                that.handleNextButton();
            }, 2000);
        }
    }


    sendAnswers(){

        //remove the not answered questions from the list
        var answers = this.answers.filter((each)=>
        Object.values(each)!=""
    );
    console.log(answers);
    this.answers = answers;

    $.ajax({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },

        type: "POST",
        url: "/survey/store",
        dataType: 'json',
        data: {data: this.answers, survey_id: this.state.survey_id, secondsElapsed: this.state.secondsElapsed},
        success: function (response) {
            this.setState({playerStatus: response},function(){
                console.log(this.state.playerStatus);

                this.props.handleOnclickQuit("survey" , this.state.secondsElapsed,this.props.selectedCategoryId);
            });

        }.bind(this),
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }.bind(this),

    });

}
componentDidMount(){
    var url_prefix = "survey/create/";
    var url = url_prefix.concat(this.props.selectedCategory);   //get qustoins by category
    console.log(url);
    $.ajax({
        method: "GET",
        url: url,
        dataType:"json",
    })
    .done(function( result ) {
        console.log(result);
        this.setState({data:result.prepare_questions, currentQuestion:0, survey_id:result.survey_id}, function(){
            this.setState({loaded: true});
            this.interval = setInterval(() => this.tick(), 1000);
        });
    }.bind(this))
}

handleGoBackBtn(completeState) {

    this.props.handleOnclickQuit("survey", this.state.secondsElapsed, this.props.selectedCategoryId);
}


render(){
    if(!this.state.loaded)
    return (<h>loading</h>);

    const survey_question= this.state.data.map((each)=>
    <Question key={each.id}
        question={each.question}/>
);
var choices_for_q=null;
if(this.props.selectedCategoryId =="circular"){
    choices_for_q= this.state.data.map((each)=>
    <Circular_scale_1 key={each.id} question_id={each.id} choices={each.choices} answered={this.state.answered} handleAnswer={this.handleAnswer} onClick={this.handleOnClick}/>
);
}else if (this.props.selectedCategoryId =="slider") {
    choices_for_q= this.state.data.map((each)=>
    <Slider_scale key={each.id} question_id={each.id} choices={each.choices} answered={this.state.answered} handleAnswer={this.handleAnswer}/>
);
}else {
    choices_for_q= this.state.data.map((each)=>
    <HomePageRadioButton key={each.id} question_id={each.id} choices={each.choices} answered={this.state.answered} handleAnswer={this.handleAnswer}/>
);
}
// console.log(survey_question.length);
return(
    <div>

        <div className="row card">

            <div className="card-header">
                <h4 id="step1"className="card-title">Survey</h4>
                <h6 className="card-subtitle d-flex justify-content-start ">You are filling category {this.props.selectedCategory}.
                    <div className="ml-2">Seconds Elapsed: {this.state.secondsElapsed}</div>

                    <div className="text-color ml-auto">Progress: {this.state.currentQuestion }/{survey_question.length}</div>
                </h6>
            </div>

            <div className="card-block Card-Height vertical-align">
                {survey_question[this.state.currentQuestion]}
            </div>

            <li className="list-group-item justify-content-between Set-width">

                <div style={{width:"91px"}}>
                    {
                        // this.props.withNext ?
                        // <button
                        //     className="btn btn-success btn-lg"
                        //     hidden={this.state.currentQuestion == 0? true:false}
                        //     onClick={this.handlePrevButton}>Prev</button>
                        // : ""
                    }
                </div>


                {
                    this.state.currentQuestion<this.state.data.length ?
                    (choices_for_q[this.state.currentQuestion])
                    : <div style={{width:"60%"}} className="text-center">
                            <button className="btn btn-success btn-lg" onClick={this.sendAnswers}>
                                submit
                            </button>
                        </div>
                }

                <div style={{width:"91px"}}>
                    {
                        this.props.withNext ?
                        <button
                            className="btn btn-success btn-lg"
                            hidden={this.state.currentQuestion == this.state.data.length? true:false}
                            onClick={this.handleNextButton}>Next</button>
                        : ""
                    }
                </div>

            </li>


            </div>

        </div>
    );
}
}

export default Survey;
