import React, { Component } from 'react';

import Circular_scale_1 from './Circular_scale_1';
import Slider_scale from './Slider_scale';
import Question from './Question';
import HomePageRadioButton from './HomepageRadioButton';
import {ModalContainer, ModalDialog} from 'react-modal-dialog';

class Survey extends Component {
    //this contains the answers the user responded and will be send to server when all survey questions are finished
    answers = [];

    constructor(props) {
        super(props);
        this.state = {
            data:[],
            currentQuestion: null,
            isCorrect:false,
            isAnswered:false,
            question_id:null,
            isShowingModal: false,
            playerStatus:null,
            answered: null,
            survey_id:0,
            loaded: false,
            secondsElapsed: 0,
        };
        this.handleNextButton= this.handleNextButton.bind(this);
        this.handleAnswer= this.handleAnswer.bind(this);
        this.sendAnswers=this.sendAnswers.bind(this);
    }

    tick() {
        this.setState((prevState) => ({
            secondsElapsed: prevState.secondsElapsed + 0.1
        }));
    }

    componentWillUnmount() {
        clearInterval(this.interval);
    }

    componentDidMount(){
        var url = "/getTestSurvey";
        console.log(url);
        $.ajax({
            method: "GET",
            url: url,
            dataType:"json",
        })
        .done(function( result ) {
            console.log(result);
            this.setState({data:result.prepare_questions, currentQuestion:0}, function(){
                this.setState({loaded: true});
                this.interval = setInterval(() => this.tick(), 100);
            });
        }.bind(this))
    }

    handleNextButton(){

        this.setState({
            currentQuestion: this.state.currentQuestion+1,
            secondsElapsed:0,
            isCorrect:false,
            isAnswered: false,
        }, function () {
            if(this.state.currentQuestion >= this.state.data.length-1){
                console.log("time to send answers")
            }
            console.log(this.state.currentQuestion)
            // for (var i = 0; i < this.answers.length; i++) {
            //     if (i == this.state.currentQuestion){
            //         this.setState({answered: this.answers[i].index});
            //         return
            //     }
            // }
            //
            // this.answers.push({});
            this.setState({answered: null});
        });

    }

    handleAnswer(choice_index, question_id){
        this.setState({
            answered: choice_index,
            isAnswered: true,

        });

        var answer = this.state.data[this.state.currentQuestion].choices[choice_index].id;

        if(answer + 64 == question_id){
            this.setState({isCorrect: true})
        }else {
            this.setState({isCorrect: false})
        }

        // for (var i = 0; i < this.answers.length; i++) {
        //     if (i == this.state.currentQuestion){
        //         this.answers.splice(i, 1, {c_id:answer, q_id: question_id, index:choice_index, secondsElapsed: this.state.secondsElapsed.toFixed(1), survey_id:survey_id});
        //         console.log(this.answers);
        //
        //         if(this.props.withNext == false){
        //             var that=this;
        //             setTimeout(function() {
        //                 console.log("fished waiting");
        //                 that.handleNextButton();
        //             }, 2000);
        //
        //         }
        //         return
        //     }
        // }

        for (var i = 0; i < this.answers.length; i++) {
            if (this.answers[i].q_id == question_id){
                this.answers[i].answers.push({c_id:answer,index:choice_index,secondsElapsed:this.state.secondsElapsed.toFixed(1)})
                console.log( this.answers);
                return
            }
        }
        this.answers.push({
            q_id: question_id,
            answers:   [{
                c_id:answer,
                index:choice_index,
                secondsElapsed: this.state.secondsElapsed.toFixed(1),
            }]
        });
        console.log( this.answers);
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
        url: "/storeTestSurvey",
        dataType: 'json',
        data: {data: this.answers, survey_id: this.state.survey_id},
        success: function (response) {
            console.log(response);
            this.props.handleOnclickQuit();
        }.bind(this),
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }.bind(this),

    });

}

render(){
        var stylewarning ={
            height:80
        }
    if(!this.state.loaded)
    return (<h>loading</h>);

    const survey_question= this.state.data.map((each)=>
    <Question key={each.id}
        question={each.question}/>
);
var choices_for_q=null;
if(this.props.likertScale =="circular"){
    choices_for_q= this.state.data.map((each)=>
    <Circular_scale_1 key={each.id} question_id={each.id} choices={each.choices} answered={this.state.answered} handleAnswer={this.handleAnswer} onClick={this.handleOnClick}/>
);
}else if (this.props.likertScale =="slider") {
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

                    {/*<div className="ml-2">Seconds Elapsed: {this.state.secondsElapsed.toFixed(1)}</div>*/}

                    <div className="text-color ml-auto">Progress: {this.state.currentQuestion }/{survey_question.length}</div>
                </h6>
            </div>

            <div className="card-block vertical-align">
                {survey_question[this.state.currentQuestion]}
            </div>
            <div style={stylewarning}>{this.state.isAnswered ?
                this.state.isCorrect ?  <h1 className="text-center text-success">Correct</h1> : <h1 className="text-center text-danger">Wrong</h1> : <h1 className="mb-4 pb-4"></h1> }</div>
            <li className="list-group-item justify-content-between Set-width pb-3">

                <div style={{width:"91px"}}></div>


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
                            disabled={this.state.isCorrect ? false : true}
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
