/**
 * Created by Avatar on 5/6/2017.
 */
import React, {Component} from 'react';
import ProgressBar from '../mysurvey_page/ProgressBar';
class AvailableBadges extends Component {
    render() {
        return (
            <div>
<div className="card">
                <li className="list-group-item justify-content-between " >
                    <div className="col-md-2 col-sm-4">
                        <div className="card-block">
                            <img className="card-img-top img-fluid img-responsive"
                                 src="/img/badges/regular.png"
                                 alt="Card image cap" width={150} height={150}></img>
                        </div>
                    </div>
                    <div className="col-md-5 col-sm-4">
                        <h3 className="card-title">Regular</h3>
                        <dl className="row Rail-way-font">
                            <dt>This is description about the badge</dt>

                        </dl>
                    </div>
                    <div className="col-md-5 col-sm-4">

                        <small>3/10</small>
                        <ProgressBar percent={33} className={"progressbar"}/>

                    </div>
                </li>
</div>
            </div>
        );
    }
}

export default AvailableBadges;