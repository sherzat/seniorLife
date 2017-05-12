import React, {Component} from 'react';
import ProfileImage from './ProfileImage';

class ProfilePage extends Component {
    render() {
        var img_src_paths = [
            "/img/avatars/adults/adult-man.PNG",
            "/img/avatars/adults/adult-women.PNG",
            "/img/avatars/animal/animal-duck.PNG",
            "/img/avatars/children/child-man-avatar.PNG",
            "/img/avatars/children/Child-women-avatar.PNG",
            "/img/avatars/material/material-lump.PNG",
            "/img/avatars/older/old-man.PNG",
            "/img/avatars/older/old-women.PNG"];


        const profilePictures = img_src_paths.map(
            (img_src_path) =>
                <ProfileImage key={img_src_path} img_src={img_src_path}/>
        );
        return (
            <div>

                <div className="card mb-4">
                    <div className="card-header text-center bg-faded Bg-color">Select Your Profile Picture</div>
                    <div className="card-block">
                        <div className="row  justify-content-around">
                            {profilePictures}
                        </div>
                    </div>
                    
                </div>


            </div>
        );
    }
}

export default ProfilePage;
