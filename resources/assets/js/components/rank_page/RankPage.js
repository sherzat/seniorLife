import React, {Component} from 'react';
import RankElement from './RankElement.js';

class RankPage extends Component {
    constructor(props) {
        super(props);

        this.state = {
            rankData:[],
            loaded:false,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }
    handleOnclick(){

    }
    componentWillMount() {

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
                this.setState({rankData:result} ,function () {
                    this.setState({loaded:true})
                });

            }.bind(this))
    }

    render() {
        if(!this.state.loaded)
            return (<h>loading</h>);

        if(this.state.rankData.flag==0){
            startIntro('rank');
        }
        var rankId=1;
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
        return (
            <div>

                <div className="card ">
                  <div className="card-header">
                      <h4 id="step1"className="card-title">Ranking </h4>
                      <h6 className="card-subtitle">Ranking is ased on the overall score</h6>
                  </div>
                    {rankUsers}
                </div>
            </div>
        );
    }
}

export default RankPage;
