import React, {Component} from 'react';
import {Radar, RadarChart, PolarGrid, Legend, PolarAngleAxis, PolarRadiusAxis, ResponsiveContainer} from 'recharts';

class HomePageRadarChart extends Component {

  constructor(props) {
    super(props);
    this.handleOnclick=this.handleOnclick.bind(this);
  }
  handleOnclick(event){
    console.log(event);
    this.props.showLineChart(event.value);
  }

  render() {
    const data = this.props.chartData.resultLatestAndOverall;
    return (
      <div>
        <ResponsiveContainer width="100%" height={300} innerRaduis={20}>
          <RadarChart   data={data} innerRaduis={20}  margin={{top: 0, right: 48, bottom: 0}}   >
            <Radar name="Latest survey result" dataKey="score_a" stroke="#FF9800" fill="#FF9800" fillOpacity={0.6}/>
            <Radar name="Average result" dataKey="score_b" stroke="#82ca9d" fill="#82ca9d" fillOpacity={0.3} />
            <PolarGrid />
            <Legend  />
            <PolarAngleAxis dataKey="name" onClick={this.handleOnclick} />
            <PolarRadiusAxis angle={54}  domain={[0, 5]} />
          </RadarChart>
        </ResponsiveContainer>
      </div>

    );
  }
}

export default HomePageRadarChart;
