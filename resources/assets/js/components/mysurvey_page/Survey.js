import React, { Component } from 'react';

import Circular_scale_1 from './Circular_scale_1';
import Circular_scale_3 from './Circular_scale_3';
import Question from './Question';
import Slider_scale from '../Slider_scale';
import HomepageProgressBar from '../home_Page/HomepageProgressBar';
import HomePageSlider from '../home_Page/HomePageSlider';
import HomePageRadioButton from '../home_Page/HomepageRadioButton';
import {ModalContainer, ModalDialog} from 'react-modal-dialog';
import PlayerStatus from '../components/PlayerStatus'


class Survey extends Component {
  constructor(props) {
    super(props);
    this.state = {
      data:[],
      currentQuestion: null,
      answer:null,
      question_id:null,
      dataIndex:0,
      isShowingModal: false,
      playerStatus:null,
    };
    this.handleNextButton= this.handleNextButton.bind(this);
    this.handlePrevButton= this.handlePrevButton.bind(this);

    this.handleAnswer= this.handleAnswer.bind(this);
    this.sendAnswers=this.sendAnswers.bind(this);
    this.handleGoBackBtn = this.handleGoBackBtn.bind(this);
    this.changeChildstate = this.changeChildstate.bind(this);
    this.handleModalClose = this.handleModalClose.bind(this);
  }

  //this contains the answers the user responded and will be send to server when all survey questions are finished
  answers = [];

  handleModalClick = () => this.setState({isShowingModal: true})
  handleModalClose () {
    this.setState({isShowingModal: false})
    this.props.handleOnclick("survey");
  }

  handlePrevButton() {
    this.setState({
      currentQuestion: this.state.currentQuestion-1,
    }, function () {
      for (var i = 0; i < this.answers.length; i++) {
        if (i == this.state.currentQuestion){
          // this.setState({answer:this.answers[i].c_id})
          this.changeChildstate(this.answers[i].c_id);
          return
        }
      }
    });
    this.changeChildstate(null);
  }

  changeChildstate(c_id) {
    if(c_id == 1){
      this.setState({rotate_degree: "rotate(-18 350,323.01281127929693)" });
    }
    if(c_id == 2){
      this.setState({rotate_degree: "rotate(-54 350,323.01281127929693)" });
    }
    if(c_id == 3){
      this.setState({rotate_degree: "rotate(-90 350,323.01281127929693)" });
    }
    if(c_id == 4){
      this.setState({rotate_degree: "rotate(-126 350,323.01281127929693)" });
    }
    if(c_id == 5){
      this.setState({rotate_degree: "rotate(-162 350,323.01281127929693)" });
    }
    if(c_id == null){
      this.setState({rotate_degree: "rotate(-180 350,323.01281127929693)" });
    }
  }

  handleNextButton(){

    this.setState({
      currentQuestion: this.state.currentQuestion+1,
    }, function () {
      if(this.state.currentQuestion >= this.state.data.length-1){
        console.log("time to send answers")
      }
      console.log(this.state.currentQuestion)
      for (var i = 0; i < this.answers.length; i++) {
        if (i == this.state.currentQuestion){
          this.changeChildstate(this.answers[i].c_id);
          return
        }
      }

      this.answers.push({});
      this.changeChildstate(null);
    });

  }

  handleAnswer(answer, question_id){
    this.changeChildstate(answer);
    for (var i = 0; i < this.answers.length; i++) {
      if (i == this.state.currentQuestion){
        this.answers.splice(i, 1, {c_id:answer, q_id: question_id});
        console.log(this.answers);
        return
      }
    }
    this.answers.push({c_id:answer, q_id: question_id});
    console.log(this.answers);
  }


  sendAnswers(){

    //remove the not answered the questions from the list
    var answers = this.answers.filter((each)=>
      Object.values(each)!=""
    );
    console.log(answers);


    $.ajax({

      headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },

      type: "POST",
      url: "/survey/store",
      dataType: 'json',
      data: {data: this.answers},
      success: function (response) {
        console.log(response);
        this.setState({playerStatus: response},function(){
          this.handleModalClick();
        });

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

  handleGoBackBtn(completeState) {

    this.props.handleOnclick("survey");
  }


  render(){
    const survey_question= this.state.data.map((each)=>
      <Question key={each.id} question={each.question} />
    );
    const choices_for_q= this.state.data.map((each)=>
      <Circular_scale_1 key={each.id} question_id={each.id} choices={each.choices} answered={this.state.rotate_degree} handleAnswer={this.handleAnswer}/>
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

                <div style={{width:"67px"}}>
                  <button
                    className="btn btn-success"
                    hidden={this.state.currentQuestion == 0? true:false}
                    onClick={this.handlePrevButton}>Prev</button>
                </div>

                {this.state.currentQuestion<this.state.data.length? (choices_for_q[this.state.currentQuestion])
                  : (
                    <div style={{width:"60%"}} className="text-center">
                      <p style={{fontSize: "18px"}}>You have made it till the end!! Please submit your answers.</p>
                      <button className="btn btn-success " onClick={this.sendAnswers}>
                        submit
                      </button>
                    </div>

                  )}

                  <div style={{width:"67px"}}>
                    <button
                      className="btn btn-success "
                      hidden={this.state.currentQuestion == this.state.data.length? true:false}
                      onClick={this.handleNextButton}>Next</button>
                  </div>

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

              <div className="card-block">
                <a href="#" className="btn button" onClick={this.handleGoBackBtn}>back to categories</a>
              </div>
            </div>
          </div>
        </div>
        {
          this.state.isShowingModal &&
        <ModalContainer>
            <ModalContainer onClose={this.handleModalClose}>
                <ModalDialog onClose={this.handleModalClose}>
                  <dl className="row">
                    
                    <p style={{fontSize: "18px"}}>Congratulations</p>
                    <dt className="col-sm-3">you earned:</dt>
                    <dd className="col-sm-9">25 points</dd>

                    <dt className="col-sm-3">The result of the survey :</dt>
                    <dd className="col-sm-9">68 out of 100</dd>

                </dl>
                </ModalDialog>
            </ModalContainer>
        </ModalContainer>
      }
      </div>
    );
  }
}

export default Survey;
