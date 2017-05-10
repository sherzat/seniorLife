import React, { Component } from 'react';


class Question extends Component {

    render(){

        const style={
            textAlign: "center",
            paddingTop: "100px",
        }


        return(
            <div style={style}>
                {this.props.question}
            </div>
        );
    }
}

export default Question;
