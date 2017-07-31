import React, {Component} from 'react';
import ProfileImage from './ProfileImage';

class ProfilePage extends Component {
    constructor(props) {
        super(props);

            this.state = {file: '',imagePreviewUrl: '',}

        // This binding is necessary to make `this` work in the callback
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleImageChange = this.handleImageChange.bind(this);
    }

    handleSubmit(e) {
        e.preventDefault();
        let data = new FormData();
        console.log(this.state.file);
        data.append('avatar', this.state.file);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/uploadFile",
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function (res) {
                location.reload()
            }.bind(this)
        });
    }
    handleImageChange(e) {
        e.preventDefault();

        let reader = new FileReader();
        let file = e.target.files[0];

        reader.onloadend = () => {
            this.setState({
                file: file,
                imagePreviewUrl: reader.result,
            });
        }
        reader.readAsDataURL(file)
    }
    render() {
        var img_src_paths = [
            "/img/avatars/adults/adult-man.png",
            "/img/avatars/adults/adult-women.png",
            "/img/avatars/animal/animal-duck.png",
            "/img/avatars/children/child-man-avatar.png",
            "/img/avatars/children/child-women-avatar.png",
            "/img/avatars/material/material-lump.png",
            "/img/avatars/older/old-man.png",
            "/img/avatars/older/old-women.png"];


        const profilePictures = img_src_paths.map(
            (img_src_path) =>
                <ProfileImage key={img_src_path} img_src={img_src_path}/>
        );
        return (
            <div>

                <div className="card mb-4">

                    <div className="card-header">
                        <h4 id="step1"className="card-title">Profile Picture</h4>
                        <h6 className="card-subtitle">Select or upload your profile picture</h6>
                    </div>

                    <div className="card-block">

                        <div className="row">

                            <div className="col-md-12">

                                <div className="card-block">
                                    <div className="my-4">
                                        <h6 >Upload new profile picture or take a photo.</h6>
                                    </div>
                                    <form onSubmit={this.handleSubmit}>

                                        <div className="input-group">

                                            <label className="custom-file-upload">
                                                <input type="file" onChange={this.handleImageChange}/>
                                                <i className="fa fa-cloud-upload"></i> Upload new picture
                                                </label>


                                        </div>
                                        {this.state.imagePreviewUrl=="" ? "":
                                            <div>
                                                <img className="rounded img-responsive"
                                                 src={this.state.imagePreviewUrl}
                                                 alt="Card image cap" width={100} height={100}></img>
                                             <button className="btn btn-success ml-4" type="submit" >Save</button>
                                             </div>
                                        }
                                    </form>

                                </div>
                                <div className="card-block">
                                    <div className="my-4">
                                        <h6 >Choose from default pictures.</h6>
                                    </div>
                                    <div className="row justify-content-wrap ">
                                        {profilePictures}
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>


            </div>
        );
    }
}

export default ProfilePage;
