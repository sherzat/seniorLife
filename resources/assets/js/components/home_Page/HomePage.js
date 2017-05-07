
import React, { Component } from 'react';
import HomepageProgressBar from './HomepageProgressBar';
import HomepageCircularPiechart from './HomepageCircularPiechart';

class HomePage extends  Component {
    render() {
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

                                    <HomepageCircularPiechart/>

                                </div>

                                {/* <!-- Text Content -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <p className="card-text">You have completed 10 surveys this week</p>
                                </div>

                                {/*  <!-- button -->*/}

                                <div className="card-block p-1 pb-3 mx-auto">
                                    <button className="btn btn-success">Read Detail >></button>
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

                                <div className="card-block p-1">
                                    <div id="myCarousel" className="carousel slide" data-ride="carousel">

                                        <ol className="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" className="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                        </ol>

                                        <div className="carousel-inner" role="listbox">

                                            <div className="carousel-item active">
                                                <div className="mx-auto">

                                                    <img
                                                        className="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                        src="/img/badges/first_survey.png" alt="First slide"></img>
                                                </div>

                                            </div>


                                            <div className="carousel-item">
                                                <div className="mx-auto">
                                                    <img
                                                        className="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                        src="/img/badges/first_survey.png" alt="Second slide"></img>

                                                </div>
                                            </div>


                                            <div className="carousel-item">
                                                <div className="mx-auto">
                                                    <img
                                                        className="d-block img-fluid ml-auto mr-auto slider_image_item "
                                                        src="/img/badges/first_survey.png" alt="Third slide"></img>

                                                </div>
                                            </div>

                                        </div>

                                        <a className="carousel-control-prev" href="#myCarousel" role="button"
                                           data-slide="prev">
                                            <i className="fa fa-chevron-left" aria-hidden="true"></i>
                                            <span className="sr-only">Previous</span>
                                        </a>
                                        <a className="carousel-control-next" href="#myCarousel" role="button"
                                           data-slide="next">
                                            <i className="fa fa-chevron-right" aria-hidden="true"></i>
                                            <span className="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>

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
                                    <h4 className="card-title"><h2>Level 1</h2></h4>
                                </div>

                                {/*<!-- Image -->*/}

                                <div className="card-block pb-0">
                                    <HomepageProgressBar/>
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
