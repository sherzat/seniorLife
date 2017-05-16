import React, {Component} from 'react';

class RankElement extends Component {
    render() {
        return (
            <div>
                <div className="card">
                    <div className="row">
                        <div className="col-md-4 col-sm-3 col-lg-4">
                            <div className="card-block text-center">
                                <img className="card-img-top img-fluid img-responsive"
                                     src={this.props.user_avatar}
                                     alt={this.props.user_avatar}></img>
                            </div>
                        </div>
                        <div className="col-md-4 col-sm-6 col-lg-4 d-flex align-items-center">
                            <div className="card-block">
                                <h3 className="card-title Lato-font">{this.props.user_name}</h3>
                                <dl className="row Rail-way-font">
                                    <dt className="col-sm-5 col-lg-6">Total Points</dt>
                                    <dd className="col-sm-7 col-lg-6">{this.props.points}</dd>
                                </dl>
                            </div>
                        </div>

                        <div className="col-md-4 col-sm-3 col-lg-4 d-flex align-items-center">
                            <div className="card-block text-center">
                                <h4 className="my-auto">{this.props.levels}</h4>
                            </div>
                        </div>

                        <div className="col-md-4 col-sm-3 col-lg-4 d-flex align-items-center">
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
