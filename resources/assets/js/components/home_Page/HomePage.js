
import React, { Component } from 'react';
import PlayerStatus from '../components/PlayerStatus';
import HomepageCarousel from './HomepageCarousel';
import HomepageBarchart from './HomepageBarchart';
import HomePageRadarChart from './HomePageRadarChart';
import RankElement from '../rank_page/RankElement.js';
import Ranking from '../rank_page/Ranking.js';

class HomePage extends  Component {
  constructor(props) {
    super(props);
    this.state = {home:[],rankData:[], achievement:[], loaded:false};
    this.getData=this.getData.bind(this);
  }

  /*//sending request to  set  flag to 1 value*/

  getData() {
    var url ="/home/1";
    $.ajax({
      method: "GET",
      url: url,
    })
    .done(function( result ) {

      console.log(result)
      this.setState({home:result});

    }.bind(this))

      var url ="/getAchievementData";
      $.ajax({
          method: "GET",
          url: url,
      })
          .done(function( result ) {

              console.log(result)
              this.setState({achievement:result});

          }.bind(this))

    var url ="/getRankData";
    $.ajax({
        method: "GET",
        url: url,
    })
        .done(function( result ) {

            console.log(result)
            this.setState({rankData:result}, function(){
              this.setState({loaded:true}, function(){
                if(this.state.home.flag==0){
                  sessionStorage.setItem('firstvisit', this.state.home.flag);
                  startIntro('home');
                }
              });

            } );

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
                    <div className="card-block pt-0">
                        <HomePageRadarChart chartData={this.state.home.chartData}/>
                      </div>
                    </div>

                    <div className="col-md-6">
                      <div className="card-block pt-0">
                        <HomepageBarchart chartData={this.state.home.chartData} />
                      </div>
                    </div>
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
                    <h4 id="step1"className="card-title">Achievement</h4>
                    <h6 className="card-subtitle">In progress badges</h6>
                  </div>


                  {/*<!-- Image -->*/}
                  <div className="card-block">
                      <HomepageCarousel badges={this.state.achievement} />

                      <div className="card-block p-0  my-0 mt-2 d-flex justify-content-around">
                        <a  className="btn btn-success " href="/achievement">More achievements</a>
                      </div>
                    </div>
                </div>
              </div>

              {/*<!-- your progress -->*/}

              <div className="col-md-6 align-self-stretch mb-4">

                {/*<!-- Heading -->*/}

                <div className="card h-100">

                  <div className="card-header">
                    <h4 id="step1"className="card-title">Player status</h4>
                    <h6 className="card-subtitle">Rank</h6>
                  </div>

                  <div className="card-block pt-3">
                    <Ranking
                      rankUsers = {this.state.rankData.rankUsers}
                      currentUser = {this.state.rankData.currentUser}
                      mode = 'short'
                      />

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      );
    }
  }

  export default HomePage;
