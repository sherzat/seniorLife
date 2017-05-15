
import React, { Component } from 'react';
import HomepageProgressBar from './HomepageProgressBar';
import HomepageCircularPiechart from './HomepageCircularPiechart';
import HomepageCarousel from './HomepageCarousel';
import HomepageRadioButton from './HomepageRadioButton';
import HomepageBarchart from './HomepageBarchart';

class HomePage extends  Component {
    constructor(props) {
        super(props);
        this.state = {home:[],loaded:false};
        this.getData=this.getData.bind(this);
    }

    /*//sending request to to set  flag to 1 value*/

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

        if(this.state.home.flag==0){
            sessionStorage.setItem('firstvisit', this.state.home.flag);
            startIntro('home').start();
        }

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
                                    <h4 id="step1"className="card-title">Your Quality of Life</h4>
                                    <h6 className="card-subtitle">Overall score of your last survey</h6>
                                </div>

                                {/* <!-- Image -->*/}

                                <div className="card-block p-1" style={{textAlign: "center"}}>

                                    <HomepageCircularPiechart percentage={this.state.home.qol ? this.state.home.qol.score : 0}/>

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
                                    <h4 id="step2" className="card-title">Health Card </h4>
                                    <h6 className="card-subtitle text-muted">see result of individual category survey</h6>
                                </div>

                                <HomepageBarchart />

                            </div>
                        </div>
                    </div>
                    <div className="row my-flex-card">

                        {/*<!-- your achevments -->*/}

                        <div className="col-md-6">
                            <div className="card">

                                {/*<!-- Heading -->*/}

                                <div className="card-block pt-1 pb-2">
                                    <h4 id="step3" className="card-title">Your achevemnts</h4>
                                    <h6 className="card-subtitle text-muted">Your collection</h6>
                                </div>

                                {/*<!-- Image -->*/}

                                <HomepageCarousel badges={this.state.home.badges} />


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
                                    <h4 id="step4" className="card-title"><h2>Level {this.state.home.level} </h2></h4>
                                </div>

                                {/*<!-- Image -->*/}

                                <div className="card-block pb-0">
                                    <HomepageProgressBar />
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
