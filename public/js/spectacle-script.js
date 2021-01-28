const block1 = document.querySelector(".block-spectacle1");
const block2 = document.querySelector(".block-spectacle2");
const block3 = document.querySelector(".block-spectacle3");

const button1 = document.querySelector(".button-cast");
const button2 = document.querySelector(".button-description");
const button3 = document.querySelector(".button-cost");

function unmount() {
    block1.style.display = "none";
    block2.style.display = "none";
    block3.style.display = "none";
    button1.style.background = "#2699FB";
    button1.style.color = "white"
    button2.style.background = "#2699FB";
    button2.style.color = "white"
    button3.style.background = "#2699FB";
    button3.style.color = "white"
}

function fun (number) {
    unmount();
    switch (number) {
        case 1:
            block1.style.display='flex';
            button1.style.color = "#2699FB";
            button1.style.background = "white"
            return;
        case 2:
            block2.style.display='flex';
            button2.style.color = "#2699FB";
            button2.style.background = "white"
            return;
        case 3:
            block3.style.display='flex';
            button3.style.color = "#2699FB";
            button3.style.background = "white"
            return;
    }
}

button1.addEventListener("click",()=>fun(1));

button2.addEventListener("click",()=>fun(2));

button3.addEventListener("click",()=>fun(3));

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
