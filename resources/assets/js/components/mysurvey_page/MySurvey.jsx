import React, {Component} from 'react';
import SurveyResult from './SurveyResult';
import NewSurvey from './NewSurvey';
import Survey from './Survey';

class MySurvey extends Component {
    constructor(props) {
        super(props);

        this.state = {
            renderSurveyPage: true,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
    }
    handleOnclick() {
        console.log('in mysyrvey')

        this.setState({renderSurveyPage: false})
    }
    render() {
   const renderSurveyPage = this.state.renderSurveyPage;
        return (
            <div>
                {renderSurveyPage ? (
                    <div>
                        <SurveyResult />
                        <NewSurvey handleOnclick={this.handleOnclick}/>
                    </div>
                    ) : (
                        <div>
                            <Survey url="/survey/new" scale="Circular_scale"/>
                        </div>
                    )}
            </div>
        );
    }


}

export default MySurvey;
