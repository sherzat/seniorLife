
import React, { Component } from 'react';
import HomepageProgressBar from './HomepageProgressBar';
import HomepageCircularPiechart from './HomepageCircularPiechart';
import HomepageCarousel from './HomepageCarousel';

class HomePage extends  Component {
    constructor(props) {
        super(props);
        this.state = {home:[],loaded:false};
        this.getData=this.getData.bind(this);
    }

    /*//sending request to get the gol value*/

    getData() {
        var url ="/home/1";
        $.ajax({
            method: "GET",
            url: url,
        })
            .done(function( result ) {

                console.log(result)
                this.setState({home:result ,loaded:true});

            }.bind(this))
    }
    componentWillMount(){
        this.getData();
    }
    componentDidMount(){

    }
    render(){
        if(!this.state.loaded)
            return (<h>loading</h>);
        return (
            <div>


                    <h1> What you need to know </h1>
                    <p>Make daily self-assessment for better quality of life!</p>


                <div className="Rail-way-font">

                    <div className="row my-flex-card">
                        <div className="col-md-6">
                            <div className="card">

                                {/*<!-- Heading -->*/}

                                <div className="card-block pt-1 pb-2">
                                    <h4 className="card-title">Your Quality of Life</h4>
                                    <h6 className="card-subtitle">Overall score of your last survey</h6>
                                </div>

                                {/* <!-- Image -->*/}

                                <div className="card-block p-1" style={{textAlign: "center"}}>

                                    <HomepageCircularPiechart qol={this.state.home.qol}/>

                                </div>

                                {/* <!-- Text Content -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <p className="card-text">You have completed {this.state.home.survey} surveys this week</p>
                                </div>

                                {/*  <!-- button -->*/}

                                <div className="card-block p-1 pb-3 mx-auto">
                                    <button className="btn btn-success">Read Detail</button>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">

                            {/* <!-- Heading -->*/}

                            <div className="card">

                                {/*<!-- Heading -->*/}

                                <div className="card-block pt-1 pb-2">
                                    <h4 className="card-title">Health Card </h4>
                                    <h6 className="card-subtitle text-muted">Real time data</h6>
                                </div>

                                {/*<!-- Image -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <i className="fa fa-spinner fa-3x fa-spin" aria-hidden="true"></i>
                                </div>

                                {/* <!-- Text Content -->*/}

                                <div className=" card-block p-1 mx-auto">
                                    <p>Connect Your Device</p>
                                </div>

                                {/*<!-- Text Content -->*/}

                                <div className="card-block p-1 pb-3">
                                    <div className="list-group list-group-flush">

                                        <li className="list-group-item justify-content-between">
                                            <div className="" id="health_card">
                                                <i className="fa fa-heartbeat" aria-hidden="true"></i>
                                                <span> Heart Rate </span>
                                            </div>
                                            <span> 42 </span>
                                        </li>

                                        <li className="list-group-item justify-content-between">
                                            <div className="" id="health_card">
                                                <i className="fa fa-smile-o" aria-hidden="true"></i>
                                                <span> Stress level</span>
                                            </div>
                                            <span>Normal</span>
                                        </li>

                                        <li className="list-group-item justify-content-between">
                                            <div className="" id="health_card">
                                                <i className="fa fa-thermometer-three-quarters" aria-hidden="true"></i>
                                                <span>Temperature</span>
                                            </div>
                                            <span> 25 oC </span>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="row my-flex-card">

                        {/*<!-- your achevments -->*/}

                        <div className="col-md-6">
                            <div className="card">

                                {/*<!-- Heading -->*/}

                                <div className="card-block pt-1 pb-2">
                                    <h4 className="card-title">Your achevemnts</h4>
                                    <h6 className="card-subtitle text-muted">Your collection</h6>
                                </div>

                                {/*<!-- Image -->*/}

                              {/*<HomepageCarousel badges={this.state.home.badges} />*/}

                                {/*<!-- Text Content -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <p className="card-text">You can earn more badges by completing tasks</p>
                                </div>

                                {/* <!-- button -->*/}

                                <div className="card-block p-1 pb-3 mx-auto">
                                    <a className="btn btn-success" href="/achievement">See more achevement badges</a>
                                </div>
                            </div>
                        </div>

                        {/*<!-- your progress -->*/}

                        <div className="col-md-6">

                            {/*<!-- Heading -->*/}

                            <div className="card">
                                <div className="card-block pt-1 pb-2">
                                    <h4 className="card-title"><h2>Level {this.state.home.level} </h2></h4>
                                </div>

                                {/*<!-- Image -->*/}

                                <div className="card-block pb-0">
                                    <HomepageProgressBar progress_points={this.state.home.progress_points}/>
                                </div>
                                <div className="card-block p-1 pb-3 mx-auto">
                                    Get 70 more points to level up
                                </div>

                                {/*<!-- Text Content -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <p className="card-text">Hi! Do you like challenge, see our today's challenge for
                                        you.</p>
                                </div>

                                {/*<!-- Button -->*/}

                                <div className="card-block p-1 pb-3 mx-auto">
                                    <a className="btn btn-success" href="/challenges">Go to challenges</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        );
    }
}

export default HomePage;
