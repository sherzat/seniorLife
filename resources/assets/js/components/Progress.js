import React, { Component } from 'react';
import Progress from 'react-progressbar';
import Progressbar from 'react-progressbar'
class Progress extends Component {
    render(){
        return(
            <div>
                <div className="progress">
                    <div className="progress-bar" role="progressbar" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        <span className="sr-only">70% Complete</span>
                    </div>
                </div>

            </div>
        );
    }
}

export default Progress;
