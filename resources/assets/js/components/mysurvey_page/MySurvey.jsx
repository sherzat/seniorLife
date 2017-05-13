import React, {Component} from 'react';
import SurveyResult from './SurveyResult';
import NewSurvey from './NewSurvey';
import Survey from './Survey';

class MySurvey extends Component {
    constructor(props) {
        super(props);

        this.state = {
            renderSurveyPage: true,
            selectedCategory:null,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
    }
    handleOnclick(target) {
        console.log('in mysyrvey')
        if (target == 'survey'){
          this.setState({renderSurveyPage: true})
        }else {

          this.setState({renderSurveyPage: false, selectedCategory: target})
        }
    }
    render() {
   const renderSurveyPage = this.state.renderSurveyPage;
        return (
            <div>
                {renderSurveyPage ? (
                    <div>

                        <NewSurvey handleOnclick={this.handleOnclick}/>
                        <SurveyResult />
                    </div>
                    ) : (
                        <div>
                            <Survey url="/survey/new"
                              scale="Circular_scale"
                              handleOnclick={this.handleOnclick}
                              selectedCategory={this.state.selectedCategory}
                            />
                        </div>
                    )}
            </div>
        );
    }


}

export default MySurvey;
