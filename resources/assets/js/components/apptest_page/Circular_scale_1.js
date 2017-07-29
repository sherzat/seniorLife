import React, { Component } from 'react';

class Circular_scale_1 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            choice_index:null,
        };
        this.handleClick= this.handleClick.bind(this);
    }

    handleClick(event){
        const clicked_item= event.currentTarget.id;
        this.props.handleAnswer(clicked_item, this.props.question_id);
    }

    render() {
        const choices= this.props.choices.map(
            (each)=>
            each.choice
        );
        var rotate_degree= "-180 350,323.01281127929693";
        if(this.props.answered == 4)
        rotate_degree = "-18 350,323.01281127929693" ;
        if(this.props.answered == 3)
        rotate_degree = "-54 350,323.01281127929693" ;
        if(this.props.answered == 2)
        rotate_degree = "-90 350,323.01281127929693" ;
        if(this.props.answered == 1)
        rotate_degree = "-126 350,323.01281127929693" ;
        if(this.props.answered == 0)
        rotate_degree = "-162 350,323.01281127929693" ;
    return (
        <div className="svg-container">

            <svg viewBox="-50 0 800 380 " preserveAspectRatio="xMinYMin meet"
                className="svg-content" id="menu" xmlns="http://www.w3.org/2000/svg" version="1.1">
                <g>
                    <g id="itemsContainer">
                        <a  id="0" key={0} className="item" role="button" onClick={this.handleClick}>
                            <text id="svg_10" fontSize="30px" textAnchor="end" y="250" x="11%" fill="#222">{choices[0]}</text>
                            <g transform="matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552) ">
                                <path id="svg_19" className="sector" d="m231.392693,249.361427l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#ecbd8e" fill="#4dbf4d"/>
                            </g>
                        </a>
                        <a  id="1" key={1} className="item" role="button" onClick={this.handleClick}>
                            <text id="svg_8" fontSize="30px" textAnchor="end" y="115" x="22%" fill="#222">{choices[1]}</text>
                            <g transform="matrix(-0.30901,-0.95105,0.95105,-0.30901,89.49011951994842,565.0183776675252) ">
                                <path id="svg_17" className="sector" d="m254.624614,322.138391l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#ecbd8e" fill="#a6c34c"/>
                            </g>
                        </a>
                        <a  id="2" key={2} className="item" role="button" onClick={this.handleClick}>
                            <text id="svg_6" fontSize="30px" textAnchor="middle" y="50" x="44%" fill="#222">{choices[2]}</text>
                            <g transform="matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515) ">
                                <path id="svg_15" className="sector" d="m316.195403,367.359987l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#ecbd8e" fill="#ffc84a"/>
                            </g>
                        </a>
                        <a  id="3" key={3} className="item" role="button" onClick={this.handleClick}>
                            <text id="svg_4" fontSize="30px" textAnchor="start" y="115" x="65%" fill="#222">{choices[3]}</text>
                            <g transform="matrix(0.80901,-0.58778,0.58778,0.80901,-99.20056166685515,194.69206447938143) ">
                                <path id="svg_13" className="sector" d="m392.589471,367.75486l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#ecbd8e" fill="#f48847"/>
                            </g>
                        </a>

                        <a id="4" key={4} className="item" role="button" onClick={this.handleClick}>
                            <text id="svg_2" fontSize="30px" textAnchor="start" y="250" x="76%"  fill="#222">{choices[4]}</text>
                            <g>
                                <path id="svg_11" className="sector" d="m454.62421,323.170522l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#ecbd8e" fill="#eb4841"/>
                            </g>
                        </a>
                    </g>
                    <g transform={"rotate("+rotate_degree+")" } id="svg_27">
                        <path
                            stroke="#000" transform="rotate(1.1317607164382935 401.0000305175724,323.0167541503895) " d="m350.50002,322.744793c0.09386,-5.2407 -0.06006,-10.4884 0.77188,-15.71988c20.44239,1.72093 40.64368,4.53679 60.74161,7.06908c1.07894,-2.56973 0.57111,-4.70135 1.50855,-7.07724c12.91175,4.99953 25.70706,10.07025 37.97798,15.38244c-11.77275,6.02584 -25.27652,11.25888 -38.53361,16.61756c-0.42929,-2.49546 -0.85866,-4.9909 -1.28796,-7.48636c-19.539,2.41424 -40.20213,4.91033 -59.86745,7.11741c-1.33734,-5.09275 -1.29803,-10.63889 -1.311,-15.90301z"
                            strokeWidth="1.5" fill="#d50000"/>
                        <animateTransform attributeType="xml"
                            attributeName="transform"
                            type="rotate"
                            from="-180 350,323.01281127929693"
                            to={rotate_degree}
                            dur="1.5s"
                            repeatCount={1}/>
                    </g>
                </g>
            </svg>
        </div>
    );
  }
}

export default Circular_scale_1;
