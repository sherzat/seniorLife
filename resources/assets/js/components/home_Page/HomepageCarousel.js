import React, {Component} from 'react';
import Coverflow from 'react-coverflow';
import StyleRoot from 'radium';

class HomepageCarousel extends Component {

    render() {
        return (
            <div>

                <Coverflow
                    displayQuantityOfSide={2}
                    navigation={false}
                    enableHeading={false}
                    width={360}
                    height={250}
                >
                    <img src='/img/badges/first_survey.png' alt='Album one' data-action="http://passer1.cc"/>
                    <img src='/img/badges/keeep_it_up.png' alt='Album two' data-action="http://passer.cc"/>
                    <img src='/img/badges/regular.png' alt='Album three' data-action="https://doce.cc/"/>
                    <img src='/img/badges/survey_advanced.png' alt='Album four' data-action="http://tw.yahoo.com"/>
                    <img src='/img/badges/survey_beginner.png' alt='Album five' data-action="http://www.bbc.co.uk"/>
                    <img src='/img/badges/survey_casual.png' alt='Album six' data-action="https://medium.com"/>
                    <img src='/img/badges/survey_intermediate.png' alt='Album seven'
                         data-action="http://www.google.com"/>
                    <img src='/img/badges/welcome_aboard.png' alt='Album one'
                         data-action="https://facebook.github.io/react/"/>

                </Coverflow>
            </div>

        );
    }
}

export default HomepageCarousel;