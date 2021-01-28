
<nav class="menu">
    <div class="logo2">
        <img src="public/img/logo.svg">

    </div>

    <ul class="menubtns" style="float:right">
        <li><a href="/recommendedSpectacle">Strona Główna</a></li>
        <li><a href="/search">Szukaj spektaklu</a></li>
        <li><a href="/theatre">Teatry</a></li>
        <li><a href="/aboute">O nas</a></li>
        <li>
            <?php
            if (isset($_COOKIE["email"]) && isset($_COOKIE["id"]))
                echo '<a href="/logout">Wyloguj się</a>';
            else
                echo '<a href="/login">Zaloguj się</a>';
            ?>

        </li>
    </ul>
</nav>