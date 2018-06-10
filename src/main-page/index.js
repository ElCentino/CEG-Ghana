import React from 'react'
import { render } from 'react-dom'
import { Search } from './components/Search'

Window.React = React;

const target = document.getElementById('search-container');

render(<Search />, target);