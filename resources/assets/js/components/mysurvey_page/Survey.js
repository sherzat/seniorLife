import React, { Component } from 'react';

//import Circular_scale from './Circular_scale';
import Circular_scale_1 from './Circular_scale_1';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';
//import createFragment from 'react-addons-create-fragment'; // ES6
import Slider_scale from '../Slider_scale';

class Survey extends Component {
    constructor(props) {
        super(props);
        this.state = {
			qIterator:"",
            question:"",
			choices:[],
			current_value:0,
			answers:[],
        };
        this.nextQuestion=this.nextQuestion.bind(this);
        this.getChoices=this.getChoices.bind(this);
        this.saveAnswers= this.saveAnswers.bind(this);
        this.sendAnswers= this.sendAnswers.bind(this);
	}

    componentWillMount(){
        $.ajax({
            method: "GET",
            url: "http://127.0.0.1:8000/api/user",
		})

			.done(function( result ) {
				var result_obj = JSON.parse(result);
				var iterator = result_obj.prepare_questions[Symbol.iterator]();
				this.setState({qIterator: iterator});
				this.setState({question: this.state.qIterator.next().value})
				this.setState({choices: this.getChoices(this.state.question.choices)});

            }.bind(this))
    }
	getChoices(choices){
		var mappedChoices= choices.map(function(element){
			var newArray=[];
			return newArray[element.id] = element.choice;
		});
		return mappedChoices;
	}
    nextQuestion(choice){
        var next_question = this.state.qIterator.next().value;
		this.saveAnswers(choice);
        if (next_question != null){
			this.setState({question:next_question});
			this.setState({choices: this.getChoices(next_question.choices)});
		}else{
			this.sendAnswers();
		}
    }
    saveAnswers(choiceId){
		var choice_obj={};
		choice_obj['id'] = this.state.question.id;
		choice_obj['answer']= choiceId;
		var answers = this.state.answers.slice();
		answers.push(choice_obj);
		console.log(answers);
		this.setState({answers: answers});

	}
	sendAnswers(){
		var answers = this.state.answers.slice();
		answers = JSON.stringify(answers);
		console.log(answers);

		$.ajax({
			headers: {
			    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			  },
            type: "POST",
			url: "/survey/store",
			dataType: 'json',
            data: {data: answers},
            success: function (response) {
                // you will get response from your php page (what you echo or print)
                console.log(response);

            }.bind(this),
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }.bind(this),

            dataType: "text",
        });

	}
    render(){
        const scale= this.props.scale;
        let scale_component = null;
        if(scale == "Circular_scale"){
            scale_component= <Circular_scale_1 nextQuestion={this.nextQuestion} choices={this.state.choices}/>;
        }else if (scale=="Slider_scale"){
            scale_component= <Slider_scale />;
        }
        return(
            <div>
                <div className="container-fluid">
                    <div className="card">
                        <div className="card-header justify-content-between">

    <div className="col-md-8"><Progress completed={33} className={"mr-auto"}/></div>

                            <div className="col-md-2">  <button>Go back</button></div>

                        </div>
                        <div className="card-block">
                            <div className="row h-40">
                                <div className="col-md-4 col-sm-12"></div>
                                <div className="col-md-8 col-sm-12"></div>
                            </div>
                            <div className="row h-60">
                                <div className="col-md-12 col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Survey;

           /*     <div className="card-header"
                <div className="progress-bar-settings">
                    <h3 className="">Your Progress 33%</h3>
                    <Progress completed={33} className={"progressbar"}/>
                </div>
            </div>
        <Question  question={this.state.question.question}/>
    {scale_component}*/