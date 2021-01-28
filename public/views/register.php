<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/register-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/menu-style.css">


    <script type="text/javascript" src="/public/js/script.js" defer></script>
    <script type="text/javascript" src="/public/js/registerscript.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Register</title>

</head>

<body>
    <div class="container">
        <?PHP include 'menu_component.php'?>

        <div class="page_location">
            <img class="state" src="/public/img/pasek.svg">
        </div>

        <div class="register_container">
            <form method="POST" action="registerForm">

                <div class="block1">
                    <div class="name">
                        <p>Imię</p>
                        <input name="name" type="text" placeholder="Jan">
                    </div>

                    <div class="surname">
                        <p>Nazwisko</p>
                        <input name="surname" type="text" placeholder="Kowalski">
                    </div>

                    <div class="email">
                        <p>Email</p>
                        <input name="email" type="text" placeholder="email@email.com">
                    </div>

                    <div class="password">
                        <p>Hasło</p>
                        <input name="password" type="password" placeholder="password">
                    </div>

                    <div class="repassword">
                        <p>Powtórz hasło</p>
                        <input name="repassword" type="password" placeholder="password">
                    </div>

                    <div class="button_login">
                        <button class="button1" type="button"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="block2">
                    <div class="city">
                        <p>Miejscowość</p>
                        <input name="city" type="text" placeholder="Warszawa">
                    </div>

                    <div class="street">
                        <p>Ulica</p>
                        <input name="street" type="text" placeholder="Wiejska">
                    </div>

                    <div class="home_number">
                        <p>Numer domu / (meszkania)</p>
                        <input name="home_number" type="number" placeholder="13"/>
                    </div>

                    <div class="phone_number">
                        <p>Numer telefonu</p>
                        <input name="phone_number" type="tel" placeholder="123456789" min="100000000" max="999999999" required/>
                    </div>

                    <div class="button_login">
                        <button class="button2" type="button"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="block3">
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

                    <div class="button_login">
                        <button class="button3" type="submit"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>



            </form>
        </div>

    </div>

</body>