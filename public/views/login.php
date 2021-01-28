<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container-login">
        <div class="logo">
            <img src="/public/img/logo.svg" alt="">
        </div>

        <div class="login-container">

            <div class="register-info">
                <p>Nie masz jeszcze konta?</p>
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

                <div class="button-login">
                    <button type="submit"><i class="fas fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>