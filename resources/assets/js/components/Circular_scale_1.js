import React, { Component } from 'react';

class Circular_scale_1 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            rotate_degree: "rotate(0 350,332.91281127929693)" ,
        };
        this.handleClick= this.handleClick.bind(this);
    }
    handleClick(event){
        this.props.nextQuestion(event.target.id);
        console.log(event.target.id)
        if(event.target.id == "svg_11")
            this.setState({rotate_degree: "rotate(64 350,332.91281127929693)" });
        if(event.target.id == "svg_13")
            this.setState({rotate_degree: "rotate(32 350,332.91281127929693)" });
        if(event.target.id == "svg_15")
            this.setState({rotate_degree: "rotate(0 350,332.91281127929693)" });
        if(event.target.id == "svg_17")
            this.setState({rotate_degree: "rotate(-32 350,332.91281127929693)" });
        if(event.target.id == "svg_19")
            this.setState({rotate_degree: "rotate(-64 350,332.91281127929693)" });
    }
	render() {
        return (
            <div className="menu-wrapper">
                <svg width="700" height="361" xmlns="http://www.w3.org/2000/svg">


                    <g>
                        <title>background</title>
                        <rect fill="none" id="canvas_background" height="363" width="702" y="-1" x="-1"/>
                    </g>
                    <g>
                        <title>Layer 1</title>
                        <g id="symbolsContainer">
                            <symbol viewBox="0 0 69 69" id="icon-1" className="icon icon-">
                                <rect id="svg_1" height="100%" width="100%" stroke="#111" fill="#"/>
                                <text id="svg_2" fontSize="1.2em" textAnchor="middle" y="50%" x="50%" fill="#222">1</text>
                            </symbol>
                            <symbol viewBox="0 0 69 69" id="icon-2" className="icon icon-">
                                <rect id="svg_3" height="100%" width="100%" stroke="#111" fill="none"/>
                                <text id="svg_4" fontSize="1.2em" textAnchor="middle" y="50%" x="50%" fill="#222">2</text>
                            </symbol>
                            <symbol viewBox="0 0 69 69" id="icon-3" className="icon icon-">
                                <rect id="svg_5" height="100%" width="100%" stroke="#111" fill="none"/>
                                <text id="svg_6" fontSize="1.2em" textAnchor="middle" y="50%" x="50%" fill="#222">3</text>
                            </symbol>
                            <symbol viewBox="0 0 69 69" id="icon-4" className="icon icon-">
                                <rect id="svg_7" height="100%" width="100%" stroke="#111" fill="none"/>
                                <text id="svg_8" fontSize="1.2em" textAnchor="middle" y="50%" x="50%" fill="#222">4</text>
                            </symbol>
                            <symbol viewBox="0 0 69 69" id="icon-5" className="icon icon-">
                                <rect id="svg_9" height="100%" width="100%" stroke="#111" fill="#00bfa5"/>
                                <text id="svg_10" fontSize="1.2em" textAnchor="middle" y="50%" x="50%" fill="#222">5</text>
                            </symbol>
                        </g>
                        <g id="itemsContainer">
                            <a id="item-1" className="item" role="button" onClick={this.handleClick}>
                                <path id="svg_11" className="sector" d="m454.62421,323.170522l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#111" fill="#00bfa5"/>
                            </a>
                            <a transform="matrix(0.80901,-0.58778,0.58778,0.80901,-99.20056166685515,194.69206447938143) " id="item-2" className="item" role="button" onClick={this.handleClick}>
                                <path id="svg_13" className="sector" d="m392.589471,367.75486l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#111" fill="#00c853"/>
                            </a>
                            <a transform="matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515) " id="item-3" className="item" role="button" onClick={this.handleClick}>
                                <path id="svg_15" className="sector" d="m316.195403,367.359987l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#111" fill="#64dd17"/>
                            </a>
                            <a transform="matrix(-0.30901,-0.95105,0.95105,-0.30901,89.49011951994842,565.0183776675252) " id="item-4" className="item" role="button" onClick={this.handleClick}>
                                <path id="svg_17" className="sector" d="m254.624614,322.138391l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#111" fill="#aeea00"/>
                            </a>
                            <a transform="matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552) " id="item-5" className="item" role="button" onClick={this.handleClick}>
                                <path id="svg_19" className="sector" d="m231.392693,249.361427l145,0a250,250 0 0 0 -47.74575,-146.94631l-117.30747,85.22886a105,105 0 0 1 20.05322,61.71745" stroke="#111" fill="#ffd600"/>
                            </a>
                        </g>
                        <g transform={this.state.rotate_degree} id="svg_27">
                            <ellipse ry="23" rx="23" id="svg_24" cy="316.25" cx="350" strokeWidth="1.5" stroke="#000" fill="#7DD8B5"/>
                            <path stroke="#000" id="svg_26" d="m329.000007,306.325649l21,-65.000019l21,65.000019l-42,0z" strokeOpacity="null" strokeWidth="1.5" fill="#7DD8B5"/>
                        </g>
                        <text transform="rotate(-72 88.11718749999997,233.49999999999997) "  textAnchor="start" fontFamily="Helvetica, Arial, sans-serif" fontSize="26" id="svg_40" y="242.5" x="32" strokeWidth="0" fill="#000000">{this.props.choices[0]}</text>
                        <text transform="rotate(-36 185.83593750000003,97.00000000000003) "  textAnchor="start" fontFamily="Helvetica, Arial, sans-serif" fontSize="26" id="svg_41" y="105.5" x="134" strokeWidth="0" fill="#000000">{this.props.choices[1]}</text>
                        <text textAnchor="start" fontFamily="Helvetica, Arial, sans-serif" fontSize="26" id="svg_42" y="61.5" x="298.164063" strokeWidth="0" fill="#000000">{this.props.choices[2]}</text>
                        <text stroke="null" transform="rotate(36.15993881225586 511.8359375,101.99999999999997) " textAnchor="start" fontFamily="Helvetica, Arial, sans-serif" fontSize="26" id="svg_43" y="110.5" x="460" strokeWidth="0" fill="#000000">{this.props.choices[3]}</text>
                        <text stroke="null" transform="rotate(71.52508544921875 613.8359375,237.99999999999994) " textAnchor="start" fontFamily="Helvetica, Arial, sans-serif" fontSize="26" id="svg_44" y="246.5" x="562" strokeWidth="0" fill="#000000">{this.props.choices[4]}</text>
                    </g>
                </svg>
            </div>

		);
	}
}

export default Circular_scale_1;
