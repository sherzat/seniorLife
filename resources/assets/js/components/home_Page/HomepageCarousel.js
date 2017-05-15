import React, {Component} from 'react';
import Coverflow from 'react-coverflow';
import StyleRoot from 'radium';

class HomepageCarousel extends Component {

    render() {
        console.log(this.props.badges);
        const collectedBadges = this.props.badges.map(
            (img_src_path) =>
                <img key={img_src_path.badge} src={img_src_path.badge}/>
        )

        return (
            <div>

                <Coverflow
                    displayQuantityOfSide={2}
                    navigation={false}
                    enableHeading={false}
                    className="w-100"
                    height={250}>

                    {collectedBadges}

                </Coverflow>

            </div>
        );
    }
}

export default HomepageCarousel;