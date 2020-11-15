<script>
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