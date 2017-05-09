// import React, { Component } from 'react';
// import {
//   BrowserRouter as Router,
//   Switch,
//   Route,
//   Link
// } from 'react-router-dom'
//
// import MySurvey from './MySurvey';
// import Survey from '../Survey';

class Route_mysurvey extends React.Component {
  constructor(props) {
    super(props);
    this.previousLocation = this.props.lacation;
  }

  componentWillUpdate(nextProps) {
    const { location } = this.props
    // set previousLocation if props.location is not modal
    if (
      nextProps.history.action !== 'POP' &&
      (!location.state || !location.state.modal)
    ) {
      this.previousLocation = this.props.location
    }
  }
  render() {
    const { location } = this.props

    const isModal = !!(
      location.state &&
      location.state.modal &&
      this.previousLocation !== location // not initial render
    )
    const survey = (props)=>{
      return (
        <Survey url="/survey/new" scale="Circular_scale"/>
      );
    }
    return (
      <div>
        <Switch location={isModal ? this.previousLocation : location}>
          <Route exact path='/mysurvey' component={MySurvey}/>
          <Route path='/mysurvey/new_survey' component={survey}/>
        </Switch>
        {isModal ? <Route path='/new_survey/' component={Modal} /> : null}
      </div>
    )
  }
}
const Router_mysurvey = () => (
  <Router>
    <Route component={Route_mysurvey} />
  </Router>
)

export default Router_mysurvey;
