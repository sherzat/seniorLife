import React, {Component} from 'react';
import CollectedBadges from './CollectedBadges';
import AvailableBadges from './AvailableBadges';

class AchievementPage extends Component {

    render() {
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
        );
        return (

            <div>


                <div className="card mb-4">
                    <div className=" card-title mx-auto mt-4 Lato-font"><h4> You have collected this badges</h4></div>
                    <div className="card-block">
                        <div className="row  justify-content-around">
                            {collectedBadges}

                        </div>
                    </div>
                </div>


                <div className="card ">
                    <div className=" card-title mx-auto mt-4 Lato-font"><h4>In the future you can also collect this
                        badges</h4></div>
                    <div className="card-block">
                        <div className="list-group list-group-flush">
                            <AvailableBadges/>
                            <AvailableBadges/>
                            <AvailableBadges/>
                        </div>
                    </div>
                </div>

            </div>
        );
    }
}

export default AchievementPage;