<!DOCTYPE html>
<?php
if( ! isset($spectacle)) {
    die('error');
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style_backg.css">

    <script type="text/javascript" src="./public/js/spectacle-script.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Spektakl: <?= $spectacle[0]['title']; ?></title>

</head>

<body>
<div class="container-spectacle">
    <?PHP include 'menu_component.php'?>

    <h10>  <?= $spectacle[0]['title']; ?>  </h10>

    <div class="images-slide">
        <ul class="glide__slide">

            <?php
            $images = json_decode($spectacle[0]["image"], true);
            foreach ($images as $image):?>
                <li class="glide__slide play">
                    <img class="spectacle-img" src="<?= $image['route']; ?>" alt="">
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

    <div class="button-navi">
        <button class="button-navigation button-cast">Aktorzy</button>
        <button class="button-navigation button-description">Opis spektaklu</button>
        <button class="button-navigation button-cost">Bilety</button>
    </div>

    <div class="block-spectacle1">
        <h11>Obsada:</h11>
        <div class="actors-block">
            <ul>
        <?php foreach ($actors as $actor): ?>
            <li>
                <p><?PHP echo $actor['first_name'].' '.$actor['second_name']?></p>
            </li>
        <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <div class="block-spectacle2">
        <ul>
            <li>
                <p><?= $spectacle[0]['description']; ?></p>
            </li>
        </ul>
    </div>

    <div class="block-spectacle3">
        <p><?= $spectacle[0]['cost']?></p>
    </div>


</body>