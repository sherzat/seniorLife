import React, {Component} from 'react';
import Coverflow from 'react-coverflow';

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
                    style={{width: "100vw", height:"300px"}}
                    displayQuantityOfSide={2}
                    navigation={false}
                    enableHeading={false}
                    className="w-100"
                    height={200}>

                    {collectedBadges}

                </Coverflow>

            </div>
        );
    }
}

export default HomepageCarousel;
