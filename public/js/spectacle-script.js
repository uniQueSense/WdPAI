const block1 = document.querySelector(".block-spectacle1");
const block2 = document.querySelector(".block-spectacle2");
const block3 = document.querySelector(".block-spectacle3");

const button1 = document.querySelector(".button-cast");
const button2 = document.querySelector(".button-description");
const button3 = document.querySelector(".button-cost");

button1.addEventListener("click",function (){
    block1.style.display = "flex";
    block2.style.display = "none";
    block3.style.display = "none";
    button1.style.background = "white";
    button1.style.color = "#2699FB"
    button2.style.background = "#2699FB";
    button2.style.color = "white"
    button3.style.background = "#2699FB";
    button3.style.color = "white"
});

button2.addEventListener("click",function (){
    block1.style.display = "none";
    block2.style.display = "grid";
    block3.style.display = "none";
    button1.style.background = "#2699FB";
    button1.style.color = "white"
    button2.style.background = "white";
    button2.style.color = "#2699FB"
    button3.style.background = "#2699FB";
    button3.style.color = "white"
});

button3.addEventListener("click",function (){
    block1.style.display = "none";
    block2.style.display = "none";
    block3.style.display = "flex";
    button1.style.background = "#2699FB";
    button1.style.color = "white"
    button2.style.background = "#2699FB";
    button2.style.color = "white"
    button3.style.background = "white";
    button3.style.color = "#2699FB"
});

const search = document.querySelector('input[placeholder="Szukaj przedstawienia"]');
const theatreContainer = document.querySelector('.theatre_list');
button2.style.background = "white";
button2.style.color = "#2699FB";

function searchHandler () {
    const data = {'actors': search.value};
    console.log(data)
    fetch("/searchSearch", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then( response=> {
        return response.json();
    }).then( performances=> {
        searchContainer.innerHTML = "";
        loadPerformances(performances)
    });
};

document.querySelector('.button-search').addEventListener('click', () => searchHandler());
