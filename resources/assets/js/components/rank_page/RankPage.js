import React, {Component} from 'react';
import RankElement from './RankElement.js';

class RankPage extends Component {
    constructor(props) {
        super(props);

        this.state = {
            rankData:[],

        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }
    handleOnclick() {

    }
    componentWillMount(){
        this.getData();
        console.log('in rank')


    }
    getData() {
        var url ="/getRankData";
        $.ajax({
            method: "GET",
            url: url,
        })
            .done(function( result ) {

                console.log(result)
                this.setState({rankData:result});

            }.bind(this))
    }

    render() {

        if(this.state.rankData.flag==0){
            startIntro('rank');
        }

        return (
            <div>
                <div className="card">

                    <div className="card-header p-0">
                        <div className="row">
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4>Pictures</h4>
                                </div>
                            </div>
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4 id="step10">Name</h4>
                                </div>
                            </div>
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4 id="step9">Rank</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <RankElement ranking={1}/>
                    <RankElement ranking={2}/>
                    <RankElement ranking={3}/>
                    <RankElement ranking={4}/>
                    <RankElement ranking={5}/>
                    <RankElement ranking={6}/>
                    <RankElement ranking={7}/>
                </div>
            </div>
        );
    }
}

export default RankPage;
