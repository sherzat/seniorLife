import React, {Component} from 'react';
import {BarChart, Bar,Brush, ResponsiveContainer,LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend} from 'recharts';

class HomepageBarchart extends Component {
  constructor(props) {
    super(props);
    this.state = {showLineChart: false, category:"", data:[]};
    this.handleOnclick=this.handleOnclick.bind(this);
  }
  handleOnclick(event){
    console.log(event);

    this.setState({

      category:event.name,

    }, function(){
      if(this.state.category != "") {
        var category = this.state.category;
        var lineChart_data = this.props.chartData.resultEachCategoryByHour.find(function (element, index){
          return element.name === category;
        },category);
        this.setState({showLineChart: true,data:lineChart_data.dataset});
      }
    });

  }
  componentDidMount(){
    this.setState({data: this.props.chartData.resultLatestAndOverall});
  }
    render() {
        // const data = this.props.chartData.resultLatestAndOverall;


        return (
          <div>
            {this.state.showLineChart ?
              <ResponsiveContainer width="100%" height={300}>

                <LineChart data={this.state.data} margin={{top:40, right: 48}} onClick={this.handleOnclick}>
                  <XAxis dataKey="hour"/>
                  <YAxis type="number" domain={[0, 5]} ticks={[0,1,2,3,4,5]}/>
                  <CartesianGrid strokeDasharray="3 3"/>
                  <Tooltip/>
                  <Legend />
                  <Brush dataKey='hour' height={30} stroke="#8884d8"/>
                  <Line name={this.state.category} type="monotone" dataKey="score" stroke="#82ca9d" />
                </LineChart>
              </ResponsiveContainer>
              :
              <ResponsiveContainer width="100%" height={300}>
                <BarChart data={this.state.data} margin={{top:40, right: 48}}>
                  <XAxis dataKey="name" unit="catagory"/>
                  <YAxis label="Score" type="number" domain={[0, 5]} ticks={[0,1,2,3,4,5]}  />
                  <CartesianGrid strokeDasharray="5 5"/>
                  <Tooltip/>
                  <Legend />
                  <Bar name="Latest survey result" dataKey="score_b" unit="" label fill="#FF9800" onClick={this.handleOnclick}/>
                </BarChart>
              </ResponsiveContainer>
            }
            </div>

        );
    }
}

export default HomepageBarchart;
