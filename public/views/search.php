<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/menu-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/search-style.css">

    <script type="text/javascript" src="/public/js/search.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>
    <title>Szukaj</title>
</head>


<body>
    <div class="container">
        <?PHP include 'menu_component.php'?>

        <div class="search_place">
            <input name="search" type="text" placeholder="Szukaj przedstawienia">
            <button class="button-search button4">Szukaj</button>
        </div>

        <section class="spectacle_title">

            <?php foreach ($spectacle as $project):
                $image = json_decode($project->getImage(), true);
                $image = $image[0]['route'];
                ?>
            <a class="link" href="/chosenSpectacle?id=<?= $project->getId(); ?>">
                <div class="project-1" id="<?= $project->getId(); ?>">
                    <img src="<?= $image; ?>" alt="">
                    <div>
                        <h2><?= $project->getTitle(); ?></h2>
                    </div>
                </div>

            </a>

            <?php endforeach; ?>

        </section>


    </div>
</body>

<template id="spectacle-template">
    <a class="link" href="/chosenSpectacle?id=<?= $project->getId(); ?>">
        <div class="project-1" id="">
            <img src="" alt="">
            <div>
                <h2>Tittle</h2>
            </div>
        </div>
    </a>
</template>

