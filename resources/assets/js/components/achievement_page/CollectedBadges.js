
import React, {Component} from 'react';

class CollectedBadges extends Component {
    render() {
        return (
            <div>

                <div className="card-block text-center">
                    <img className="card-img-top  img-responsive"
                         src={this.props.img_src}
                         alt="Card image cap" width={150} height={150}></img>
                    <p className="card-text Rail-way-font text-center">{this.props.description}</p>
                </div>

            </div>
        );
    }
}

export default CollectedBadges;

