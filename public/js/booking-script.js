const chairs = document.querySelectorAll('.armchair');
const rowInput = document.querySelector('#row');
const columnInput = document.querySelector('#column');
const selectedColor = 'rgb(0, 255, 0)'
const notSelectedColor = 'rgb(135, 206, 250)'
const notAvailable = 'rgb(255, 123, 0)'
let currentlySelected = null

chairs.forEach(chair => chair.addEventListener('click', function () {
        if (chair.style.color === notAvailable) {
            return;
        }
        if (currentlySelected !== null) {
            changeColor(currentlySelected);
        }
        currentlySelected = chair;
        changeColor(currentlySelected);
        writeToInput(currentlySelected);
    })
);

const changeColor = (element) => {
    const color = element.style.color;
    console.log(color);
    console.log(typeof color);
    if (color === notSelectedColor) {
        element.style.color = selectedColor;
    } else {
        element.style.color = notSelectedColor;
    }
}

const writeToInput = (element) => {
    const values = getRowAndCol(element.querySelector('i'));

    rowInput.value = values[0];
    columnInput.value = values[1];
}

const getRowAndCol = (element) => {
    let id = element.id;
    return id.split('/');
}