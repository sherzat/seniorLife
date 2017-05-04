/**
 * Created by Avatar on 5/3/2017.
 */
import React, { Component } from 'react';
import CircularProgressbar from 'react-circular-progressbar';


class Home extends Component {
    render() {
        return (
            <div>
                <CircularProgressbar percentage={78}/>
            </div>
        );
    }
}

export default Home;
