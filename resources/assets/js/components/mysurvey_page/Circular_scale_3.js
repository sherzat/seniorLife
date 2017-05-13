import React, { Component } from 'react';

class Circular_scale_3 extends Component {
  // constructor(props) {
  //   super(props);
  //   this.state = {
  //     rotate_degree: "rotate(-180 350,332.91281127929693)" ,
  //     choice_id:null,
  //   };
  //   this.handleClick= this.handleClick.bind(this);
  // }
  // handleClick(event){
  //   const choices= this.props.choices.map(
  //     (each)=>
  //       each.id
  //   );
  //   const clicked_item= event.target.parentElement.id;
  //   var choice_id="";
  //   if(clicked_item == "item-1"){
  //     choice_id = choices[0];
  //     this.setState({rotate_degree: "rotate(-18 350,323.01281127929693)" });
  //   }
  //   if(clicked_item == "item-2"){
  //     choice_id=choices[1];
  //     this.setState({rotate_degree: "rotate(-54 350,323.01281127929693)" });
  //   }
  //   if(clicked_item == "item-3"){
  //     choice_id=choices[2];
  //     this.setState({rotate_degree: "rotate(-90 350,323.01281127929693)" });
  //   }
  //   if(clicked_item == "item-4"){
  //     choice_id=choices[3];
  //     this.setState({rotate_degree: "rotate(-126 350,323.01281127929693)" });
  //   }
  //   if(clicked_item == "item-5"){
  //     choice_id=choices[4];
  //     this.setState({rotate_degree: "rotate(-162 350,323.01281127929693)" });
  //   }
  //   this.props.handleAnswer(choice_id, this.props.question_id);
  // }
  render() {
    // const choices= this.props.choices.map(
    //   (each)=>
    //     each.choice
    // );
    return (
      <div className="svg-container">

        <svg viewBox="-75 -50 650 380 " preserveAspectRatio="xMinYMin meet"
          className="svg-content" id="menu" xmlns="http://www.w3.org/2000/svg">
          <g>

            <g id="symbolsContainer">
                  <symbol className="icon icon-" id="icon-1" viewBox="0 0 40 40">

                    <text id="svg_2" fontSize="30px" textAnchor="middle" y="-80%" x="50%" fill="#222">1</text>
                    <g>
                      <path
                        d="M 32,0 C 14.355,0 0,14.355 0,32 0,49.645 14.355,64 32,64 49.645,64 64,49.645 64,32 64,14.355 49.645,0 32,0 Z m 0,60 C 16.561,60 4,47.439 4,32 4,16.561 16.561,4 32,4 47.439,4 60,16.561 60,32 60,47.439 47.439,60 32,60 Z"
                        fill="#FFFFFF"
                        />
                      <circle
                        cx="20.518"
                        cy="21.361"
                        r="4.3379998"
                        fill="#FFFFFF"
                        />
                      <circle
                        cx="43.48"
                        cy="21.361"
                        r="4.3379998"
                        fill="#FFFFFF"
                        />
                      <path
                        d="m 11.322196,46.713718 c 1.0472,0.334728 2.176785,-0.248221 2.511585,-1.299418 0.0371,-0.118357 4.06124,-10.373558 18.37296,-10.118299 14.21674,0.253565 17.58688,10.27959 17.72915,10.770205 0.30114,1.060539 1.41135,1.675435 2.46178,1.38012 1.06449,-0.298064 1.68528,-1.40217 1.38818,-2.464637 -0.0423,-0.148779 -4.25252,-13.377293 -21.50778,-13.685052 -17.25525,-0.307759 -22.207645,12.757336 -22.255295,12.90551 -0.3347796,1.050197 0.24624,2.175737 1.29942,2.511571 z"
                        fill="#FFFFFF"
                        />
                    </g>
                  </symbol>

            <symbol className="icon icon-" id="icon-2" viewBox="0 0 40 40">
              <text id="svg_4" fontSize="30px" textAnchor="middle" y="-80%" x="50%" fill="#222">2</text>
              <g>
                <path
                  fill="#FFFFFF"
                  d="M32,0C14.355,0,0,14.355,0,32s14.355,32,32,32s32-14.355,32-32S49.645,0,32,0z M32,60    C16.561,60,4,47.439,4,32S16.561,4,32,4s28,12.561,28,28S47.439,60,32,60z"
                  />
                <circle
                  fill="#FFFFFF"
                  r="4.338"
                  cy="21.361"
                  cx="20.518" />
                <circle
                  fill="#FFFFFF"
                  r="4.338"
                  cy="21.361"
                  cx="43.48" />
                <path
                  fill="#FFFFFF"
                  d="m 16.392743,38.181431 c 14.176532,-7.337793 24.456808,-4.167616 33.195305,0 0.888015,0.423517 1.775881,0.792043 1.775881,1.77588 0,0.983838 -0.916659,2.255124 -1.775881,1.775881 -11.98294,-6.683645 -24.281901,-5.356569 -33.195305,0 -0.843278,0.506774 -1.775881,-0.792043 -1.775881,-1.775881 0,-0.983837 0.902147,-1.323634 1.775881,-1.77588 z"
                  />
              </g>
            </symbol>

            <symbol className="icon icon-" id="icon-3" viewBox="0 0 40 40">
              <text id="svg_6" fontSize="30px" textAnchor="middle" y="-80%" x="50%" fill="#222">3</text>
              <g fill="#1D1D1B">
                <path
                  fill="#FFFFFF"
                  d="M32,0C14.355,0,0,14.355,0,32s14.355,32,32,32s32-14.355,32-32S49.645,0,32,0z M32,60    C16.561,60,4,47.439,4,32S16.561,4,32,4s28,12.561,28,28S47.439,60,32,60z"
                  />
                <circle
                  fill="#FFFFFF"
                  r="4.338"
                  cy="21.361"
                  cx="20.518" />
                <circle
                  fill="#FFFFFF"
                  r="4.338"
                  cy="21.361"
                  cx="43.48" />
                <path
                  d="m 16.392743,38.181431 33.195305,0 c 0.983838,0 1.775881,0.792043 1.775881,1.77588 0,0.983838 -0.792043,1.775881 -1.775881,1.775881 l -33.195305,0 c -0.983838,0 -1.775881,-0.792043 -1.775881,-1.775881 0,-0.983837 0.792043,-1.77588 1.775881,-1.77588 z"
                  fill="#ffffff" />
              </g>
            </symbol>

          </g>
          <g id="itemsContainer">
            <a className="item" id="item-1" role="link" tabindex="0" href=" " title=" " transform="matrix(1,0,0,1,0,0)" data-svg-origin="250 250" >
              <path fill="#eb4841" stroke="#111" d="M350,250 l150,0 A250,250 0 0,0 375,33.49364905389035 l-75,129.9038105676658 A100,100 0 0,1 350,250" className="sector"></path>
              <use href="#icon-1" width="40" height="40" x="377.2243347167969" y="145" transform="rotate(60 397.2243347167969 165)"></use>
            </a>
            <a className="item" id="item-2" role="link" tabindex="0" href=" " title=" " transform="matrix(0.5,-0.86602,0.86602,0.5,-91.5063509461097,341.5063509461096)" data-svg-origin="250 250" >
              <path fill="#f48847" stroke="#111" d="M350,250 l150,0 A250,250 0 0,0 375,33.49364905389035 l-75,129.9038105676658 A100,100 0 0,1 350,250" className="sector"></path>
              <use href="#icon-2" width="40" height="40" x="377.2243347167969" y="145" transform="rotate(60 397.2243347167969 165)"></use>
            </a>
            <a className="item" id="item-3" role="link" tabindex="0" href=" " title=" " transform="matrix(-0.49999,-0.86602,0.86602,-0.49999,158.49364905389027,591.5063509461096)" data-svg-origin="250 250" >
              <path fill="#ffc84a" stroke="#111" d="M350,250 l150,0 A250,250 0 0,0 375,33.49364905389035 l-75,129.9038105676658 A100,100 0 0,1 350,250" className="sector"></path>
              <use href="#icon-3" width="40" height="40" x="377.2243347167969" y="145" transform="rotate(60 397.2243347167969 165)"></use>
            </a>
          </g>
          <g id="trigger" className="trigger menu-trigger" role="button">
            <path
              stroke="#000" transform="rotate(22.1317607164382935 502.000031,45.016754)" d="m350.50002,322.744793c0.09386,-5.2407 -0.06006,-10.4884 0.77188,-15.71988c20.44239,1.72093 40.64368,4.53679 60.74161,7.06908c1.07894,-2.56973 0.57111,-4.70135 1.50855,-7.07724c12.91175,4.99953 25.70706,10.07025 37.97798,15.38244c-11.77275,6.02584 -25.27652,11.25888 -38.53361,16.61756c-0.42929,-2.49546 -0.85866,-4.9909 -1.28796,-7.48636c-19.539,2.41424 -40.20213,4.91033 -59.86745,7.11741c-1.33734,-5.09275 -1.29803,-10.63889 -1.311,-15.90301z"
              strokeWidth="1.5" fill="#d50000"/>
          </g>
          </g>
        </svg>
      </div>

    );
  }
}

export default Circular_scale_3;
