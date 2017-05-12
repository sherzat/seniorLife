
import React, { Component } from 'react';
import { RadioGroup, RadioButton } from 'react-radio-buttons';

class HomepageRadioButton extends Component {
   constructor(props) {
        super(props);
        this.state = {checked:false};
        this.onChange=this.onChange.bind(this);
    }
    onChange(props, e) {

        console.log(e.target);

        this.setState({checked:e.target.value});
    }

    render() {
        return (
            <div>
<div className="container SetWidthRadio">
                <RadioGroup value={this.state.value} onChange={ this.onChange }>

                    <RadioButton value="1" name = "2" checked={this.state.checked}  iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
                        Sometimes
                    </RadioButton>
                    <RadioButton value="2" name = "3"  checked={this.state.checked}  iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
                        not always
                    </RadioButton>
                    <RadioButton value="3" name = "4" checked={this.state.checked}   iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
                        often
                    </RadioButton>

                    <RadioButton value="4" name = "5" checked={this.state.checked}   iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
                        not always
                    </RadioButton>
                    <RadioButton value="5" name = "6" checked={this.state.checked}  iconSize={20} iconInnerSize={10} className="SetMarignandPadding">
                        often
                    </RadioButton>

                </RadioGroup>
</div>
            </div>
        );
    }
}

export default HomepageRadioButton;
