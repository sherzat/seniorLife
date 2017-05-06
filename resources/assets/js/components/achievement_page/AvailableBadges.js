/**
 * Created by Avatar on 5/6/2017.
 */
import React, { Component } from 'react';

class AvailableBadges extends Component {
    render() {
        return (
            <div>
                <div className="card">
                    <div className="mx-auto"> In the future you can also collect this badges</div>
                    <div className="card-block">

                        <div className="list-group list-group-flush">
                            <li className="list-group-item justify-content-between">
                                <div className="col-md-2 col-sm-4">
                                    <div className="card-block">
                                        <img className="card-img-top img-fluid img-responsive"
                                             src="/img/avatars/children/child-women-avatar.png"
                                             alt="Card image cap"></img>
                                    </div>
                                </div>
                                <div className="col-md-5 col-sm-4">
                                    <h3 className="card-title Lato-font">Badge title</h3>
                                    <dl className="row Rail-way-font">
                                        <dt>This is description about the badge</dt>

                                    </dl>
                                </div>
                                <div className="col-md-5 col-sm-4" id="home_progress_bar">
                                    <div className="card-block p-1 pb-3 mx-auto">
                                        Get 70 more points to level up
                                    </div>
                                </div>
                            </li>
                        </div>

                    </div>
                </div>
            </div>
        );
    }
}

export default AvailableBadges;