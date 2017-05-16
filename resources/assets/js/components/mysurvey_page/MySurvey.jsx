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
            loaded: false,
        };
        this.handleOnclick = this.handleOnclick.bind(this);
        this.getData = this.getData.bind(this);
    }
    handleOnclick(target) {
        console.log('in mysyrvey')
        if (target == 'survey'){
          this.setState({renderSurveyPage: true})
        }else {

          this.setState( function () {
            return { renderSurveyPage: false, selectedCategory: target};
          });
        }
    }
    componentWillMount(){
        this.getData();
        console.log('in mysyrvey')


    }
    getData() {
        var url ="/survey/result";
        $.ajax({
            method: "GET",
            url: url,
            dataType: 'json',
        })
            .done(function( data ) {

                console.log(data)
                this.setState({mysurveyData:data}, function () {
                  this.setState({loaded: true}, function () {
                    if(this.state.mysurveyData.flag==0){
                      startIntro('mysurvey')
                    }
                  });
                });

            }.bind(this))
    }

    render() {



      const renderSurveyPage = this.state.renderSurveyPage;


      if(!this.state.loaded)
        return (<h>loading</h>);

      return (
        <div>

          {renderSurveyPage ? (
                    <div>

                        <NewSurvey handleOnclick={this.handleOnclick} categories={this.state.mysurveyData.categories}/>
                        <SurveyResult data={this.state.mysurveyData.SurveyResult}/>
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
