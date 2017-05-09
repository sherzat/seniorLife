import React, { Component } from 'react';


class Question extends Component {
    render(){
        const style={
            textAlign: "center",
            paddingTop: "100px",
        }
        return(
            <div style={style}>
                <h2> {this.props.question}</h2>
            </div>
        );
    }
}

export default Question;