import React from 'react'
import { Component } from 'react'


export class SearchBar extends Component {

    constructor() {
        super();

        
        this.searchStyles = {
            color: 'rgb(141, 141, 141)',
            fontWeight: 'bold',
            fontSize: 20 + 'px',
            fontFamily: 'Poppins'
        }
    }

    collectInput() {
        this.props.collectInput(this.refs.textbox.value);
    }

    render() {

        return (
            <input style={this.searchStyles} ref="textbox" type="search" name="seache" placeholder="Search by ISBN, Title, or Author" id="seach" onChange={this.collectInput.bind(this)}/>
        );
    }
}