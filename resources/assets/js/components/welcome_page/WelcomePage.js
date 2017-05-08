import React, {Component} from 'react';

import WelcomeLoginPage from './WelcomeLoginPage';

class WelcomePage extends Component {
    render() {
        return (
            <div>

                {/* Main jumbotron for a primary marketing message or call to action*/}

                <div className="m-auto">
                        <WelcomeLoginPage/>
                </div>

            </div>
        );
    }
}
export default WelcomePage;

