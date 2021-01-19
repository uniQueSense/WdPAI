
const block1 = document.querySelector(".block1");
const block2 = document.querySelector(".block2");
const block3 = document.querySelector(".block3");

const button1 = document.querySelector(".button1");
const button2 = document.querySelector(".button2");
const button3 = document.querySelector(".button3");

const state_img = document.querySelector(".state");

button1.addEventListener("click",function (){
    block1.style.display = "none";
    block2.style.display = "grid";
    state_img.src = "public/img/pasek2.svg";
});

button2.addEventListener("click",function (){
    block2.style.display = "none";
    block3.style.display = "grid";
    state_img.src = "public/img/pasek3.svg";
});


