
import React, { Component } from 'react';
import { RadioGroup, RadioButton } from 'react-radio-buttons';

class HomepageRadioButton extends Component {
   constructor(props) {
        super(props);
        this.state = {
          checked:false,
        };
        this.onChange=this.onChange.bind(this);
    }
    onChange(props) {


        this.setState({checked: true})
        this.props.handleAnswer(props, this.props.question_id);
    }

    render() {

      const choices= this.props.choices.map(
        (each,index)=>
        <RadioButton  value={""+index} key={each.id} name = {each.id} checked={this.props.answered === index}  iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
              {each.choice}
          </RadioButton>
      );

        return (
          <div>
            <div className="container SetWidthRadio">
              <RadioGroup   onChange={ this.onChange } >

                {choices}

              </RadioGroup>
            </div>
          </div>
        );
    }
}

export default HomepageRadioButton;
