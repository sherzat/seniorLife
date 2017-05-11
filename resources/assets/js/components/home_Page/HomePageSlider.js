

import React, { Component } from 'react'
import Slider from 'react-rangeslider'

class HomePageSlider extends Component {

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
        const horizontalLabels = {
            0: 'Very unsatisfied',
            25: 'Unsatisfied',
            50: 'Neutral',
            75: 'Satisfied',
            100: 'Very satisfied'
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
export default HomePageSlider;