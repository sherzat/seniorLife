import React, { Component } from 'react';
import { BrowserRouter as Router, Route, hashHistory,IndexRoute } from 'react-router-dom'
import MySurvey from './MySurvey';
import NewSurvey from './NewSurvey';
import Survey from '../Survey';

class Route_mysurvey extends React.Component {
  render () {
    return (
      <Router history={hashHistory}>
        <Route path="/" component={MySurvey}>

          <Route path="/new_survey" component={Survey} />

        </Route>
      </Router>
    );
  }
}

export default Route_mysurvey;
