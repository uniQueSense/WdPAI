<!DOCTYPE html>

<head>
    <!--    <link rel="stylesheet" type="text/css" href="public/css/style.css">-->
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register_style.css">

    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Register</title>

</head>

<body>
    <div class="container1">
        <nav class="menu">
            <div class="logo2">
                <img src="public/img/logo.svg">

            </div>

            <ul class="menubtns" style="float:right">
                <li><a href="http://localhost:8080/projects">Strona Główna</a></li>
                <li><a href="http://localhost:8080/search">Szukaj spektaklu</a></li>
                <li><a href="http://localhost:8080/theatre">Teatry</a></li>
                <li><a href="http://localhost:8080/aboute">O nas</a></li>
                <li><a href="http://localhost:8080/login">Zaloguj się</a></li>
            </ul>
        </nav>


        <div class="page_location"><img src="public/img/pasek3.svg"></div>

        <div class="register_container">
            <form>
                <div class="card_number">
                    <p>Numer karty</p>
                    <input class="inputCard" type="number" min="1000" max="9999" name="creditCard1" id="creditCard1" required/>
                    -
                    <input class="inputCard" type="number" min="1000" max="9999" name="creditCard2" id="creditCard2" required/>
                    -
                    <input class="inputCard" type="number" min="1000" max="9999" name="creditCard3" id="creditCard3" required/>
                    -
                    <input class="inputCard" type="number" min="1000" max="9999"  name="creditCard4" id="creditCard4" required/>
                </div>

                <div class="card_date">
                    <p>Ważność karty</p>
                    <input class="inputCard" name="expiry" id="expiry" type="month" required/>

                </div>

                <div class="cvv">
                    <p>cvv</p>
                    <input name="key" type="number" placeholder="xxx">
                </div>

                <!-- <input id="rememberChkBox" type="checkbox"> -->
                <div class="button_login">
                    <button><i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>

    </div>
</body>