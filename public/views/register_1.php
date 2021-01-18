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
        <?PHP include 'menu_component.php'?>

        <div class="page_location"><img src="public/img/pasek2.svg"></div>

        <div class="register_container">
            <form>
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
                    <input name="home_number" type="text" placeholder="13">
                </div>

                <!-- <input id="rememberChkBox" type="checkbox"> -->
                <div class="button_login">
                    <button><i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>