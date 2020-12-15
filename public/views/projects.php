<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">
    
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
       
    </style>
    
    <title>MainPage</title>

</head>

<body>

    <div class="container1">
        <nav>
            <div class="menu">

                <div class="logo2">
    
                    <img src="public/img/logo.svg" 
                    style="float: left;
                    width: 25%;
                    height: 56%;
                    margin: 1%;">
    
                </div>

                <ul style="float:right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Theatre</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Aboute</a></li>
                    <li><a href="#">Let's start!</a></li>
    
                </ul>
            </div>
        </nav>
       

        <dvi class="main">
            <dvi class="col-4">
                <h1 style="position: absolute;
                            right: 47%;">Sztuka</h1>
                <p>Description</p>
                <a href="#">Read more!</a>
            </dvi>

            <dvi class="col-8">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                        <li class="glide__slide"><img src="public/img/example_image.svg" alt=""></li>
                        <li class="glide__slide"><img src="public/img/balladyna.svg" alt=""></li>
                        <li class="glide__slide"><img src="public/img/biesy.svg" alt=""></li>
                        <li class="glide__slide"><img src="public/img/cabaret.svg" alt=""></li>
                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button1 class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <i class="fa fa-angle-left"></i>
                        </button>
                        <button1 class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                    
                </div>        
            </dvi>        
        </dvi>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 3
        }).mount()
        
    </script>
</body>

