'use strict';

let gridContainer = document.getElementsByClassName('grid-container')[0];



let images = [
    {url: 'assets/images/car.jpg', alt: 'car'}, {url: 'assets/images/panda.jpg', alt: 'panda'}, {url: 'assets/images/desert.jpg', alt: 'desert'}, {url: 'assets/images/horse.jpg', alt: 'horse'}, {url: 'assets/images/moon.jpg', alt: 'moon'},
    {url: 'assets/images/forest.jpg', alt: 'forest'}, {url: 'assets/images/volcano.jpg', alt: 'volcano'}, {url: 'assets/images/city.jpg', alt: 'city'}, {url: 'assets/images/tent.jpg', alt: 'tent'}, {url: 'assets/images/flowers.jpg', alt: 'flowers'}   
];



function addGridItem(index) {

    let image = document.createElement('IMG');

    image.classList.add('grid__item');

    image.src = images[index].url;
    image.alt = images[index].alt;
    
    gridContainer.appendChild(image);

};


for(let i = images.length; i > 0; i--) {

    let index = Math.floor(Math.random() * images.length);
    
    addGridItem(index);
    images.splice(index, 1);

};