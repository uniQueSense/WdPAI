<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">

    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>MainPage</title>

</head>

<body>

    <div class="container1">
        <?PHP include 'menu_component.php'?>

        <div class="main">

            <div class="headline"><h>Repertuary</h></div>

            <div class="col-8">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">

                            <li class="glide__slide play">
                                <img src="public/img/cabaret.svg" alt="">
                                <div class="rectangle">
                                    <h1>obraz1</h1>
                                    <a href="#">Read more!</a>
                                </div>

                                <div class="rotate">
                                    <img src="public/img/cabaret.svg" alt="">
                                    <div class="rectangle">
                                        <h1>obraz1</h1>
                                        <a href="#">Read more!</a>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide play">
                                <img src="public/img/balladyna.svg" alt="">
                                <div class="rectangle">
                                    <h1>obraz1</h1>
                                    <a href="#">Read more!</a>
                                </div>

                                <div class="rotate">
                                    <img src="public/img/balladyna.svg" alt="">
                                    <div class="rectangle">
                                        <h1>obraz1</h1>
                                        <a href="#">Read more!</a>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide play">
                                <img src="public/img/biesy.svg" alt="">
                                <div class="rectangle">
                                    <h1>obraz1</h1>
                                    <a href="#">Read more!</a>
                                </div>

                                <div class="rotate">
                                    <img src="public/img/biesy.svg" alt="">
                                    <div class="rectangle">
                                        <h1>obraz1</h1>
                                        <a href="#">Read more!</a>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide play">
                                <img src="public/img/manifesto.svg" alt="">
                                <div class="rectangle">
                                    <h1>obraz1</h1>
                                    <a href="#">Read more!</a>
                                </div>

                                <div class="rotate">
                                    <img src="public/img/manifesto.svg" alt="">
                                    <div class="rectangle">
                                        <h1>obraz1</h1>
                                        <a href="#">Read more!</a>
                                    </div>
                                </div>
                            </li>

                            <li class="glide__slide play">
                                <img src="public/img/example_image.svg" alt="">
                                <div class="rectangle">
                                    <h1>obraz1</h1>
                                    <a href="#">Read more!</a>
                                </div>

                                <div class="rotate">
                                    <img src="public/img/example_image.svg" alt="">
                                    <div class="rectangle">
                                        <h1>obraz1</h1>
                                        <a href="#">Read more!</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <i class="fa fa-angle-left"></i>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        var input = document.querySelector('#options-focus-at-input')
        var checkbox = document.querySelector('#options-focus-at-checkbox')

        var glide = new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 6,
            focusAt: "center",
        })

            glide.mount()

    </script>
</body>

