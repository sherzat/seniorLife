import React, { Component } from 'react';

import Circular_scale from './Circular_scale';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';
import createFragment from 'react-addons-create-fragment';

class Survey extends Component {
    constructor(props) {
        super(props);
        this.state = {
            questions:"",
            question:"",
            current_value:0,
        };
        this.nextQuestion=this.nextQuestion.bind(this);
    }
    componentWillMount(){
        $.ajax({
            method: "GET",
            url: "survey/new",
        })
            .done(function( result ) {
                console.log( "Data Saved: " + JSON.parse(result) );
                questions = createFragment(JSON.parse(result));
                console.log(questions);
                //this.setState({questions: JSON.parse(result).prepare_questions[Symbol.iterator]()});
                //this.setState({question:this.state.questions.next().value});
            }.bind(this))
    }
    nextQuestion(){
        var next_question = this.state.questions.next().value;
        console.log(next_question);
        if (next_question != null)
            this.setState({question:next_question});
    }
    render(){
        return(
            <div>
                <section className="section-settings">
                    <Progress completed={33} className={"progressbar"}/>
                    <Question question={this.state.question.question} />
                </section>
                <section className="section-settings">
                    <Circular_scale nextQuestion={this.nextQuestion} choices={this.state.question.choices}/>
                </section>
            </div>
        );
    }
}

export default Survey;
