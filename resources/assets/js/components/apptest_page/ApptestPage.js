import React, {Component} from 'react';
import Survey from './Survey';

class ApptestPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
          likertscale:'',
          withNext:true,
          showLikertScale:false,
        };
        this.renderLikertScale=this.renderLikertScale.bind(this);
        this.handleOnclickQuit=this.handleOnclickQuit.bind(this);
        this.handleOnClick=this.handleOnClick.bind(this);
    }
    componentWillMount(){

    }
    handleOnClick(event) {
        console.log({timeStamp:event.timeStamp, id: event.currentTarget.id, name: event.currentTarget.name, onClickEvent:event.currentTarget }.onClickEvent);
    }
    renderLikertScale(likertscale, withNext){
        // console.log([likertscale,withNext]);
        this.setState({
            showLikertScale:true,
            likertscale: likertscale,
            withNext:withNext,
        });

    }
    handleOnclickQuit(target) {
        if (target == 'survey'){
          this.setState({
            showLikertScale: false,
          });
        }
    }
    render() {
        var likertScale =
        <Survey
            handleOnclickQuit={this.handleOnclickQuit}
            selectedCategory={"test"}
            withNext={this.state.withNext}
            selectedCategoryId={this.state.likertscale}
            onClick={this.handleOnClick}
        />


        return (
            <div>
                {this.state.showLikertScale ? likertScale:
                    <div>
                        <TestBlock withNext={true} renderLikertScale={this.renderLikertScale} onClick={this.handleOnClick}/>
                        <TestBlock withNext={false} renderLikertScale={this.renderLikertScale} onClick={this.handleOnClick}/>
                    </div>
                }

            </div>
        );
    }
}

export default ApptestPage;

class TestBlock extends Component {
    constructor(props) {
        super(props);
        this.state = {};
        this.handleOnClick=this.handleOnClick.bind(this);
    }

    handleOnClick(event){
        // console.log(event.target.name);
        this.props.renderLikertScale(event.target.name,this.props.withNext);
        this.props.onClick(event);
    }
    render() {
        var style = {
            width : 176,
        }
        return (
            <div>
                    <div className="Rail-way-font">
                        <div className="row mt-2 Rail-way-font">
                            <div className="col-md-12 col-xs-12">
                                <div className="card">

                                    <div className="card-header">
                                        <h4 id="step1"className="card-title">Likert Scale {this.props.withNext ? "With" : "Without" } Next Button</h4>
                                        <h6 className="card-subtitle">Select one likert scale to continue your survey</h6>
                                    </div>

                                    <div className="row">

                                        <div className="card-block pt-0">
                                            <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                                                <button name="circular" className="btn btn-success" style={style} onClick={this.handleOnClick}>Circular Likert Scale</button>

                                            </div>

                                            <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                                                <button  name="slider" className="btn btn-success " style={style} onClick={this.handleOnClick}>Slider Likert Scale</button>
                                            </div>

                                            <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                                                <button  name="listbutton" className="btn btn-success " style={style} onClick={this.handleOnClick}>List Likert Scale</button>
                                            </div>
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


{/*
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

</div>*/}
