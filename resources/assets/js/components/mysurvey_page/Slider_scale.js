
import React, { Component } from 'react'
import Slider from 'react-rangeslider'

class Slider_scale extends Component {

  constructor (props, context) {
        super(props, context)
        this.state = {
            value: 10
        }
    }

    handleChange = (value) => {
        this.setState({
            value: value
        })
    }

    handleChangeComplete = (e) => {
        console.log('Change event completed')
    }

    render () {
        const { value } = this.state
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
        return (

            <div className='slider'>
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
