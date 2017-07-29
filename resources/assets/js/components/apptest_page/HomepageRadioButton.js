import React, { Component } from 'react';

class HomepageRadioButton extends Component {

  constructor(props) {
       super(props);
       this.state = {
        yourPick:''
       };
   }
  handleRadio(e) {
    this.props.handleAnswer(e.target.value, this.props.question_id);
  }

  render() {
      var stylelist = {
            width:169,
      }
    const choices= this.props.choices.map(
      (each,index)=>
        <label
           key={index}
            className={
              this.props.answered == index ?
                'radioPad-wrapper radioPad-wrapper-'+index :
                'radioPad-wrapper'
              }
            >
        <input

          type='radio'
          value={index}
          className='radioPad-radio card-block'
          name = 'choices'
          onChange={this.handleRadio.bind(this)}
          />
        {each.choice}
        </label>
    );

    return (
      <div className="likert-scale" style={stylelist}>
        {choices}
      </div>
    )
  }
}

export default HomepageRadioButton;
