import React, {Component} from 'react';
import SurveyResult from './SurveyResult';
import NewSurvey from './NewSurvey';
import Survey from './Survey';

class MySurvey extends Component {
    constructor(props) {
        super(props);

        this.state = {
            mysurveyData:[],
            renderSurveyPage: true,
            selectedCategory:null,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }
    handleOnclick(target) {
        console.log('in mysyrvey')
        if (target == 'survey'){
          this.setState({renderSurveyPage: true})
        }else {

          this.setState({renderSurveyPage: false, selectedCategory: target})
        }
    }
    componentWillMount(){
        this.getData();
        console.log('in mysyrvey')


    }
    getData() {
        var url ="/getMysurveyData";
        $.ajax({
            method: "GET",
            url: url,
        })
            .done(function( result ) {

                console.log(result)
                this.setState({mysurveyData:result});

            }.bind(this))
    }

    render() {


        if(this.state.mysurveyData.flag==0){
            startIntro('mysurvey').start();
        }

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
