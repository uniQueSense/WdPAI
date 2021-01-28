<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/menu-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/glide-slide-main-page-style.css">

    <script src="/public/js/glidescript.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Strona główna</title>

</head>

<body>


    <div class="container">
        <?PHP include 'menu_component.php'?>

        <div class="main">
            <div class="headline"><h1>Repertuary</h1></div>

            <div class="col-8">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">

                            <?php foreach ($spectacle as $project):
                                $image = json_decode($project->getImage(), true);
                                $image = $image[0]['route'];
                            ?>
                                <li class="glide__slide play">
                                    <img src="<?= $image; ?>" alt="">
                                    <div class="rectangle">
                                        <h1><?= $project->getTitle(); ?></h1>
                                        <a class="link" href="/chosenSpectacle?id=<?= $project->getId(); ?>">Pokaż więcej!</a>
                                    </div>

                                    <div class="rotate">
                                        <img src="<?= $image; ?>" alt="">
                                        <div class="rectangle">
                                            <h1><?= $project->getTitle(); ?></h1>
                                            <a class="link non-active" href="">Pokaż więcej!</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <i class="fa fa-angle-left"></i>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

