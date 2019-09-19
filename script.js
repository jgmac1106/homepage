
// TO DO:
// Show images when they've been fully loaded to avoid layout reflow

/*var grid = document.querySelector('.grid'),
    imgs = document.images,
    len = imgs.length,
    counter = 0;

[].forEach.call( imgs, function( img ) {
    img.addEventListener( 'load', incrementCounter, false );
} );

function incrementCounter() {
    counter++;
    if ( counter === len ) {
      grid.classList.add('revealed');
    }
}*/

var images = document.querySelectorAll('img');

/*[].forEach.call( images, function( img ) {
  img.addEventListener("load", function() {
    this.parentNode.style.opacity = '1';
  });
});*/

for (let image of images) {
  image.addEventListener("load", function() {
    this.parentNode.style.opacity = '1';
  });
}

function classToggle() {
  const navs = document.querySelectorAll('.Navbar__Items')
  
  navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
}

document.querySelector('.Navbar__Link-toggle').addEventListener('click', classToggle);