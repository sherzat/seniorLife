import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Rank from './Rank';
import Myform from './Myform';
import NavbarForm from './Navbar';
import Navbar from './Navbar';
import Survey from './Survey';
import Route_mysurvey from './my_survey/Route_mysurvey';
import AchievementPage from './achievement_page/AchievementPage';
import HomePage from './home_Page/HomePage';




if (document.getElementById('mysurvey')) {
  ReactDOM.render(
    <Route_mysurvey />,
      document.getElementById('mysurvey')
  );
}

setInterval(tick, 1000);
function tick() {
// We only want to try to render our component on pages that have a div with an ID
// of "example"; otherwise, we will see an error in our console
if (document.getElementById('clock')) {
    ReactDOM.render(
        <Clock date = {new Date()} />,
        document.getElementById('clock'));
     }
}

if (document.getElementById('rank')) {
    ReactDOM.render(
        <Rank />,
        document.getElementById('rank'));
}

if (document.getElementById('survey')) {
    ReactDOM.render(
        <Survey url="/survey/new" scale="Circular_scale"/>,
        document.getElementById('survey'));
}


if (document.getElementById('achievement_page')) {
    ReactDOM.render(
        <AchievementPage/>,
        document.getElementById('achievement_page'));
}

if (document.getElementById('home_page')) {
    ReactDOM.render(
        <HomePage/>,
        document.getElementById('home_page'));
}
