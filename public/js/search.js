const search = document.querySelector('input[placeholder="Szukaj przedstawienia"]');
const searchContainer = document.querySelector('.spectacle_title');

function searchHandler () {
        const data = {'search': search.value};
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

search.addEventListener("keyup", (e) => {
    if(e.key === "Enter") {
       e.preventDefault();
        searchHandler();
    }
})

function loadPerformances(performances) {
    performances.forEach(spectacle => {
        console.log(spectacle);
        createPerformances(spectacle);
    })

}

function createPerformances (spectacle) {

    const template = document.querySelector("#spectacle-template");
    const clone = template.content.cloneNode(true);
    const image = clone.querySelector("img");
    const title = clone.querySelector("h2");

    image.src = `/public/resources/${spectacle.image}`;
    title.innerHTML = spectacle.title;

    searchContainer.appendChild(clone);
}