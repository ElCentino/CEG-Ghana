import React from 'react'
import { Component } from 'react'

export class Button extends Component {

    render() {

        return (
            <button type="submit" name="seache" id="seachsubmit">{this.props.buttonTitle}
                <i className="fas fa-search"></i>
            </button>
        );
    }
}