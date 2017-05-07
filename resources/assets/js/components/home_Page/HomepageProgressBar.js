import React, { Component } from 'react';
import Progress from 'react-progressbar';

class HomepageProgressBar extends  Component {
    render() {
        return (
            <div>
                <Progress completed={33} className={"progressbar"}/>
            </div>
        );
    }
}

export default HomepageProgressBar;
