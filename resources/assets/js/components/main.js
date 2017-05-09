import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import RankPage from './rank_page/RankPage';
import Myform from './Myform';
import NavbarForm from './Navbar';
import Navbar from './Navbar';


import MySurvey  from './mysurvey_page/MySurvey';


import AchievementPage from './achievement_page/AchievementPage';
import HomePage from './home_Page/HomePage';
import ProfilePage from './profile_page/ProfilePage';
import ChallengesPage from './challenges_page/ChallengesPage';
import FooterComponent from './welcome_page/FooterComponent';
if (document.getElementById('mysurvey_page')) {
  ReactDOM.render(
    <MySurvey />,
      document.getElementById('mysurvey_page')
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

if (document.getElementById('rank_page')) {
    ReactDOM.render(
        <RankPage />,
        document.getElementById('rank_page'));
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


if (document.getElementById('profile_page')) {
    ReactDOM.render(
        <ProfilePage/>,
        document.getElementById('profile_page'));
}

if (document.getElementById('challenges_page')) {
    ReactDOM.render(
        <ChallengesPage/>,
        document.getElementById('challenges_page'));
}


if (document.getElementById('footer')) {
    ReactDOM.render(
        <FooterComponent/>,
        document.getElementById('footer'));
}