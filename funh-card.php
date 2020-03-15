<!DOCTYPE html>
<html>
   <head>
   <style>
    // Percents (recalculates font-sizes based on container-width)
$one: calc(0.01 * #{$container-width});
$two: calc(0.02 * #{$container-width});
$four: calc(0.04 * #{$container-width});
$sixhalf: calc(0.065 * #{$container-width});
$seven: calc(0.07 * #{$container-width});
$eight: calc(0.08 * #{$container-width});
$eighthalf: calc(0.065 * #{$container-width});
$ninehalf: calc(0.095 * #{$container-width});
$ten: calc(0.10 * #{$container-width});
$elevenhalf: calc(0.110 * #{$container-width});
$twelve: calc(0.10 * #{$container-width});
$fifteen: calc(0.15 * #{$container-width});
$twenty: calc(0.14 * #{$container-width});
$twentytwo: calc(0.24 * #{$container-width});

// Colors
$red: rgb(136, 41, 49);
$blue: rgb(50, 100, 150);

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.hello-world {
  margin: 0 auto;
  width: $container-width;
  font-family: 'Pacifico', cursive;
  text-transform: lowercase;
  font-size: $four;
  color: $red;
  display: flex;
  justify-content: center;
  p {
    background: #fff;
    z-index: 20;
    padding: 0 $one;
  }
}

.typography-sq {
  z-index: 10;
  border: 1vw solid #000;
  background: #fff;
  color: #000;
  width: $container-width;
  margin: -2vw auto;
  padding: 1vw 1vw 2vw;
  display: grid;
  grid-template-columns: repeat(10, 1fr);
  grid-template-rows: repeat(9, $row-height);
  * {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .full {
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 400;
    text-transform: uppercase;
    font-size: $eighthalf;
    grid-row: 1 / span 4;
    grid-column: 1 / span 1;
    overflow: hidden;
    p {
      transform: rotate(270deg);
    }
  }
  .stack {
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 300;
    text-transform: uppercase;
    font-size: $seven;
    grid-row: 1 / span 4;
    grid-column: 2 / span 1;
    overflow: hidden;
    p {
      transform: rotate(270deg) scale(1, 1.5);
    }

  }
  .developer {
    font-family: 'Alfa Slab One', cursive;
    text-transform: uppercase;
    font-size: $elevenhalf;
    z-index: 30;
    grid-row: 1 / span 2;
    grid-column: 3 / -1;
  }
  .developer a {
    text-decoration: none;
  }
  .front-end {
    font-family: 'Londrina Sketch', cursive;
    text-transform: uppercase;
    font-size: $fifteen;
    letter-spacing: $one;
    grid-row: 3 / span 2;
    grid-column: 3 / -1;
  }
  .program {
    font-family: 'Alfa Slab One', cursive;
    text-transform: lowercase;
    font-size: $eighthalf;
    margin-top: 4vw;
    grid-row: 5 / span 1;
    grid-column: 1 / span 4;
  }
  .design {
    font-family: 'Pacifico', cursive;
    text-transform: lowercase; 
    font-size: $ninehalf;
    margin-top: $two;
    grid-row: 5 / span 1;
    grid-column: 5 / span 3;
  }
  .code {
    font-family: 'Cutive Mono', monospace;
    text-transform: lowercase;
    font-size: $twelve;
    margin-top: $two;
    grid-row: 5 / span 1;
    grid-column: 8 / span 3;
  }
  .software {
    font-family: 'Cutive Mono', monospace;
    text-transform: lowercase;
    letter-spacing: -0.3vw;
    font-size: $sixhalf;
    z-index: 30;
    grid-row: 7 / span 1;
    grid-column: 1 / span 3;
  }
  .creative {
    font-family: 'Cabin Sketch', cursive;
    text-transform: lowercase;
    font-size: $ten;
    grid-row: 7 / span 1;
    grid-column: 4 / span 4;
  }
  .engineer {
    font-family: 'Londrina Sketch', cursive;
    text-transform: lowercase;
    font-size: $twenty;
    grid-row: 8 / span 2;
    grid-column: 1 / span 7;
    .letter-g {
      background: #fff;
    }
  }
  .image {
    grid-row: 6 / span 4;
    grid-column: 8 / span 3;
    align-items: flex-end;
    margin-bottom: -1.5vw;
    img {
      height: $twenty;
      // Set fill color in web.svg file :(
    }
  }
}

   </style>
   </head>
<body>
    <div class="typography-art h-card">
    <div class="hello-world p-name"><p>J. Gregory McVery</p></div>
    <div class="typography-sq p-summary">
      <div class="full"><p>Make</p></div>
      <div class="stack"><p>Hack</p></div>
      <div class="developer"><a class="u-url" href="https://jgregorymcverry.com">Webmaker</a></div>
      <div class="front-end"><p>Professor</p></div>
      <div class="program"><p>Teacher</p></div>
      <div class="design"><p>Poet</p></div>
      <div class="code"><p>coder</p></div>
      <div class="software"><p>play</p></div>
      <div class="creative"><p>learn</p></div>
      <div class="engineer"><p>Tr<span class="letter-g">ou</span>blemaker</p></div>
      <div class="image"><img src="https://jgregorymcverry.com/photos/assets/thumb.jpg" class="u-photo" /></div>
    </div>
  </div>


  </body>
 
</html>
