'use strict';

console.log('hello world');


let images = [
    
    '', '', '', '', '', 
    '', '', '', '', '',
    '', '', '', '', '',
    '', '', '', '', '',
];

let gridContainer = document.getElementsByClassName('grid-container')[0];




function addGridItem() {
    let grid = document.createElement('DIV');
    grid.classList.add('grid');
    gridContainer.appendChild(grid);
};



for(let i = 0; i < images.length; i++) {
   
    addGridItem();

};