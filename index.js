const modal = document.querySelector('#modal');
const openModal = document.querySelector('.open-button');
const closeModal = document.querySelector('.close-button');

openModal.addEventListener('click', () => {
    modal.showModal();
})

closeModal.addEventListener('click', () => {
    modal.close();
})

const modaltime = document.querySelector('#modaltime');
const openmodaltime = document.querySelector('.open-button2');
const closemodaltime = document.querySelector('.close-button2');

openmodaltime.addEventListener('click', () => {
    modaltime.showModal();
})

closemodaltime.addEventListener('click', () => {
    modaltime.close();
})

var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Wrap every letter in a span
var textWrapper = document.querySelector('.big-heading');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.big-heading .letter',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 100 * i
  }).add({
    targets: '.big-heading .letter', 
    opacity: 1,
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i
  });

  

