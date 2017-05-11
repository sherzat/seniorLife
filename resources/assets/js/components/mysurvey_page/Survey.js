import React, { Component } from 'react';

//import Circular_scale from './Circular_scale';
import Circular_scale_1 from './Circular_scale_1';
import Question from './Question';
//import Progress from './Progress';
import Progress from 'react-progressbar';
//import createFragment from 'react-addons-create-fragment'; // ES6
import Slider_scale from '../Slider_scale';

class Survey extends Component {
  constructor(props) {
    super(props);
    this.state = {
      data:[],
      currentQuestion: null,
      answer:null,
      question_id:null,
      score:0,
    };
    this.handleNextButton= this.handleNextButton.bind(this);
    this.handleAnswer= this.handleAnswer.bind(this);
    this.sendAnswers=this.sendAnswers.bind(this);
  }

  handleNextButton(){
    if(this.state.answer!=null){
        console.log("go to sendAnswers()");
        this.sendAnswers();
    }
    this.setState({
      currentQuestion: this.state.currentQuestion+1,
      answer:null,
      });


  }
  handleAnswer(answer, question_id){
    console.log(answer);
    this.setState({answer:answer, question_id: question_id});
  }

  sendAnswers(){
    if(this.state.answer == null)
      return
    var answer={question_id: this.state.question_id, choice_id: this.state.answer};
    console.log(answer);
    $.ajax({

      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },

      type: "POST",
      url: "/survey/store",
      dataType: 'json',
      data: {data: answer},
      success: function (response) {
        // you will get response from your php page (what you echo or print)
        console.log(response);
        this.setState({score: this.state.score +1 });

      }.bind(this),
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }.bind(this),

      dataType: "text",
    });
  }
  componentWillMount(){
    $.ajax({
      method: "GET",
      url: "survey/new",
      dataType:"json",
    })
    .done(function( result ) {

      this.setState({data:result, currentQuestion:0}, function(){
      });
    }.bind(this))
  }



  render(){
    const survey_question= this.state.data.map((each)=>
      <Question key={each.id} question={each.question} />
    );
    const choices_for_q= this.state.data.map((each)=>
      <Circular_scale_1 key={each.id} question_id={each.id} choices={each.choices} handleAnswer={this.handleAnswer}/>
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
                    Score: {this.state.score}
                  </div>
                </div>
              </div>
              <div className="col-md-9 col-sm-12 ">
                <div className="row " style={{height:"30%"}}>
                  <div className="col-md-12 d-flex">
                    <div className="talk-bubble tri-right left-in">
                      <div className="talktext">
                        {survey_question[this.state.currentQuestion]}
                      </div>
                    </div>
                    <button className="next-btn" onClick={this.handleNextButton}><i className="fa fa-angle-right" aria-hidden="true"></i></button>
                  </div>
                </div>
                <div className="row">
                  {choices_for_q[this.state.currentQuestion]}
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
