import React, {Component} from 'react';
import {Radar, RadarChart, PolarGrid, Legend, PolarAngleAxis, PolarRadiusAxis, ResponsiveContainer} from 'recharts';

class HomePageRadarChart extends Component {
  render() {
    const data = this.props.chartData;
    // const data = [
    //   { subject: 'Math', A: 120, B: 110, fullMark: 150 },
    //   { subject: 'Chinese', A: 98, B: 130, fullMark: 150 },
    //   { subject: 'English', A: 86, B: 130, fullMark: 150 },
    //   { subject: 'Geography', A: 99, B: 100, fullMark: 150 },
    //       { subject: 'Physics', A: 85, B: 90, fullMark: 150 },
    //       { subject: 'History', A: 65, B: 85, fullMark: 150 },
    // ];
    return (
      <div>
        <ResponsiveContainer width="100%" height={300}>
          <RadarChart   data={data} innerRaduis={20}  margin={{top: 0, right: 48, bottom: 0}}>
            <Radar name="Latest survey result" dataKey="score_a" stroke="#FF9800" fill="#FF9800" fillOpacity={0.3}/>
            <Radar name="Average result" dataKey="score_b" stroke="#82ca9d" fill="#82ca9d" fillOpacity={0.3} />
            <PolarGrid />
            <Legend  />
            <PolarAngleAxis dataKey="name" />
            <PolarRadiusAxis angle={1} text={0} domain={[0, 5]}/>
          </RadarChart>
        </ResponsiveContainer>
      </div>

    );
  }
}

export default HomePageRadarChart;
