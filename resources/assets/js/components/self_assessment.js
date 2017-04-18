import React, { Component } from 'react';

class Progress extends Component{
    constructor(props){
        super(props);
    }

    render(){
        return (
            <div>
                progress
                {this.props.count}
            </div>
        );
    }
}
class Questions extends Component{
    render(){
        return(
            <div>
                {this.props.question}
            </div>
        );
    }
}

class Answers extends Component{
    render(){
        return(
            <div>
                answers
            </div>
        );
    }
}

class Self_assessment extends Component{
    
    constructor(props){
        super(props);
        this.state={
            question:"",
            count: 0,

        }
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
                <Progress count={this.state.count}/>
                <Questions question={this.state.question}/>
                <Answers/>
            </div>
        );
    }
}
export default Self_assessment;
