import React from 'react';
import ReactDOM from 'react-dom';

function Search() {
    return (
        <div>
           
        </div>
    );
}

export default Search;

if (document.getElementById('search-results')) {
    ReactDOM.render(<Search />, document.getElementById('search-results'));
}
