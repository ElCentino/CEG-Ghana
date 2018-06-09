import React from 'react'
import { Component } from 'react'
import { SearchBar } from './searchbar'
import { Button } from './button'
import { ResultPanel } from './resultPanel';

export class Search extends Component {

    constructor() {
        super();

        this.state = {
            books: [],
            buttonTitle : 'Find a book'
        }
    }

    getData(value) {

        return new Promise((resolve, reject) => {

            const query = 'search=' + value.replace(/^"|"$/g, '') + '&length=5';

            let searchResults = [];

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'app/search.php', true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onloadend = () => {

                const books = JSON.parse(xhr.responseText);

                const filteredBooks = books.filter(book => {

                    return value.length != 0;
                });
        
                for(const result of filteredBooks) {
                    searchResults.push(result);
                }

                resolve(searchResults);

                if(value.length <= 0) {

                    reject([]);
                }
            };

            xhr.send(query);

            xhr.onerror = () => {

                reject([]);
            }

        });
    }

    collectInput(value) {
        
        this.getData(value).then(result => {
            
            this.setState({
                books: result,
                buttonTitle : 'More Results'
            });
           
        }).catch(reason => {
            this.setState({
                books: reason,
                buttonTitle: 'Find a book'
            })
        });
    }

    render() {

        return (
            <div className="seache">
                <div className="seachebar">
                    <form className="" action="#" method="post">
                        <SearchBar collectInput={this.collectInput.bind(this)}/>
                        <Button buttonTitle={this.state.buttonTitle}/>
                        <ResultPanel results={this.state.books}/>
                    </form>
                </div>
            </div>
        );
    }
}