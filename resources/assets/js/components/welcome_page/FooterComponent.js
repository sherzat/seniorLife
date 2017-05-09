
import React, {Component} from 'react';

class FooterComponent extends Component {
    render() {
        return (
            <div>
                <div className="container-fluid">

                    {/*Example row of columns */}

                    <div className="row ">
                        <div className="col-md-4 m-0 p-0">
                            <div className="card my-flex-card">
                                <div className="card-header Bg-color"><h4>Survey</h4></div>
                                <div className="card-block">
                                    <h5 className="card-title">Where you fill the questionnaire</h5>
                                    <img className="card-img-top img-responsive pull-left" src="img/Survey.png" alt=""
                                         width="120" height="120" align="left"/>
                                    <p>In Survey part, you will find different categories and
                                        questions inside them. These questions are used to investigate
                                        your characteristics, behaviors, or opinions regarding different
                                        things. </p>
                                    <p><a className="btn btn-success" href="#" role="button">Read more &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4 m-0 p-0">
                            <div className="card my-flex-card">
                                <div className="card-header Bg-color"><h4>Empatica</h4></div>
                                <div className="card-block">
                                    <h5 className="card-title">Your wristband watch</h5>
                                    <img className="card-img-top img-responsive pull-left" src="img/Empatica.png"
                                         width="120" height="120"
                                         align="left"/>
                                    <p>Empatica is a
                                        wristband a wearable wireless
                                        device designed for continuous, real-time data acquisition in daily
                                        life. Using your
                                        Empatica you can monitor seizures, sleep, and physical activity. </p>
                                    <p><a className="btn btn-success" href="#" role="button">Read more &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-4 m-0 p-0">
                            <div className="card my-flex-card">
                                <div className="card-header Bg-color"><h4>Share</h4></div>
                                <div className="card-block">
                                    <h5 className="card-title">Let other know your activities</h5>
                                    <img className="card-img-top img-responsive pull-left" src="img/Share.png"
                                         width="120"
                                         height="120"
                                         align="left"/>
                                    <p className="card-text">By sharing your
                                        activities, You can let your
                                        friends and families
                                        know about your health in general. You can share your survey results,
                                        Empatica results,
                                        your rank and how many badges you collect and more. </p>
                                    <p><a className="btn btn-success" href="#" role="button">Read more &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        );
    }
}

export default FooterComponent;