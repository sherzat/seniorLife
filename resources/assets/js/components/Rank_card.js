import React, { Component } from 'react';

class Rank_card extends Component {
	render() {
        return (
            <div className="row">
                <div className="col-md-offset-1 col-md-10 ">
                    <div className="panel panel-default">
                        <div className="panel-body">
                            <a data-toggle="collapse" href="#collapse1">
                                <div className="pull-left">Name</div>
                                <div className="pull-right">Score</div>
                            </a>
                            Basic panel example
                            <div id="collapse1" className="panel-collapse collapse">
                                <div className="panel-body">Panel Body</div>
                                <div className="panel-footer">Panel Footer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
	}
}

export default Rank_card;

