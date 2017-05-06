import React, { Component } from 'react';
import CircularProgressbar from 'react-circular-progressbar';


class HomepageCircularPiechart extends Component {
    render() {
        return (
            <div>
                <CircularProgressbar percentage={78}/>
            </div>
        );
    }
}

export default HomepageCircularPiechart;
