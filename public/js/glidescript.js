var input = document.querySelector('#options-focus-at-input')
var checkbox = document.querySelector('#options-focus-at-checkbox')

var glide = new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    perView: 6,
    gap: 35,
    focusAt: "center",
    autoplay: 10000,
    hoverpause: true,
    breakpoints: {
        800: {
            perView: 2
        }
    }
})

glide.mount()
