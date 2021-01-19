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

        <div class="search_place">
            <input name="search" type="text" placeholder="Szukaj przedstawienia">
            <button class="button button1">Szukaj</button>
        </div>

        <section class="spectacl_title">
            <?php
            foreach ($spectacle as $project): ?>
                <div class="project-1" id="<?= $project->getId(); ?>">
                    <img src="public/resources/<?= $project->getImage(); ?>">
                    <div>
                        <h2><?= $project->getTitle(); ?></h2>
                    </div>
                </div>
            <?php endforeach; ?>

<!--            <div id="project-1">-->
<!--                <img src="public/img/spectacl1.svg">-->
<!--                <div>-->
<!--                    <h2>title</h2>-->
<!--                </div>-->
<!--            </div>-->

        </section>

        </div>
    </div>
</body>


</html>