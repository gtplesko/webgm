import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';

console.log('hello!');
fetch('/api/hello')
  .then(response => response.json())
  .then(json => console.log(json));

ReactDOM.render(<App />, document.getElementById('root'));
registerServiceWorker();
