<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>

        <div class="login_container">

            <div class="register_info">
                <t>Nie masz jeszcze konta?</t>
                <a href="register">Zarejestruj się!</a>
            </div>

            <form class="login" action="loginForm" method="POST">

                <div class="messages">
                    <?php if(isset($messages)){
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>

                <input name="email" type="text" placeholder="email@email.com">
                <input name="password" type="password" placeholder="password">

                <div class="button_login">
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </div>

            </form>
        </div>
    </div>
</body>