import React, { Component } from 'react';
import Progress from 'react-progressbar';

class Home_progress_bar extends  Component {
    render() {
        return (
            <div>
                <Progress completed={33} className={"progressbar"}/>
            </div>
        );
    }
}

export default Home_progress_bar;