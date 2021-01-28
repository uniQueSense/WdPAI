var input = document.querySelector('#options-focus-at-input')

var glide = new Glide('.glide', {
    type: 'carousel',
    startAt: 1,
    perView: 3,
    focusAt: "center",
    breakpoints: {
        800: {
            perView: 2
        }
    }
})

glide.mount()
