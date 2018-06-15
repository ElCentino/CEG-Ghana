import React from 'react'
import { Component } from 'react'
import { SearchBar } from './searchbar'
import { Button } from './button'
import { ResultPanel } from './resultPanel'

export class Search extends Component {

    constructor() {
        super();

        this.buttonTitleStates = {
            resultsFound: 'More Resultss',
            default: 'Find a book',
            empty: 'No Books Found'
        }

        this.state = {
            books: [],
            buttonTitle : this.buttonTitleStates.default
        }
    }

    getData(value) {

        return new Promise((resolve, reject) => {

            const query = 'search=' + value.replace(/^"|"$/g, '') + '&length=5';

            let searchResults = [];

            var xhr = new XMLHttpRequest();
            xhr.open('GET', `app/search.php?${query}`, true);

            xhr.onloadend = () => {

                const books = JSON.parse(xhr.responseText);

                const filteredBooks = books.filter(book => {

                    return value.length != 0;
                });
        
                for(const result of filteredBooks) {
                    searchResults.push(result);
                }

                resolve(searchResults);
                
                if(filteredBooks.length <= 0 && value.length > 0) {
                    this.setState({
                        buttonTitle: this.buttonTitleStates.empty
                    });
                }
            };

            xhr.send();

            xhr.onerror = () => {

                reject([]);
            }

        });
    }

    collectInput(value) {
        
        this.getData(value).then(result => {

            if(result.length <= 0) {

                this.setState({
                    books: [],
                    buttonTitle: this.buttonTitleStates.default
                });

            } else {

                this.setState({
                    books: result,
                    buttonTitle : this.buttonTitleStates.resultsFound
                });
            }
           
        }).catch(reason => {

            this.setState({
                books: reason,
                buttonTitle: this.buttonTitleStates.default
            });
        });
    }

    render() {

        return (
            <div className="seache">
                <div className="seachebar">
                    <form className="" action="#" method="post" autoComplete="off">
                        <SearchBar collectInput={this.collectInput.bind(this)} />
                        <Button buttonTitle={this.state.buttonTitle} />
                        <ResultPanel results={this.state.books} />
                    </form>
                </div>
            </div>
        );
    }
}