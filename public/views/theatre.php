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
            foreach ($theatre as $project): ?>
                <div class="theatre_description" id="<? $project->getIdTheatre();?>">
                    <ul>
                        <li>
                            <a href="#" ><h><?= $project->getName(); ?></h></a>
                            <p>Miasto: <?= $project->getCity(); ?></p>
                            <p>Ulica: <?= $project->getStreet()." ". $project->getNumber(); ?></p>
                        </li>

                    </ul>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>


</html>