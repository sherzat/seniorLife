import React, {Component} from 'react';
import Survey from './Survey';

class ApptestPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
          likertScale:'',
          withNext:true,
          showLikertScale:false,
        };
        this.renderLikertScale=this.renderLikertScale.bind(this);
        this.handleOnclickQuit=this.handleOnclickQuit.bind(this);
    }

    renderLikertScale(likertScale, withNext) {
        this.setState({
            showLikertScale: true,
            likertScale: likertScale,
            withNext: withNext,
        });
    }

    handleOnclickQuit() {
          this.setState({
            showLikertScale: false,
          });
    }

    render() {
        var likertScale =
        <Survey
            handleOnclickQuit={this.handleOnclickQuit}
            category={"test"}
            withNext={this.state.withNext}
            likertScale={this.state.likertScale}
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
        this.handleOnClick=this.handleOnClick.bind(this);
    }

    handleOnClick(event){
        this.props.renderLikertScale(event.target.name,this.props.withNext);
    }

    render() {
        var style = {
            width : 243,
            height:57
        }
        return (
            <div>
                <div className="Rail-way-font">
                    <div className="row mt-2 Rail-way-font">
                        <div className="col-md-12 mb-5 col-xs-12">
                            <div className="card">
                                <div className="card-header">
                                    <h4 id="step1"className="card-title">Likert Scale {this.props.withNext ? "With" : "Without" } Next Button</h4>
                                    <h6 className="card-subtitle">Select one likert scale to continue your survey</h6>
                                </div>
                                <div className="row">
                                    <div className="card-block pt-0">
                                        <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                                            <button name="circular" className="btn btn-success" style={style} onClick={this.handleOnClick}><h4>Circular Likert Scale</h4></button>
                                            <button  name="slider" className="btn btn-success " style={style} onClick={this.handleOnClick}><h4>Slider Likert Scale</h4></button>
                                            <button  name="listbutton" className="btn btn-success " style={style} onClick={this.handleOnClick}><h4>List Likert Scale</h4></button>
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
