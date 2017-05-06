import React, { Component } from 'react'

class Category extends Component {

  render() {
    return (
      <div className="col-xs-2 mb-2">
        <a className="card text-center" href={this.props.url}>
          <div className="card-block">
            <img className="card-img-top"
              src="/img/categorys/002-businessman.svg"
              alt="Image Community life"
              width="auto"
              height="80"
              />
              <p className="card-text">Community life</p>
          </div>
        </a>
      </div>
    );
  }
}

class NewSurvey extends Component {
  render () {
    var urls = ["/self_assessment","/mysurvey","/home", "/rank"];
    var toReturns = urls.map(url=>{
      return <Category url={url} />
    });
    return (
      <div className="row">
        <div className="col-md-12 col-xs-12">
          <div className="card mx-auto">
            <div className="row">
              <div className="col-md-4 ">
                  <div className="card-block ">
                    <h4 className="card-title">
                      Start a new survey
                    </h4>
                    <p className="card-text">
                      You can select one category to start your survey.
                    </p>
                  </div>
              </div>

              <div className="col-md-8">
                <div className="card-block">
                    <div className="row justify-content-around ">
                      {toReturns}


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

export default NewSurvey;
