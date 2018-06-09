import React, { Component } from 'react'

export class Results extends Component {
    
    render() {

        return (
            <li>
                <a href={'app/detail.php?a=' + this.props.results.id} >
                    <img className="book-image-thumbnail" src={'image/' + this.props.results.image}/>
                    <span className="book-search-title">{this.props.results.title}</span>
                </a>
            </li>
        );
    }
}