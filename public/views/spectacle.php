<!DOCTYPE html>
<?php
if( ! isset($spectacle)) {
    die('error');
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register_style.css">

    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Spektakl:<??></title>

</head>

<body>
<div class="container1">
    <?PHP include 'menu_component.php'?>

    <div class="images-slide">
        <ul class="glide__slide">

            <?php
            $images = json_decode($spectacle[0]["image"], true);

            foreach ($images as $image):
            ?>

                <li class="glide__slide play">
                    <img class="spectacle-img" src="<?= $image['route']; ?>" alt="">
                </li>
            <?php endforeach; ?>

        </ul>
    </div>

    <div class="button-navi">

    </div>



</body>