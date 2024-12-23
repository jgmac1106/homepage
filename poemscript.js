const contents = [
  'Looted truths',
  'loosed as',
  'aclhemist of ',
  'remix stick',
  'tickers with',
  'quick',
  'fuses',
  'in muses',
  'who uses',
  'their juice',
  'spruce and fuse',
  'and bad',
  'poems',
  'get born',
  'anew'
];
// I didn't *really* need to manipulate the original array but I wanted to play with array methods :)
const sequence = [...contents, 'relax', ...contents.slice().reverse(), 'relax'];

const circle = document.getElementById('circle');
const button = document.getElementById('animateButton');
const endMessage = document.getElementById('endMessage');

function finishExercise() {
  button.removeAttribute('disabled');
  endMessage.innerHTML = "Well done. You've got this.";
}

function animate(item, index) {
  setTimeout(() => {
  	circle.innerText = item;
    if (item === 'relax') {
    	circle.className = 'circle';
    } else {
    	circle.classList.add('circle-big', 'circle-' + item);
    }
    if (index === sequence.length -1) {
      // Make sure the animation completes before enabling button and adding text
      setTimeout(finishExercise, 2000);
    }
  }, 2500 * index);
}

function animateAll() {
  button.setAttribute('disabled', true);
  endMessage.innerHTML = '';
  
	sequence.forEach((item, idx) => {
		animate(item, idx);
  });
}

button.addEventListener('click', animateAll);
