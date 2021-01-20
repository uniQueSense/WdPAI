<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_backg.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">

    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Szukaj</title>
</head>


<body>
    <div class="container1">
        <?PHP include 'menu_component.php'?>

        <div class="search_theatre">
            <input name="search" type="text" placeholder="Wpisz miasto">
            <button class="button button1">Szukaj</button>
        </div>

        <section class="theatre_list">
            <?php
            foreach ($theatre as $theatres): ?>
                <div class="theatre1" id="<? $theatres->getIdTheatre();?>"
                    <dl>
                        <dt><a href="#"><? $theatres->getName(); ?></a></dt>
                        <dd></dd>
                    </dl>
            <?php endforeach; ?>
        </section>
    </div>
</body>


</html>