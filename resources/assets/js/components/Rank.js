import React, { Component } from 'react';


class Rank_element extends Component {
	render() {
        return (
            <button type="button" className="list-group-item">
                <span className="pull-left">{this.props.ranking}</span>
                <span className="center-block">Sherzat Ablimit</span>
                <span className="pull-right">4332pt</span>
            </button>
        );
	}
}

class Rank extends Component {
	render() {
        return (
            <div className="row">
                <div className="col-md-offset-1 col-md-10 ">
                    <div className="list-group">
                        <Rank_element ranking={1}/>
                    </div>
                </div>
            </div>
        );
	}
}

export default Rank;


/*
*
                    <div className="panel panel-default">
                        <div className="panel-body">
                            <a data-toggle="collapse" href="#collapse1">
                                    <p className="text-left">1</p>
                                    <p className="text-center">name</p>
                                    <p className="text-right">points</p>
                            </a>
                            <div id="collapse1" className="panel-collapse collapse">
                                <div className="panel-body">Panel Body</div>
                                <div className="panel-footer">Panel Footer</div>
                            </div>
                        </div>
                    </div>
    */
