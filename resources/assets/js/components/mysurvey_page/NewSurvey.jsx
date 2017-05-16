import React, { Component } from 'react'



class Category extends Component {
    constructor(props) {
        super(props);


        this.handleOnclick = this.handleOnclick.bind(this);
    }
    handleOnclick() {
        this.props.handleOnclick(this.props.name)
        console.log('in category')

    }
  render() {
    return (
      <div className="col-xs-2 mx-2 my-2">
        <button className="card text-center" onClick={this.handleOnclick} >
          <div className="card-block p-1">
            <img className="card-img-top"
              src={this.props.img_src}
              alt="Image Community life"
              width="80"
              height="80"
              />
            <p className="card-text category-fix-width">{this.props.name}</p>
          </div>

        </button>
      </div>
    );
  }
}

class NewSurvey extends Component {
  render () {
    var url="/survey/new";
    var categorys = this.props.categories;
    //
    // [
    //   {id: 0, name: "Cognition", img_src:"/img/categorys/001-mind.svg"},
    //
    // ]


    var toReturns = categorys.map(category=>{
      return <Category key={category.id} name={category.name} img_src = {category.img_src} handleOnclick={this.props.handleOnclick} />
    });
    return (
      <div className="row mt-2 Rail-way-font">
        <div className="col-md-12 col-xs-12">
          <div className="card mx-auto">
            <div className="row">
              <div className="col-md-4 ">
                  <div className="card-block ">
                    <h4 id="step7" className="card-title">
                      Start a new survey
                    </h4>
                    <p className="card-text">
                      You can select one category to start your survey.
                    </p>
                  </div>
              </div>

              <div className="col-md-8">
                <div className="card-block">
                    <div className="row justify-content-wrap ">
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
