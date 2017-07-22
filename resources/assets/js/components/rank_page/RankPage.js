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
        var userId = this.state.rankData.currentUser.id;

        const rankUsers = this.state.rankData.rankUsers.map(
            (rank) =>
                <RankElement
                    current_userId={userId}
                    key={rank.id}
                    ranking={rankId++}
                    user_avatar={rank.avatar}
                    user_name={rank.name}
                    user_id={rank.id}
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

                <div className="card">
                    <div className="pb-2 userRank-font">{rankUsers[userIndex]}</div>
                    {rankUsers}
                </div>

            </div>
        );
    }
}

export default RankPage;
