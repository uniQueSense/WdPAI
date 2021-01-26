const block1 = document.querySelector(".block-spectacle1");
const block2 = document.querySelector(".block-spectacle2");
const block3 = document.querySelector(".block-spectacle3");

const button1 = document.querySelector(".button-cast");
const button2 = document.querySelector(".button-description");
const button3 = document.querySelector(".button-cost");

button1.addEventListener("click",function (){
    block1.style.display = "grid";3
    block2.style.display = "none";
    block3.style.display = "none";
    button1.style.background = "blue";
    button2.style.background = "deepskyblue";
    button3.style.background = "deepskyblue";
});

button2.addEventListener("click",function (){
    block1.style.display = "none";
    block2.style.display = "grid";
    block3.style.display = "none";
    button1.style.background = "deepskyblue";
    button2.style.background = "blue";
    button3.style.background = "deepskyblue";
});

button3.addEventListener("click",function (){
    block1.style.display = "none";
    block2.style.display = "none";
    block3.style.display = "flex";
    button1.style.background = "deepskyblue";
    button2.style.background = "deepskyblue";
    button3.style.background = "blue";
});

const search = document.querySelector('input[placeholder="Szukaj przedstawienia"]');
const theatreContainer = document.querySelector('.theatre_list');


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

document.querySelector('.button-search').addEventListener('click', () => searchHandler())