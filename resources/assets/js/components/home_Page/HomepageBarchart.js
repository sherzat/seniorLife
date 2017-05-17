import React, {Component} from 'react';
import {BarChart, Bar, ResponsiveContainer, XAxis, YAxis, CartesianGrid, Tooltip, Legend} from 'recharts';

class HomepageBarchart extends Component {
    constructor(props) {
        super(props);
        this.state={
            data:null,
            noData: true,
        };
    }
    componentWillMount(){
        $.ajax({
            method: "GET",
            url: "getResultByCatagory",
            dataType:"json",
        })
            .done(function( result ) {

                this.setState({data:result}, function(){
                    if(this.state.data.length != 0){
                        this.setState({noData:false})
                    }
                });
            }.bind(this))
    }

    render() {
        const data = this.state.data;
        return (
            <div>
                <ResponsiveContainer width="100%" height={300}>
                    <BarChart data={data} margin={{top: 50, right: 80, left: 0, bottom: 40}}>
                        <XAxis dataKey="name" unit="catagory"/>
                        <YAxis label="Average Score" type="number" domain={[0, 5]} ticks={[0,1,2,3,4,5]}  />
                        <CartesianGrid strokeDasharray="5 5"/>
                        <Tooltip/>
                        <Legend />
                        <Bar dataKey="score" unit="" stackId="a" fill="#2ecc71"/>
                    </BarChart>
                </ResponsiveContainer>
            </div>

        );
    }
}

export default HomepageBarchart;
