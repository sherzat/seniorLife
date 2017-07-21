import React, {Component} from 'react';
import CollectedBadges from './CollectedBadges';
import AvailableBadges from './AvailableBadges';

class AchievementPage extends Component {
    constructor(props) {
        super(props);

        this.state = {
            achievementData: [],
            loaded: false,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }

    handleOnclick() {

    }

    componentWillMount() {
        this.getData();
        console.log('in achievement')
    }

    getData() {
        var url = "/getAchievementData";
        $.ajax({
            method: "GET",
            url: url,
        })
            .done(function (result) {

                console.log(result)
                this.setState({achievementData: result}, function () {
                    this.setState({loaded: true}, function () {
                        if (this.state.achievementData.flag == 0) {
                            startIntro('achievement').start();
                        }
                    });
                });

            }.bind(this))
    }


    render() {
        if (!this.state.loaded)
            return (<h>loading</h>);

        const collectedBadges = this.state.achievementData.badges.map(
            (badges) =>

                <CollectedBadges key={badges.id}
                                 img_src={badges.badge}
                                 description={badges.description}/>
        )

       const availableBadges = this.state.achievementData.availableBadges.map(
            (availableBadges) =>

                <AvailableBadges key={availableBadges.id}
                                 img_src={availableBadges.badge}
                                 title={availableBadges.title}
                                 description={availableBadges.description}
                                 steps={availableBadges.steps}/>
        )
console.log(availableBadges);
        return (

            <div>

                <div className="card mb-5">

                    <div className="card-header">
                        <h4 id="step11"className="card-title">Collected Badges</h4>
                        <h6 className="card-subtitle">You have collected this badges</h6>
                    </div>

                    <div className="card-block">
                        <div className="row  justify-content-around">

                            {collectedBadges}

                        </div>
                    </div>
                </div>


                <div className="card">

                    <div className="card-header">
                        <h4 id="step11"className="card-title">Future Badges</h4>
                        <h6 className="card-subtitle">You may also collecte this badges</h6>
                    </div>

                    <div className="card-block">
                        <div className="list-group list-group-flush">
                            {availableBadges}
                        </div>
                    </div>
                </div>

            </div>
        );
    }
}

export default AchievementPage;
