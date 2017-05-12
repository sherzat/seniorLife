import React, { Component } from 'react';
import CircularProgressbar from 'react-circular-progressbar';


class HomepageCircularPiechart extends Component {
    render() {
        return (
            <div>
                <CircularProgressbar percentage={this.props.qol.score}/>
            </div>
        );
    }
}

export default HomepageCircularPiechart;
