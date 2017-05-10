import React, { Component } from 'react';

//import Circular_scale from './Circular_scale';
import Circular_scale_1 from './Circular_scale_1';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';
//import createFragment from 'react-addons-create-fragment'; // ES6
import Slider_scale from '../Slider_scale';
import Balloon from 'react-balloon';

class Survey extends Component {
  constructor(props) {
    super(props);
    this.state = {
      data:[],
      currentQuestionId: null,
      answer:null,
    };
    this.handleNextButton= this.handleNextButton.bind(this);
    this.handleAnswer= this.handleAnswer.bind(this);
  }

  handleNextButton(clicked_item){
    if(this.state.answer!=null){
        console.log("go to sendAnswers()");
    }
    this.setState({
      currentQuestionId: this.state.currentQuestionId+1,
      answer:null,
      });


  }
  handleAnswer(answer){
    console.log(answer);
    this.setState({answer:answer});
  }
  componentWillMount(){
    $.ajax({
      method: "GET",
      url: "survey/new",
      dataType:"json",
    })
    .done(function( result ) {

      this.setState({data:result, currentQuestionId:0}, function(){
      });
    }.bind(this))
  }



  render(){
    const survey_question= this.state.data.map((each)=>
      <Question key={each.id} question={each.question} />
    );
    const choices_for_q= this.state.data.map((each)=>
      <Circular_scale_1 key={each.id} choices={each.choices} handleAnswer={this.handleAnswer}/>
    );
    return(
      <div className="container" id="survey">
        <div className="card">
          <div className="card-header">
            <div className="row justify-content-between">
              <div className="col-sm-10 align-self-center"><Progress completed={33} className={""}/></div>
              <div className="col-sm-2  d-flex justify-content-end"><button >Go back</button></div>
            </div>
          </div>

          <div className="card-block">
            <div className="row">
              <div className="col-md-3 col-sm-12 ">
                <img className="card-img-top" src="/img/avatars/default/default-user.png" width="200" height="200"></img>
                <div className="card-block">
                  <div className="col-md-3 col-sm-12">
                    Score
                  </div>
                </div>
              </div>
              <div className="col-md-9 col-sm-12 ">
                <div className="row " style={{height:"30%"}}>
                  <div className="col-md-12 d-flex">
                    <div className="talk-bubble tri-right left-in">
                      <div className="talktext">
                        {survey_question[this.state.currentQuestionId]}
                      </div>
                    </div>
                    <button className="next-btn" onClick={this.handleNextButton}><i className="fa fa-angle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
                <div className="row">
                  {choices_for_q[this.state.currentQuestionId]}
                  <div className="col-md-12">
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

export default Survey;
