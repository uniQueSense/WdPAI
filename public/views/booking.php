<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/menu-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/booking-style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/background-style.css">

    <script type="text/javascript" src="/public/js/booking-script.js" defer></script>
    <script src="https://kit.fontawesome.com/7186f6c2cc.js" crossorigin="anonymous"></script>

    <title>Rezerwacja Miejsc</title>
</head>


<body>

    <div class="container">
        <?PHP include 'menu_component.php' ?>

        <div class="container-content">

            <div class="title">
                <h1>Rezerwacja miejsc na spektakl</h1>
            </div>

            <div class="blocks">
                <div class="legend">
                    <h1>Legenda</h1>
                    <div class="chair active"><i class="fas fa-chair"></i><p>Zaznaczone przez Ciebie</p></div>
                    <div class="chair occupant"><i class="fas fa-chair"></i><p>Zajęte</p></div>
                    <div class="chair free"><i class="fas fa-chair"></i><p>Wolne</p></div>
                </div>

                <div class="theatre-room">

                    <div class="scene">
                        <h1>SCENA</h1>
                    </div>

                    <div class="booking-places">

                        <?PHP foreach ($seats as $row): ?>
                            <div class="row-armchair">
                                <?PHP foreach ($row as $seat): ?>

                                    <?PHP if($seat !== null): ?>
                                        <div class="armchair" style="color: rgb(135, 206, 250)"><i id="<?= $seat['row']?>/<?=$seat['column'] ?>" class="fas fa-chair" ></i></div>
                                    <?PHP else: ?>
                                        <div class="armchair" style="color: rgb(255, 123, 0)"><i class="fas fa-chair occupant"></i></div>
                                    <?PHP endif;?>
                                <?PHP endforeach;?>
                            </div>
                        <?PHP endforeach;?>


                        <!--<div class="row-armchair">
                            <div class="armchair"><i id="1/1" class="fas fa-chair"></i></div>

                            <div class="armchair"><i id="1/2" class="fas fa-chair"></i></div>

                            <div class="armchair"><i id="1/3" class="fas fa-chair"></i></div>
                        </div>
                        <div class="row-armchair">

                                <div class="armchair"><i id="2/1" class="fas fa-chair"></i></div>

                                <div class="armchair"><i id="2/2" class="fas fa-chair"></i></div>

                                <div class="armchair"><i id="2/3" class="fas fa-chair"></i></div>

                        </div>
                        <div class="row-armchair">

                                <div class="armchair"><i id="3/1" class="fas fa-chair"></i></div>

                                <div class="armchair"><i id="3/2" class="fas fa-chair"></i></div>

                                <div class="armchair"><i id="3/3" class="fas fa-chair"></i></div>

                        </div>-->
                    </div>
                </div>

                <div class="confirm">
                    <form method="post" action="bookSeat">
                        <p>Wprowadź swoje hasło</p>
                        <input name="passwd" placeholder="password" type="password"/>
                        <p>Powtórz hasło</p>
                        <input name="conf-passwd" placeholder="confirm password" type="password"/>
                        <input name="Tid" type="hidden" value="<?= $id['Tid'] ?>"/>
                        <input name="Sid" type="hidden" value="<?= $id['Sid'] ?>"/>
                        <input id="row" type="hidden" name="seat_row" value="">
                        <input id="column" type="hidden" name="seat_col" value="">
                        <button class="button5" type="submit">Zatwierdź</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

<template id="payment-div">
    <div>

    </div>
</template>

<template id="seats-div">
    <div class="booking-places">
        <div class="row-armchair">
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>
        </div>
        <div class="row_armchair">
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>
        </div>
        <div class="row_armchair">
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>
            <div class="armchair"><i class="fas fa-chair"></i></div>

        </div>

    </div>

    <div class="legenda">
        <h1>Legenda</h1>
        <i class="fas fa-chair"><p>empty</p></i>
        <i class="fas fa-chair"><p>full</p></i>
        <i class="fas fa-chair"><p>active</p></i>
    </div>

    </div>
</template>