import React, { Component } from 'react';

import Circular_scale from './Circular_scale';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';
import Slider_scale from './Slider_scale';

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
            url: this.props.url,
        })
            .done(function( result ) {
            console.log( "Data Saved: " + result );
                var questions_obj=JSON.parse(result)
                console.log( "Data Saved: " + questions_obj.prepare_questions[0].question);
                this.setState({question:questions_obj.prepare_questions[0].question});
            }.bind(this))
    }

    render(){
        const scale= this.props.scale;
        let scale_component = null;
        if(scale == "Circular_scale"){
            scale_component= <Circular_scale />;
        }else if (scale=="Slider_scale"){
            scale_component= <Slider_scale />;
        }
        return(
            <div>
                <section className="section-settings">
                    <div className="progress-bar-settings">
                       <h3 className="text-progress-settings">Your Progress 33%</h3>
                         <Progress completed={33} className={"progressbar"}/>
                    </div>
                    <Question question={this.state.question} />
                </section>
                <section className="section-settings">
                    {scale_component}
                </section>
            </div>
        );
    }
}

export default Survey;
