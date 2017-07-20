import React, {Component} from 'react';
import ProgressBar from '../mysurvey_page/ProgressBar';
class AvailableBadges extends Component {
    render() {
        return (
            <div>
                <div className="card">
                    <li className="list-group-item justify-content-between ">
                        <div className="col-md-4 col-sm-4">
                            <div className="card-block">
                                <img className="card-img-top  img-responsive grayscale"
                                     src={this.props.img_src}
                                     alt="Card image cap" width={150} height={150}></img>
                            </div>
                        </div>
                        <div className="col-md-4 col-sm-4">
                            <div className="card-block">

                                <h3><b>{this.props.title}</b></h3>
                                <h6>{this.props.description}</h6>

                            </div>
                        </div>
                        <div className="col-md-4 col-sm-4">


                            <small>1/{this.props.steps}</small>

                            <ProgressBar percent={33} className={"progressbar"}/>

                        </div>
                    </li>
                </div>
            </div>
        );
    }
}

export default AvailableBadges;
