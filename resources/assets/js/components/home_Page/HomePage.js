
import React, { Component } from 'react';
import PlayerStatus from '../components/PlayerStatus';
import HomepageCarousel from './HomepageCarousel';
import HomepageBarchart from './HomepageBarchart';
import HomePageRadarChart from './HomePageRadarChart';
import RankElement from '../rank_page/RankElement.js';
import Ranking from '../rank_page/Ranking.js';
import {ModalContainer, ModalDialog} from 'react-modal-dialog';


class HomePage extends  Component {
  constructor(props) {
    super(props);
    this.state = {
      home:[],
      loaded:false,
      showLineChart: false,
      category:"",
      isShowingModal: false,
    };

    this.getData=this.getData.bind(this);
    this.showLineChart=this.showLineChart.bind(this);
    this.handleModalClose = this.handleModalClose.bind(this);
  }

  handleModalClick = () => this.setState({isShowingModal: true})
  handleModalClose () {
    this.setState({isShowingModal: false})
  }

  /*//sending request to  set  flag to 1 value*/
  showLineChart(category_name){
    this.setState({showLineChart:true ,category:category_name});
  }
  getData() {
    var url ="/home/1";
    $.ajax({
      method: "GET",
      url: url,
    })
    .done(function( result ) {
      console.log(result)
      this.setState({home:result},function(){
        this.setState({loaded:true}, function(){
            // this.setState({isShowingModal: true})
          if(this.state.home.flag==0){
            sessionStorage.setItem('firstvisit', this.state.home.flag);
            startIntro('home');
          }
        });
      });
    }.bind(this))
  }

  componentWillMount(){
    this.getData();
  }

  componentDidMount(){

  }
  render(){
    if(!this.state.loaded)
      return (<h>loading</h>);

    return (
      <div>
        <div className="Rail-way-font">
          <div className="row mt-2 Rail-way-font">
            <div className="col-md-12 col-xs-12">
              <div className="card mb-5">

                <div className="card-header">
                  <h4 id="step1"className="card-title">Quality of Life</h4>
                  <h6 className="card-subtitle">Overall score of your last survey</h6>
                </div>

                <div className="row">
                  <div className="col-md-6 ">
                    <div className="card-block ">
                        <HomePageRadarChart chartData={this.state.home.surveyResult}  showLineChart={this.showLineChart}/>
                    </div>

                  </div>

                  <div className="col-md-6">
                        <div className="card-block ">
                            {this.state.showLineChart ?
                                <HomepageBarchart chartData={this.state.home.surveyResult} category={this.state.category} />
                                :
                                <p>Click on a category to see result over time</p> }
                        </div>
                  </div>

                </div>
              </div>
                <div className="row d-flex ">

                      {/*<!-- your achevments -->*/}

                      <div className="col-md-6 align-self-stretch mb-4">

                          <div className="card h-100">

                              {/*<!-- Heading -->*/}

                              <div className="card-header">
                                  <h4 id="step2"className="card-title">Badge</h4>
                                  <h6 className="card-subtitle">In progress badges</h6>
                              </div>


                              {/*<!-- Image -->*/}
                              <div className="card-block">
                                  <HomepageCarousel badges={this.state.home} />

                                  <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                                      <a  className="btn btn-success " href="/achievement">More badges</a>
                                  </div>

                                  {/*<!-- your progress -->*/}

                              </div>
                          </div>
                      </div>
                      <div className="col-md-6 align-self-stretch mb-4">

                          {/*<!-- Heading -->*/}

                          <div className="card h-100">

                              <div className="card-header">
                                  <h4 id="step3"className="card-title">Ranking</h4>
                                  <h6 className="card-subtitle">Ranking is based on total points collected</h6>
                              </div>

                              <div className="card-block pt-3">
                                  <Ranking
                                      rankUsers = {this.state.home.rankUsers}
                                      currentUser = {this.state.home.currentUser}
                                      mode = 'short'
                                  />

                              </div>
                          </div>
                      </div>
                  </div>

            </div>

          </div>
        </div>
        {
          this.state.isShowingModal &&
        <ModalContainer>
            <ModalContainer onClose={this.handleModalClose}>
                <ModalDialog onClose={this.handleModalClose}>
                  <div className="card-block" style={{width:"300px"}}>
                      <div className="d-flex justify-content-around align-items-center ">
                      <h3 className="">hello</h3>
                      </div>
                  </div>
                </ModalDialog>
            </ModalContainer>
        </ModalContainer>
        }
      </div>
        );
    }
}

export default HomePage;
