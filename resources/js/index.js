import React from 'react';
import ReactDOM from 'react-dom';

const App = () => <div>This is sample tenant app</div>

if (document.getElementById("core-app")) {

    ReactDOM.render(<App />, document.getElementById('core-app'));
}
