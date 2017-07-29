import React, { Component } from 'react';


class Question extends Component {
    constructor(props) {
      super(props);
      this.state={
          question:[]
      }
      this.lastword= this.lastword.bind(this);
    }
    lastword(words) {
        var text= words.split(' ');
        // drop the last word and store it in a variable
        var last = text.pop();
        // join the text back
        text = text.join(" ");
        var result = [text,last]
        console.log(result);
        this.setState({
            question:result
        })
    }
    componentDidMount(){
        this.lastword(this.props.question);
    }
    render(){

        return(
            <div>
              <p className="Text-font-size"> {this.state.question[0]} <span className="apptest-question-last"> {this.state.question[1]} </span></p>
            </div>
        );
    }
}

export default Question;
