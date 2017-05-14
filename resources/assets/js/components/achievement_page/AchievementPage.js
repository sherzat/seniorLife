import React, {Component} from 'react';
import CollectedBadges from './CollectedBadges';
import AvailableBadges from './AvailableBadges';

class AchievementPage extends Component {
    constructor(props) {
        super(props);

        this.state = {
            achievementData:[],

        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }
    handleOnclick() {

    }
    componentWillMount(){
        this.getData();
        console.log('in achievement')


    }
    getData() {
        var url ="/getAchievementData";
        $.ajax({
            method: "GET",
            url: url,
        })
            .done(function( result ) {

                console.log(result)
                this.setState({achievementData:result});

            }.bind(this))
    }


    render() {

        if(this.state.achievementData.flag==0){
            startIntro('achievement').start();
        }

        var img_src_paths = [
        "/img/badges/first_survey.png",
        "/img/badges/keeep_it_up.png",
        "/img/badges/regular.png",
        "/img/badges/survey_advanced.png",
        "/img/badges/survey_beginner.png",
        "/img/badges/survey_casual.png",
        "/img/badges/survey_intermediate.png",
        "/img/badges/welcome_aboard.png"];


        const collectedBadges = img_src_paths.map(
            (img_src_path) =>
                <CollectedBadges img_src = {img_src_path}/>
        )

        return (

            <div>


                <div className="card mb-4">
                    <div className="card-header Bg-color text-center Lato-font"><h4 id="step11"> You have collected this badges</h4></div>
                    <div className="card-block">
                        <div className="row  justify-content-around">
                            {collectedBadges}
                        </div>
                    </div>
                </div>


                <div className="card ">
                    <div className="card-header Bg-color text-center Lato-font"><h4 id="step12">In the future you can also collect this
                        badges</h4></div>
                    <div className="card-block">
                        <div className="list-group list-group-flush">

                            <AvailableBadges background_color = {"bg-faded"}/>

                            <AvailableBadges background_color = {"Background-color"}/>



                        </div>
                    </div>
                </div>

            </div>
        );
    }
}

export default AchievementPage;