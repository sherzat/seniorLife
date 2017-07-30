import React, {Component} from 'react';
import {BarChart, Bar,Brush, ResponsiveContainer,LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend} from 'recharts';

class HomepageBarchart extends Component {
  constructor(props) {
    super(props);
    this.state = {showLineChart: false, category:"", data:[]};
  }

  componentDidMount(){
    this.setState({data: this.props.chartData.resultLatestAndOverall});
  }
    render() {
        // const data = this.props.chartData.resultLatestAndOverall;

        var category = this.props.category;

        var barChart_data = this.props.chartData.resultEachCategoryByHour.find(function (element, index){
          return element.name === category;
        },category);
        console.log(barChart_data.dataset.length);
        var chartContent
        if(barChart_data.dataset.length ==0){
          console.log('there is noo data');
            chartContent = <p>Fill out the survey for <b>{category}</b> to see your results or select another category” </p>
        } else{
            chartContent = <ResponsiveContainer width="100%" height={300}>
              <BarChart data={barChart_data.dataset} margin={{top:40, right: 48}}>
                <XAxis dataKey="hour" />
                <YAxis label="Score" type="number" domain={[0, 5]} ticks={[0,1,2,3,4,5]}  />
                <CartesianGrid strokeDasharray="5 5"/>
                <Tooltip/>
                <Legend />
                <Brush dataKey='hour' height={30} stroke="#8884d8"/>
                <Bar name={this.props.category}  dataKey="score" unit="" label fill="#FF9800"  maxBarSize={16}/>
              </BarChart>
            </ResponsiveContainer>
        }
        return (
          <div>

{chartContent}
            </div>

        );
    }
}

export default HomepageBarchart;
