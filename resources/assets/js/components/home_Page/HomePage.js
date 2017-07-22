
import React, { Component } from 'react';
import HomepageProgressBar from './HomepageProgressBar';
import PlayerStatus from '../components/PlayerStatus';
import HomepageCircularPiechart from './HomepageCircularPiechart';
import HomepageCarousel from './HomepageCarousel';
import HomepageBarchart from './HomepageBarchart';
import RankElement from '../rank_page/RankElement.js';

class HomePage extends  Component {
    constructor(props) {
        super(props);
        this.state = {home:[],loaded:false};
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
                this.setState({home:result}, function(){
                  this.setState({loaded:true}, function(){
                    if(this.state.home.flag==0){
                        sessionStorage.setItem('firstvisit', this.state.home.flag);
                        startIntro('home');
                    }
                  });

                });

            }.bind(this))

        var url1 ="/getRankData";
        $.ajax({
            method: "GET",
            url: url1,
        })
            .done(function( result ) {

                console.log(result)
                this.setState({rankData:result} ,function () {
                    this.setState({loaded:true})
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

        var rankId=1;
        var userId = this.state.rankData.currentUser.id;

            const rankUsers = this.state.rankData.rankUsers.map(

                (rank) =>

                    <RankElement
                        key={rank.id}
                        ranking={rankId++}
                        user_avatar={rank.avatar}
                        user_name={rank.name}
                        level={rank.level}
                        points={rank.point} />

            )

        var userIndex = this.state.rankData.rankUsers.findIndex(
            function (element) {
                return element.id == userId;
            }
        );

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
                                    <div className="card-block mx-auto">


                                        {/* <!-- Image -->*/}

                                        <div className="card-block" style={{textAlign: "center"}}>

                                            <HomepageCircularPiechart percentage={this.state.home.qol ? this.state.home.qol.score : 0}/>

                                        </div>

                                        {/* <!-- Text Content -->*/}

                                        <div className="card-block  mx-auto">
                                            <p className="card-text">You have completed {this.state.home.survey} surveys this week</p>
                                        </div>

                                        {/*  <!-- button -->*/}

                                        {/*<div className="card-block  mx-auto">
                                            <button className="btn btn-success">Read Detail</button>
                                        </div>*/}

                                    </div>

                                </div>

                                <div className="col-md-6">
                                    <div className="card-block">
                                        <div className="card-block ">
                                            <h6 className="card-subtitle text-muted">see result of individual category survey</h6>
                                        </div>

                                        <HomepageBarchart />
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
                                    <h6 className="card-subtitle">Your collection</h6>
                                </div>


                                {/*<!-- Image -->*/}

                             <HomepageCarousel badges={this.state.home.badges} />


                                {/*<!-- Text Content -->*/}

                                <div className="card-block p-1 mx-auto">
                                    <p className="card-text">You can earn more badges by completing tasks</p>
                                </div>

                                {/* <!-- button -->*/}

                                <div className="card-block p-1 pb-3 mx-auto">
                                    <a className="btn btn-success" href="/achievement">See more achevement badges</a>
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

                                <div className="card-block">

                                    <div className="pb-2 userRank-font">{rankUsers[userIndex]}</div>

                                    {rankUsers[0]}
                                    {rankUsers[1]}
                                    {rankUsers[2]}

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
