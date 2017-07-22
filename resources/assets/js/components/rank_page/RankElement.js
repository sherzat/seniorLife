import React, {Component} from 'react';

class RankElement extends Component {

    render() {
        var rank_class= '';
        rank_class= "card rounded-0 border-top-0  border-right-0 border-left-0"
        var ranking;
        if(this.props.ranking == 1) {

            ranking = <img className=""
                 src="/img/first_place.png"
                 alt={'first_place'}
                 />
        } else if (this.props.ranking == 2){

            ranking = <img className=""
                 src="/img/second_place.png"
                 alt={'second_place'}
                 />
        } else if (this.props.ranking == 3){

            ranking = <img className=""
                 src="/img/third_place.png"
                 alt={'third_place'}
                 />
        } else {

            ranking=<p className="my-auto">{this.props.ranking}</p>
        }
        return (

            <div>


                <div className={rank_class} >
                    <div className="row">

                        <div className=" w-25  d-flex align-items-center">
                            <div className="card-block pt-3 resize-card d-flex align-items-center justify-content-center">
                                {ranking}
                            </div>
                        </div>


                        <div className=" w-25 ">
                            <div
                                className="card-block pt-3 resize-card d-flex align-items-center">

                                <img className="card-img-top rounded img-fluid img-responsive mr-3"
                                     src={this.props.user_avatar}
                                     alt={this.props.user_avatar}
                                     width={48} height={48}/>{this.props.user_name}

                            </div>

                        </div>

                        <div className=" w-50  d-flex align-items-center">

                            <div className="card-block pt-3 resize-card d-flex align-items-center justify-content-center">
                                <div className="mb-0 row Rail-way-font">
                                    <p className="mb-0">Total Points:</p>
                                    <p className=" ml-2 mb-0">{this.props.points}</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        );
    }
}

export default RankElement;


{/* <div className="list">
 <div className="row">
 <div className="col-sm-2 col-md-2"><p>{this.props.ranking}</p></div>
 <div className="col-sm-6 col-md-6"><img className="image" src={this.props.user_avatar}/>{this.props.user_name}
 </div>
 <div className="col-sm-2 col-md-2">
 <dl className="mb-0 row Rail-way-font">
 <dt className=" ">Total Points: </dt>
 <dd className="">{this.props.points}</dd>
 </dl>
 </div>
 <div className="col-sm-2 col-md-2"><p>{this.props.level}</p></div>

 </div>
 </div>*/
}
