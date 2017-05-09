import React, { Component } from 'react';
import Progress from 'react-progressbar';

class HomepageProgressBar extends  Component {
    render() {
        return (
            <div>
                <Progress completed={this.props.progress_points} className={"progressbar"}/>
            </div>
        );
    }
}

export default HomepageProgressBar;
