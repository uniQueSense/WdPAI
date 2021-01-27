<!DOCTYPE html>
<?php

if( ! isset($spectacle)) {
    die('error');
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/menu_style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style_backg.css">
    <link rel="stylesheet" type="text/css" href="/public/css/spectacle-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/glide-slide-spectacle-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <script src="/public/js/glidescript-to-spectacle.js" defer></script>
    <script type="text/javascript" src="/public/js/spectacle-script.js" defer></script>

    <title>Spektakl: <?= $spectacle[0]['title']; ?></title>

</head>

<body>
    <div class="container-spectacle">
        <?PHP include 'menu_component.php'?>
        <div class="container-content">

            <div class="container-spectacle-first">
                <div class="title">
                    <h1>  <?= $spectacle[0]['title']; ?> </h1>
                </div>

                <div class="images-slide">
                    <div class="glide">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <?php
                                $images = json_decode($spectacle[0]["image"], true);
                                foreach ($images as $image):?>
                                    <li class="glide__slide">
                                            <img class="play" src="<?= $image['route']; ?>" alt=""/>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="button-navi">
                    <button class="button-navigation button-cast">Aktorzy</button>
                    <button class="button-navigation button-description">Opis spektaklu</button>
                    <button class="button-navigation button-cost">Bilety</button>
                </div>

            </div>

            <div class="container-spectacle-second">

                <div class="block-spectacle1">

                    <div class="actors-block1"><h3>Obsada</h3></div>

                    <div class="actors-block2">
                        <?php foreach ($actors as $actor): ?>
                            <p><?PHP echo $actor['first_name'].' '.$actor['second_name']?></p>
                        <?php endforeach; ?>
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

                    <div class="information-ticket">
                        <div><h1>Cena Biletu <?= $spectacle[0]['cost']?>zł</h1></div>
                    </div>

                    <div class="city-list">
                        <table id="data-table">
                            <tr>
                                <td class="colored">Nazwa teatru</td> <td class="colored">Miasto</td> <td class="colored">Ilość wolnych miejsc</td><td class="colored">Wybierz miejsce</td>
                            </tr>
                            <?php foreach ($theatres as $theatre): ?>
                                <tr>
                                    <td><?= $theatre['name'] ?></td> <td><?= $theatre['city'] ?></td>
                                    <td><?= $theatre['free_seats'] ?> miejsc</td>
                                    <td>
                                        <form method="get" action="booking" typeof="">
                                            <button class="button-buy">KUP BILET</button>
                                            <input type="hidden" name="Tid" value="<?=  $theatre['id_theatre'] ?>"/>
                                            <input type="hidden" name="Sid" value="<?=  $spectacle[0]['id_spectacle'] ?>"/>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>