
import React, { Component } from 'react';
import PlayerStatus from '../components/PlayerStatus';
import HomepageCarousel from './HomepageCarousel';
import HomepageLineChart from './HomepageLineChart';
import HomePageRadarChart from './HomePageRadarChart';
import RankElement from '../rank_page/RankElement.js';
import Ranking from '../rank_page/Ranking.js';

class HomePage extends  Component {
    constructor(props) {
        super(props);
        this.state = {
            home:[],
            loaded:false,
            showLineChart: false,
            category:"",
        };

        this.getData=this.getData.bind(this);
        this.showLineChart=this.showLineChart.bind(this);
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
                                            <HomePageRadarChart chartData={this.state.home.surveyResult}  showLineChart={this.showLineChart}/>
                                        </div>
                                    </div>

                                    <div className="col-md-6">
                                        <div className="card-block pt-0">
                                            {this.state.showLineChart ?
                                                <HomepageLineChart chartData={this.state.home.surveyResult} category={this.state.category} />
                                                :
                                                <p>Click on a category to see result over time</p>
                                            }
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
                                    <h4 id="step2"className="card-title">Achievement</h4>
                                    <h6 className="card-subtitle">In progress badges</h6>
                                </div>


                                {/*<!-- Image -->*/}
                                <div className="card-block">
                                    <HomepageCarousel badges={this.state.home} />

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
                                    <h4 id="step3"className="card-title">Player status</h4>
                                    <h6 className="card-subtitle">Rank</h6>
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
        );
    }
}

export default HomePage;
