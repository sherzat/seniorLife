import React, { Component } from 'react'
// import Slider from 'react-rangeslider'
import Slider from 'rc-slider/lib/Slider'

// const style = { width: 60% };
class Slider_scale extends Component {

  constructor (props, context) {
        super(props, context)
        this.state = {
            value: 0,
            color: '#B2DFDB',
        }
        this.handleChange=this.handleChange.bind(this);
        // this.handleChangeComplete=this.handleChangeComplete.bind(this);

    }

    handleChange (value) {
      var choice_index =null;
      if(value == 0) {
        choice_index = 0;
        // this.setState({color:'#B2DFDB'});
      }
      if(value == 25) {
        choice_index = 1;
        // this.setState({color:'#a6c34c'});
      }

      if(value == 50){
        choice_index = 2;
        // this.setState({color:'#ffc84a'});
      }

      if(value == 75){
        choice_index = 3;
        // this.setState({color:'#f48847'});
      }

      if(value == 100){
        choice_index = 4;
        // this.setState({color:'#eb4841'});
      }


      this.props.handleAnswer(choice_index, this.props.question_id);
    }

    // handleChangeComplete (e){
    //     console.log(e.target)
    // }

    render () {

        const choices= this.props.choices.map(
          (each)=>
            each.choice
        );
        const horizontalLabels = {
          0: {
            style: {
              top:30,
              fontSize: 12,
            },
            label: choices[0],
          },
          25: {
            style: {
                top:30,
                fontSize: 12,
            },
            label: choices[1],
          },
          50: {
            style: {
                top:30,
                fontSize: 12,
            },
            label: choices[2],
          },
          75: {
            style: {
                top:30,
                fontSize: 12,
            },
            label: choices[3],
          },
          100: {
            style: {
                top:30,
                fontSize: 12,
            },
            label: choices[4],
          },
        }

        var value=0
        var color='#B2DFDB'
        if(this.props.answered == 0){
            value: 0
            color= '#B2DFDB'
        }
        if(this.props.answered == 1){
            value= 25
            color='#a6c34c'
        }
        if(this.props.answered == 2){
            value= 50
            color='#ffc84a'
        }
        if(this.props.answered == 3){
            value= 75
            color='#f48847'
        }
        if(this.props.answered == 4){
            value= 100
            color='#eb4841'
        }
        return (

          <div className="likert-scale">
            <Slider
              dots
              step={25}
              value={value}
              dotStyle={{
                width: 10,height: 10,
                bottom: -16,
                marginLeft:8,
              }}
              marks={horizontalLabels}
              handleStyle={{
                borderColor: '#2c3e50',
                height: 28,
                width: 28,
                marginLeft: 0,
                marginTop: 1,
                backgroundColor: color,
              }}
              railStyle={{
                backgroundColor: color,
                height: 30,
                width:"107%",
                borderRadius: 15,
               }}

              onChange={this.handleChange}
              onAfterChange={this.handleChange}
              included={false}
              />
          </div>

        )
    }
}
export default Slider_scale;
/*
<div className='slider ' >
    <Slider
        min={0}
        max={100}
        labels={horizontalLabels}
        value={value}
        step={25}
        tooltip={false}
        onChange={this.handleChange}
        onChangeComplete={this.handleChangeComplete}
    />
</div>
*/
