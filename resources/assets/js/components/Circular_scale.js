import React, { Component } from 'react';

class Circular_scale extends Component {
    constructor(props) {
        super(props);
        this.handleClick= this.handleClick.bind(this);
    }
    handleClick(){
        this.props.nextQuestion();
    }
	render() {
            const style_svg={
                transformOrigin: '50% 50% 0px',
                transform: 'translate3d(0px, 0px, 0px)',
                touchAction: 'none',
                userSelect: 'none',
            };
		return (
                <div className="menu-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="-2 -2 504 290" id="menu"
                        style={style_svg}>
                        <g id="symbolsContainer">
                            <symbol className="icon icon-" id="icon-1" viewBox="0 0 69 69">
                                <rect fill="none" stroke="#111" strokeWidth="1" width="100%" height="100%"></rect>
                                <text fill="#222" x="50%" y="50%" dy=".3em" textAnchor="middle" fontSize="1.2em">1</text>
                            </symbol>

                            <symbol className="icon icon-" id="icon-2" viewBox="0 0 69 69">
                                <rect fill="none" stroke="#111" strokeWidth="1" width="100%" height="100%"></rect>
                                <text fill="#222" x="50%" y="50%" dy=".3em" textAnchor="middle" fontSize="1.2em">2</text>
                            </symbol>

                            <symbol className="icon icon-" id="icon-3" viewBox="0 0 69 69">
                                <rect fill="none" stroke="#111" strokeWidth="1" width="100%" height="100%"></rect>
                                <text fill="#222" x="50%" y="50%" dy=".3em" textAnchor="middle" fontSize="1.2em">3</text>
                            </symbol>

                            <symbol className="icon icon-" id="icon-4" viewBox="0 0 69 69">
                                <rect fill="none" stroke="#111" strokeWidth="1" width="100%" height="100%"></rect>
                                <text fill="#222" x="50%" y="50%" dy=".3em" textAnchor="middle" fontSize="1.2em">4</text>
                            </symbol>

                            <symbol className="icon icon-" id="icon-5" viewBox="0 0 69 69">
                                <rect fill="none" stroke="#111" strokeWidth="1" width="100%" height="100%"></rect>
                                <text fill="#222" x="50%" y="50%" dy=".3em" textAnchor="middle" fontSize="1.2em">5</text>
                            </symbol>
                        </g>
                        <g id="itemsContainer">
                            <a className="item" id="item-1" role="button" tabIndex="0" onClick={this.handleClick} title=" " transform="matrix(1,0,0,1,0,0)" data-svg-origin="250 250" >
                                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" className="sector"></path>
                                <use href="#icon-1" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
                                {this.props.choices}
                            </a>
                            <a className="item" id="item-2" role="link" tabIndex="0" href=" " title=" " transform="matrix(0.80901,-0.58778,0.58778,0.80901,-99.20056166685515,194.69206447938143)" data-svg-origin="250 250" >
                                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" className="sector"></path>
                                <use href="#icon-2" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
                            </a>
                            <a className="item" id="item-3" role="link" tabIndex="0" href=" " title=" " transform="matrix(0.30901,-0.95105,0.95105,0.30901,-65.01837766752521,410.5098804800515)" data-svg-origin="250 250" >
                                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" className="sector"></path>
                                <use href="#icon-3" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
                            </a>
                            <a className="item" id="item-4" role="link" tabIndex="0" href=" " title=" " transform="matrix(-0.30901,-0.95105,0.95105,-0.30901,89.49011951994842,565.0183776675252)" data-svg-origin="250 250" >
                                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" className="sector"></path>
                                <use href="#icon-4" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
                            </a>
                            <a className="item" id="item-5" role="link" tabIndex="0" href=" " title=" " transform="matrix(-0.80901,-0.58778,0.58778,-0.80901,305.3079355206185,599.2005616668552)" data-svg-origin="250 250" >
                                <path fill="none" stroke="#111" d="M355,250 l145,0 A250,250 0 0,0 452.25424859373686,103.05368692688171 l-117.3074641843674,85.22886158240863 A105,105 0 0,1 355,250" className="sector"></path>
                                <use href="#icon-5" width="69" height="69" x="405.7113037109375" y="153.6966094970703" transform="rotate(72 440.2113037109375 188.1966094970703)"></use>
                            </a>
                        </g>
                        <g id="trigger" className="trigger menu-trigger" role="button">
                            <circle cx="250" cy="250" r="30"></circle>
                        </g>
                    </svg>
                </div>

		);
	}
}

export default Circular_scale;
