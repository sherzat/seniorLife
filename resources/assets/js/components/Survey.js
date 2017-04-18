import React, { Component } from 'react';

import Circular_scale from './Circular_scale';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';


class Survey extends Component {
    constructor(props) {
        super(props);
        this.state = {
            question:"",
            current_value:0,
        };
    }
    componentDidMount(){
        $.ajax({
            method: "GET",
            url: "survey/new",
        })
            .done(function( result ) {
            console.log( "Data Saved: " + result );
                var questions_obj=JSON.parse(result)
                console.log( "Data Saved: " + questions_obj.prepare_questions[0].question);
                this.setState({question:questions_obj.prepare_questions[0].question});
            }.bind(this))
    }

    render(){
        return(
            <div>
                <section className="section-settings">
                    <Progress completed={33} className={"progressbar"}/>
                    <Question question={this.state.question} />
                </section>
                <section className="section-settings">
                    <Circular_scale />
                </section>
            </div>
        );
    }
}

export default Survey;
