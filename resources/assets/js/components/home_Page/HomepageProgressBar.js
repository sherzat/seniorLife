import React, { Component } from 'react';

import 'rc-progress/assets/index.css';
import { Line, Circle } from 'rc-progress';

class HomepageProgressBar extends  Component {

    constructor(props) {
        super(props);
        this.state = {
            percent: '0',
            color: '#f39c12',
        };
    }

    render() {
        const containerStyle = {
            width: '290px',
        };

        return (
            <div>

                <Line percent={this.props.percent} strokeWidth="5" strokeColor={this.state.color} />

            </div>

        );
    }
}

export default HomepageProgressBar;


{/*<Progress completed={this.props.progress_points} className={"progressbar"}/>*/}
