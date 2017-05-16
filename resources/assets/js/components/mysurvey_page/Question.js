import React, { Component } from 'react';


class Question extends Component {

    render(){



        return(
            <div>
              { this.props.description !== '' ?
                (<p  className="text-white  lead"> {this.props.description}:</p>)
                :('')}
              <p className="text-white Text-font-size ">{this.props.question}</p>
            </div>
        );
    }
}

export default Question;
