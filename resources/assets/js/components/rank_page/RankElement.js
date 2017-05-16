import React, {Component} from 'react';

class RankElement extends Component {
    render() {
        return (
            <div>
                <div className="card">
                    <div className="row">
                        <div className="col-md-3 col-sm-3 col-lg-3">
                            <div className="card-block text-center">
                                <img className="card-img-top img-fluid img-responsive"
                                     src={this.props.user_avatar}
                                     alt={this.props.user_avatar}></img>
                            </div>
                        </div>
                        <div className="col-md-3 col-sm-6 col-lg-3 d-flex align-items-center">
                            <div className="card-block">
                                <h3 className="card-title Lato-font">{this.props.user_name}</h3>
                                <dl className="row Rail-way-font">
                                    <dt className=" ">Total Points: </dt>
                                    <dd className="ml-2">{this.props.points}</dd>
                                </dl>
                            </div>
                        </div>

                        <div className="col-md-3 col-sm-3 col-lg-3 d-flex align-items-center">
                            <div className="card-block text-center">
                                <h4 className="my-auto">Level <span style={{color: "#f39c12"}}>{this.props.level}</span></h4>
                            </div>
                        </div>

                        <div className="col-md-3 col-sm-3 col-lg-3 d-flex align-items-center">
                            <div className="card-block text-center">
                                <h4 className="my-auto">{this.props.ranking}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default RankElement;
