import React from 'react'
import { Component } from 'react'


export class SearchBar extends Component {

    collectInput() {
        this.props.collectInput(this.refs.textbox.value);
    }

    render() {

        return (
            <input ref="textbox" type="search" name="seache" placeholder="Search by ISBN, Title, or Author" id="seach" onChange={this.collectInput.bind(this)}/>
        );
    }
}