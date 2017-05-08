
import React, {Component} from 'react';

class WelcomeLoginPage extends Component {
    render() {
        return (
            <div>
                <div className="form-group text-center">



                    <h4 className="lead title">Monitor Your Health For Better Quality of Life</h4>
                    <button type="button"
                            className="btn btn-success btn-lg vertical-align settins-for-paragraphs lead registor-button-settings"
                            data-toggle="modal" data-target="#myModal">
                        Sign Up Now
                    </button>
                </div>
            </div>
        );
    }
}

export default WelcomeLoginPage;