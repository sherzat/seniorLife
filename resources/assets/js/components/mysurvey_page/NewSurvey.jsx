import React, { Component } from 'react'
<<<<<<< HEAD:resources/assets/js/components/my_survey/NewSurvey.jsx


class Category extends Component {
  
  render() {
    return (
      <div className="col-xs-2 mb-2">
        <button>
        <div className="card text-center" >
=======



class Category extends Component {
    constructor(props) {
        super(props);


        this.handleOnclick = this.handleOnclick.bind(this);
    }
    handleOnclick() {
        this.props.handleOnclick()
        console.log('in category')

    }
  render() {
    return (
      <div className="col-xs-2 mb-2">
        <button className="card text-center" onClick={this.handleOnclick} >
>>>>>>> e0f189d8700b7cda10abfa8800690c7723620d8e:resources/assets/js/components/mysurvey_page/NewSurvey.jsx
          <div className="card-block">
            <img className="card-img-top"
              src={this.props.img_src}
              alt="Image Community life"
              width="80"
              height="80"
              />
            <p className="card-text">{this.props.name}</p>
          </div>
<<<<<<< HEAD:resources/assets/js/components/my_survey/NewSurvey.jsx
        </div>
      </button>
=======
        </button>
>>>>>>> e0f189d8700b7cda10abfa8800690c7723620d8e:resources/assets/js/components/mysurvey_page/NewSurvey.jsx
      </div>
    );
  }
}

class NewSurvey extends Component {
  render () {
    var url="/survey/new";
    var categorys = [
      {id: 0, name: "Community life", img_src:"/img/categorys/003-people.svg"},
      {id: 1, name: "Education", img_src:"/img/categorys/006-learning.svg" },
      {id: 2, name: "Fitness", img_src:"/img/categorys/008-dumbbell.svg"},
      {id: 3, name: "Nutrition", img_src:"/img/categorys/010-fruit-salad.svg"},
      {id: 4, name: "Personal care", img_src:"/img/categorys/005-doctor.svg"},
      {id: 5, name: "Health", img_src:"/img/categorys/009-hospital.svg"},
      {id: 6, name: "Relationship", img_src:"/img/categorys/people.svg"},
      {id: 7, name: "Comunication", img_src:"/img/categorys/001-chat.svg"},
      {id: 8, name: "Recreativity", img_src:"/img/categorys/002-businessman.svg"},
      {id: 9, name: "Housing", img_src:"/img/categorys/004-construction.svg"},
    ]


    var toReturns = categorys.map(category=>{
      return <Category key={category.id} name={category.name} img_src = {category.img_src} handleOnclick={this.props.handleOnclick} />
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
