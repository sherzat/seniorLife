import React, { Component } from 'react';


class Question extends Component {

    render(){



        return(
            <div>
              <p className="Text-font-size ">{this.props.question}</p>
            </div>
        );
    }
}

export default Question;
