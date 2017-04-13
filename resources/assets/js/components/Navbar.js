import React, { Component } from 'react';

class NavbarForm extends Component{
    constructor(props) {
        super(props);
        this.state = {
            email: '',
            password: '',
        };
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    handleChange(event) {
        const target = event.target;
        const value = target.value;
        const name = target.name;
        this.setState({
              [name]: value
            });
    }

    handleSubmit(event) {

        {{ csrf_field() }}
        alert('A name was submitted: ' + this.state.email + this.state.password);
        var data = {
              email: this.state.email,
              password: this.state.password,
        }
        $.ajax({
            type: "POST",
            url: "/login",
            data: data,
            success: function (response) {
                // you will get response from your php page (what you echo or print)                
                console.log(response);

            }.bind(this),
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }.bind(this),

            dataType: "text",
        });
        event.preventDefault();
    }
    render() {
        return (
            <form onSubmit={this.handleSubmit} className="navbar-form navbar-left">
                <div className="form-group">
                    <input type="email" id="email" className="form-control" placeholder="E-Mail Address" name="email" value={this.state.email} onChange={this.handleChange}/>
                    <input type="password" id="password" className="form-control" placeholder="Password" name="password" value={this.state.password} onChange={this.handleChange}/>

                </div>
                <button type="submit" className="btn btn-default">Login</button>

            </form>
          );
    }
}

class Navbar extends Component{
    render() {
        return (
        <nav className="navbar navbar-default navbar-static-top">
            <div className="container">
                <div className="navbar-header">

                    <button type="button" className="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span className="sr-only">Toggle Navigation</span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                    </button>

                    <a className="navbar-brand" href={this.props.href}>
                        {this.props.brand}
                    </a>
                </div>
                <div className="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul className="nav navbar-nav navbar-right">
                        <NavbarForm />
                    </ul>
                    <ul className="nav navbar-nav">
                        <li><a href="/">Home</a></li>
                        <li><a href="/self_assessment">Self-assessment</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        );
    }
}
//export default NavbarForm;
export default Navbar;
