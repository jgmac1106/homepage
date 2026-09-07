
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  
@font-face {
  font-family: 'RocherColor';
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/254249/RocherColorGX.woff2') format('woff2'),
    url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/254249/RocherColorGX.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}


h1 {
  text-align: center;
  font-family: RocherColor;
  font-weight: normal;
  font-size: 10em;
  font-variation-settings: "BVEL" var(--bevel), "SHDW" var(--shadow);
}
h2 {
  text-align: center;
  font-family: RocherColor;
  font-weight: normal;
  font-size: 7em;
  font-variation-settings: "BVEL" var(--bevel), "SHDW" var(--shadow);
}
h3 {
  text-align: center;
  font-family: RocherColor;
  font-weight: normal;
  font-size: 5em;
  font-variation-settings: "BVEL" var(--bevel), "SHDW" var(--shadow);
}
body {
  height: 100%;
  margin: 0;
  padding: 0;
  background-color: #FFCC00;
}
</style>
<script type="text/javascript">
let styleMe = document.documentElement.querySelector("h1");

document.body.addEventListener("mousemove", event=> onMouseMove(event));

function onMouseMove() {
  let shadow = Math.round(event.clientX/window.innerWidth*100);
  let h = document.body.offsetHeight;
  let bevel = Math.round(event.clientY/h*100);
  debugger;
  setStyle("--shadow", shadow);
  setStyle("--bevel", bevel);
}

function setStyle (property, value) {
  styleMe.style.setProperty(property, value);
}
</script>

    <title>Poetry</title>
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css">
    
    <!-- import the webpage's javascript file -->
    
  </head>  
  <body>
    <h1>IndieWeb Poetry</h1>
<h2>Always full of </h2>
<h3>Strange Characters</h3>
  </body>
</html>
