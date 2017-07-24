import React, {Component} from 'react';
import {BarChart, Bar, ResponsiveContainer, XAxis, YAxis, CartesianGrid, Tooltip, Legend} from 'recharts';

class HomepageBarchart extends Component {
  constructor(props) {
    super(props);
    this.handleOnclick=this.handleOnclick.bind(this);
  }
  handleOnclick(event){
    console.log(event);
  }
    render() {
        const data = this.props.chartData;
        return (
            <div>
                <ResponsiveContainer width="100%" height={300}>
                    <BarChart data={data} margin={{top:40, right: 48}}>
                        <XAxis dataKey="name" unit="catagory"/>
                        <YAxis label="Score" type="number" domain={[0, 5]} ticks={[0,1,2,3,4,5]}  />
                        <CartesianGrid strokeDasharray="5 5"/>
                        <Tooltip/>
                        <Legend />
                        <Bar name="Latest survey result" dataKey="score_b" unit="" label fill="#2ecc71" onClick={this.handleOnclick}/>
                    </BarChart>
                </ResponsiveContainer>
            </div>

        );
    }
}

export default HomepageBarchart;
