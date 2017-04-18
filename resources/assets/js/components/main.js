import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Clock from './Clock';
import Myform from './Myform';
import NavbarForm from './Navbar';
import Navbar from './Navbar';
import Survey from './Survey';

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

if (document.getElementById('myform')) {
    ReactDOM.render(
        <Myform />,
        document.getElementById('myform'));
}

if (document.getElementById('survey')) {
    ReactDOM.render(
        <Survey url="/survey/new" />,
        document.getElementById('survey'));
}

if (document.getElementById('survey')) {
    ReactDOM.render(
        <Survey url="/survey/new" />,
        document.getElementById('survey'));
}
