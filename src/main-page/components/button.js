import React from 'react'
import { Component } from 'react'

export class Button extends Component {

    constructor() {
        super();

        this.buttonStyles = {
            marginLeft: 10+'px'
        }
    }

    render() {

        return (
            <button type="submit" name="seache" id="seachsubmit">
                {this.props.buttonTitle}
                <i className="fas fa-search" style={this.buttonStyles}></i>
            </button>
        );
    }
}