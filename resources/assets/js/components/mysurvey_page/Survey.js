import React, { Component } from 'react';

import Circular_scale_1 from './Circular_scale_1';
import Circular_scale_3 from './Circular_scale_3';
import Question from './Question';
import Slider_scale from '../Slider_scale';
import HomepageProgressBar from '../home_Page/HomepageProgressBar';
import HomePageSlider from '../home_Page/HomePageSlider';
import HomePageRadioButton from '../home_Page/HomepageRadioButton';

class Survey extends Component {
  constructor(props) {
    super(props);
    this.state = {
      data:[],
      currentQuestion: null,
      answer:null,
      question_id:null,
      score:0,
      submitDisabled:true,
    };
    this.handleNextButton= this.handleNextButton.bind(this);
    this.handleAnswer= this.handleAnswer.bind(this);
    this.sendAnswers=this.sendAnswers.bind(this);
    this.handleGoBackBtn = this.handleGoBackBtn.bind(this);
  }

  handleNextButton(){
    if(this.state.answer!=null){
        console.log("go to sendAnswers()");
        this.sendAnswers();
    }
    this.setState({
      currentQuestion: this.state.currentQuestion+1,
      answer:null,
      submitDisabled:true,
      });
  }

  handleAnswer(answer, question_id){
    console.log(answer);
    this.setState({answer:answer, question_id: question_id, submitDisabled:false});
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

      this.setState({data:result, currentQuestion:0,}, function(){
      });
    }.bind(this))
  }

  handleGoBackBtn() {
    this.props.handleOnclick("survey");
  }


  render(){
    const survey_question= this.state.data.map((each)=>
      <Question key={each.id} question={each.question} />
    );
    const choices_for_q= this.state.data.map((each)=>
      <Circular_scale_1 key={each.id} question_id={each.id} choices={each.choices} handleAnswer={this.handleAnswer}/>
    );
    console.log(survey_question.length);
    return(
      <div>

        <div className="row">
          <div className="col-md-9">
            <div className="row card card-group Bg-color-midnight">
              <div className="col-md-3 p-0">
                <img className="card-img p-0" src="/img/avatars/children/Child-women-avatar.png"></img>
              </div>
              <div className="col-md-9 p-0">
                <div className="card-block vertical-align">
                  <h2 className="text-white vertical-align">{survey_question[this.state.currentQuestion]}</h2>
                </div>
              </div>
            </div>

            <div className="row card">
              <li className="list-group-item justify-content-between Set-width">
                <button className="btn btn-success">Prev</button>

            {choices_for_q[this.state.currentQuestion]}



                <button
                  className="bg btn-success btn-lg" type="button"

                  onClick={this.handleNextButton}>next</button>

              </li>
            </div>
          </div>
          <div className="col-md-3">

            <div className="card my-flex-card bg-faded">
              <div className="card-block ">
                <small>{this.state.currentQuestion}/{survey_question.length}</small>
                <HomepageProgressBar percent={(this.state.currentQuestion/survey_question.length)*100}/>
              </div>
              <div className="card-block">
                <dt>Category:</dt> <dd className="ml-auto">{this.props.selectedCategory}</dd>
              </div>
              <div className="card-block ">
                Score: {this.state.score}
              </div>
              <div className="card-block">
                <a href="#" className="btn button" onClick={this.handleGoBackBtn}>back to categories</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    );
  }
}

export default Survey;
