<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/menu-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/theatre-style.css">

    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Szukaj</title>
</head>


<body>
    <div class="container">
        <?PHP include 'menu_component.php'?>

        <div class="search_theatre">
            <input name="search" type="text" placeholder="Wpisz miasto">
            <button class="button button4">Szukaj</button>
        </div>

        <section class="theatre_list">
            <?php foreach ($theatre as $project): ?>
                <div class="theatre_description" id="<? $project->getIdTheatre();?>">
                    <ul>
                        <li>
                            <a href="#" ><h1><?= $project->getName(); ?></h1></a>
                            <p>Miasto: <?= $project->getCity(); ?></p>
                            <p>Ulica: <?= $project->getStreet()." ". $project->getNumber(); ?></p>
                        </li>

                    </ul>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</body>
