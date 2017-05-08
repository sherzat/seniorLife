import React, { Component } from 'react'
import { Link } from 'react-router-dom';
class Category extends Component {

  render() {
    return (
      <div className="col-xs-2 mb-2">
        <Link to="/mysurvey/new_survey">
        <div className="card text-center" >
          <div className="card-block">
            <img className="card-img-top"
              src="/img/categorys/002-businessman.svg"
              alt="Image Community life"
              width="auto"
              height="80"
              />
            <p className="card-text">{this.props.name}</p>
          </div>
        </div>
        </Link>
      </div>
    );
  }
}

class NewSurvey extends Component {
  render () {
    var url="/survey/new";
    var categorys = [
      {id: 0, name: "Community life"},
      {id: 1, name: "Education"},
      {id: 2, name: "Fitness"},
      {id: 3, name: "Nutrition"},
      {id: 4, name: "Personal care"},
      {id: 5, name: "Health"},
      {id: 6, name: "Relationship"},
      {id: 7, name: "Comunication"},
      {id: 8, name: "Recreativity"},
      {id: 9, name: "Housing"},
    ]


    var toReturns = categorys.map(category=>{
      return <Category key={category.id} name={category.name}/>
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
