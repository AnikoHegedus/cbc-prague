import hello from "./functions.js";
import React from "react";
import ReactDOM from "react-dom";

import Headline from "./components/headline.components.js";

hello();

var h1 = React.createElement('h1', { id: 'heading1' },
    React.createElement('span', {}, 'span within the heading'),
    React.createElement('div', { class: 'foo' }, 'div within the heading')
);

ReactDOM.render(h1, document.getElementById("react-app"));

var h1 = React.createElement('h1', { }, "Cars");
var cars = React.createElement('div', {id: "cars" }, 
    React.createElement('div', { className: 'car' }, 
        React.createElement('h2', { }, 'Porsche'),
        React.createElement("span", { className: "type" }, "Carrera")
        ),
);

var wrapper = React.createElement("div", {id: "cars-list"}, 
    h1,
    cars
);

ReactDOM.render(Headline, document.getElementById("react-app"));