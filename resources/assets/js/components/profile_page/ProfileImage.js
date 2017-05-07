
import React, {Component} from 'react';
import {ModalContainer, ModalDialog} from 'react-modal-dialog';

class ProfileImage extends Component {
    state = {
        isShowingModal: false,
    }

    handleClick = () => this.setState({isShowingModal: true})
    handleClose = () => this.setState({isShowingModal: false})
    render() {
        return (
            <div>
                <div className="col-md-3 col-sm-12 card-block">

                    <button className="card-block text-center" onClick={this.handleClick}>
                        <img className="card-img-top  img-responsive"
                             src={this.props.img_src}
                             alt="Card image cap" width={150} height={150}></img>
                    </button>

                    {
                        this.state.isShowingModal &&
                        <ModalContainer>
                            <ModalContainer onClose={this.handleClose}>
                                <ModalDialog onClose={this.handleClose}>
                                <div className="btn-group btn-group-vertical">
                                    <button className="btn-group-lg"><img className="card-img-top  img-responsive"
                                                                          width={250}
                                                                          height={250}
                                                                          src={this.props.img_src}
                                                                          alt="Card image cap"></img></button>
                                    <button className="btn btn-success" onClick={this.handleClose}>Save</button>
                                </div>
                                </ModalDialog>
                            </ModalContainer>
                        </ModalContainer>
                    }

                </div>
            </div>
        );
    }
}

export default ProfileImage;
