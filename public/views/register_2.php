<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register_style.css">

    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Register</title>

</head>

<body>
    <div class="container1">
        <?PHP include 'menu_component.php'?>

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