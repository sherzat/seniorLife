import React, {Component} from 'react';

class ApptestPage extends Component {

    constructor(props) {
        super(props);

        this.handleOnclick = this.handleOnclick.bind(this);
    }
    handleOnclick() {
        window.location.assign('/mysurvey');
    }
    render() {
        return (
            <div>
                <div className="row">

                    <div className="col-md-6">

                        <div className="card">
                            <div className="card-header text-center">Likert scales with next button</div>

                            <div className="card-block mx-auto">
                                <div className="row justify-content-wrap">
                                    <div className="col-xs-2 mx-2 my-2">
                                        <button className="card text-center" onClick={this.handleOnclick} >
                                            <div className="card-block p-1">
                                                <img className="card-img-top" src="/img/Circular_Likert_Scale.PNG"></img>
                                                    <div className="card-title">Circular Likert Scale</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card">
                        <div className="card-block mx-auto">
                            <div className="row justify-content-wrap">
                                <div className="col-xs-2 mx-2 my-2">
                                    <button className="card text-center">
                                        <div className="card-block p-1">
                                            <img className="card-img-top" src="/img/Slider_Likert_Scale.PNG"></img>
                                            <div className="card-title">Slider Likert Scale</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div className="card">
                        <div className="card-block mx-auto">
                            <div className="row justify-content-wrap">
                                <div className="col-xs-2 mx-2 my-2">
                                    <button className="card text-center">
                                        <div className="card-block p-1">
                                            <img className="card-img-top" src="/img/List_Likert_Scale.PNG" alt="Card image cap"></img>
                                            <div className="card-title">List Likert Scale</div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

                    <div className="col-md-6">

                        <div className="card">
                            <div className="card-header text-center"> Likert scales with out next button</div>

                            <div className="card-block mx-auto">
                                <div className="row justify-content-wrap">
                                    <div className="col-xs-2 mx-2 my-2">
                                        <button className="card text-center" onClick={this.handleOnclick} >
                                            <div className="card-block p-1">
                                                <img className="card-img-top" src="/img/Circular_Likert_Scale.PNG"></img>
                                                <div className="card-title">Circular Likert Scale</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card">
                            <div className="card-block mx-auto">
                                <div className="row justify-content-wrap">
                                    <div className="col-xs-2 mx-2 my-2">
                                        <button className="card text-center">
                                            <div className="card-block p-1">
                                                <img className="card-img-top" src="/img/Slider_Likert_Scale.PNG"></img>
                                                <div className="card-title">Slider Likert Scale</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card">
                            <div className="card-block mx-auto">
                                <div className="row justify-content-wrap">
                                    <div className="col-xs-2 mx-2 my-2">
                                        <button className="card text-center">
                                            <div className="card-block p-1">
                                                <img className="card-img-top" src="/img/List_Likert_Scale.PNG" alt="Card image cap"></img>
                                                <div className="card-title">List Likert Scale</div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        );
    }
}

export default ApptestPage;
