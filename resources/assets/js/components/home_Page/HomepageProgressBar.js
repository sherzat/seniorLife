import React, { Component } from 'react';
import Progress from 'react-progressbar';
import 'rc-progress/assets/index.css';
import { Line, Circle } from 'rc-progress';

class HomepageProgressBar extends  Component {

    constructor() {
        super();
        this.state = {
            percent: "5",
            color: '#3FC7FA',
        };
    }

    render() {
        const containerStyle = {
            width: '290px',
        };

        return (
            <div>

                <h4>Progress {this.state.percent}%</h4>
                <Line percent={this.state.percent} strokeWidth="10" strokeColor={this.state.color} />

            </div>

        );
    }
}

export default HomepageProgressBar;


{/*<Progress completed={this.props.progress_points} className={"progressbar"}/>*/}