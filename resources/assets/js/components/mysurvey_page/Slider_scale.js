
import React, { Component } from 'react'
import Slider from 'react-rangeslider'

class Slider_scale extends Component {

  constructor (props, context) {
        super(props, context)
        this.state = {
            value: 10
        }
        this.handleChange=this.handleChange.bind(this);
        this.handleChangeComplete=this.handleChangeComplete.bind(this);

    }

    handleChange (value) {
      var choice_index =null;
      if(value == 0)
        choice_index = 0;
      if(value == 25)
        choice_index = 1;
      if(value == 50)
        choice_index = 2;
      if(value == 75)
        choice_index = 3;
      if(value == 100)
        choice_index = 4;

      this.props.handleAnswer(choice_index, this.props.question_id);
    }

    handleChangeComplete (e){
        console.log(e.target)
    }

    render () {

        const choices= this.props.choices.map(
          (each)=>
            each.choice
        );
        const horizontalLabels = {
            0: choices[0],
            25: choices[1],
            50: choices[2],
            75: choices[3],
            100: choices[4]
        }
        var value=10;
        if(this.props.answered == 0)
          value = 0;
        if(this.props.answered == 1)
          value = 25;
        if(this.props.answered == 2)
          value = 50;
        if(this.props.answered == 3)
          value = 75;
        if(this.props.answered == 4)
          value = 100;
        return (


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
        )
    }
}
export default Slider_scale;
