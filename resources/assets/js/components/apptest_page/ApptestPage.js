import React, {Component} from 'react';

class ApptestPage extends Component {
    render() {
        return (
            <div>
                <div className="card">
                    <div className="card-header">Likert scales with next button</div>

                    <div className="card-block">
                        <div className="row justify-content-wrap">
                            <div className="col-xs-2 mx-2 my-2">
                                <a className="card text-center" onClick=" window.location.assign('/facebook.com');">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="/img/Circular_Likert_Scale.PNG"></img>
                                            <div className="card-title">Circular Likert Scale</div>
                                    </div>
                                </a>
                            </div>

                            <div className="col-xs-2 mx-2 my-2">
                                <button className="card text-center" onClick="window.location.href='/sliderLikertScale'">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="/img/Slider_Likert_Scale.PNG"></img>
                                            <div className="card-title">Slider Likert Scale</div>
                                    </div>
                                </button>
                            </div>

                            <div className="col-xs-2 mx-2 my-2">
                                <button className="card text-center">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="..." alt="Card image cap"></img>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="card">
                    <div className="card-header">Likert scales with out next button</div>


                    <div className="card-block ">
                        <div className="row justify-content-wrap">
                            <div className="col-xs-2 mx-2 my-2">
                                <button className="card text-center">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="/img/Circular_Likert_Scale.PNG"></img>
                                            <div className="card-title">Circular Likert Scale</div>
                                    </div>
                                </button>
                            </div>

                            <div className="col-xs-2 mx-2 my-2">
                                <button className="card text-center">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="/img/Slider_Likert_Scale.PNG"></img>
                                            <div className="card-title">Slider Likert Scale</div>
                                    </div>
                                </button>
                            </div>

                            <div className="col-xs-2 mx-2 my-2">
                                <button className="card text-center">
                                    <div className="card-block p-1">
                                        <img className="card-img-top" src="..." alt="Card image cap"></img>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        );
    }
}

export default ApptestPage;
