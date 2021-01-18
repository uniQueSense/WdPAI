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

        <div class="page_location"><img src="public/img/pasek.svg"></div>

        <div class="register_container">
            <form>
                <div class="name">
                    <p>Imię</p>
                    <input name="name" type="text" placeholder="Jan">
                </div>

                <div class="surname">
                    <p>Nazwisko</p>
                    <input name="surname" type="text" placeholder="Kowalski">
                </div>

                <div class="login">
                    <p>Login</p>
                    <input name="login" type="text" placeholder="janek12345">
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

                <!-- <input id="rememberChkBox" type="checkbox"> -->
                <div class="button_login">
                    <button><i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>

    </div>

</body>