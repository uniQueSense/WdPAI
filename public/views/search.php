<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_backg.css">
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">

    <script type="text/javascript" src="./public/js/search.js" defer/>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Szukaj</title>
</head>


<body>
    <div class="container1">
        <?PHP include 'menu_component.php'?>

        <div class="search_place">
            <input name="search" type="text" placeholder="Szukaj przedstawienia">
            <button class="button-search button1">Szukaj</button>
        </div>

        <section class="spectacle_title">
            <?php
            foreach ($spectacle as $project): ?>
                <div class="project-1" id="<?= $project->getId(); ?>">
                    <img src="public/resources/<?= $project->getImage(); ?>">
                    <div>
                        <h2><?= $project->getTitle(); ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>

        </div>
    </div>
</body>

<template id="spectacle-template">
    <div class="project-1" id="">
        <img src="public/resources/biesy.svg">
        <div>
            <h2>Tittle/h2>
        </div>
    </div>
</template>



</html>