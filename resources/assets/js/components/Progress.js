import React, { Component } from 'react';

class Progress extends Component {
    render(){
        return(
            <div>
                {this.props.count}
            </div>
        );
    }
}

export default Progress;
