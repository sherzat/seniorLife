import React, {Component} from 'react';
import RankElement from './RankElement.js';

class RankPage extends Component {
    render() {
        return (
            <div>
                <div className="card">

                    <div className="card-header p-0">
                        <div className="row">
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4>Pictures</h4>
                                </div>
                            </div>
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4>Name</h4>
                                </div>
                            </div>
                            <div className="col-md-4 col-sm-12 col-lg-4">
                                <div className="card-block text-center">
                                    <h4>Rank</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <RankElement ranking={1}/>
                    <RankElement ranking={2}/>
                    <RankElement ranking={3}/>
                    <RankElement ranking={4}/>
                    <RankElement ranking={5}/>
                    <RankElement ranking={6}/>
                    <RankElement ranking={7}/>
                </div>
            </div>
        );
    }
}

export default RankPage;
