import React from 'react'
import { Component } from 'react'
import { Results } from './result'

export class ResultPanel extends Component {

    render() {

        const results = this.props.results.map(book => {
            return (
                <Results key={book.id} results={book}/>
            );
        });

        return (
            <div className="result-panel-main">
                <ul className="results-main">
                    {results} 
                </ul>
            </div>
        );
    }
}