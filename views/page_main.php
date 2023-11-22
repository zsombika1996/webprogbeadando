<!DOCTYPE html>
<!--Az oldal hátterének beállítása.-->
<html lang="hu-hu">

<head>
    <meta charset="utf-8">
    <title>Forgalomkorlátozás</title>
    <link rel="icon" type="image/x-icon" href="./images/icon.png">
    <!--Az oldal megjelenéséhez használt scriptek meghívása.-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT ?>/css/main_style.css">
    <script type="text/javascript" src="<?php echo SITE_ROOT ?>/js/form_validator.js"></script>
    <?php // if ($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="' . $viewData['style'] . '">';
    ?>

</head>

<body>


    <div>
        <!--Reszponzív menüsor létrehozása.-->
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
            <p class="logged-user">
                <?= ($_SESSION['userid'] != 0 && isset($_SESSION['userid'])) ?
                    "Bejelentkezett: " . $_SESSION['userlastname'] . " " . $_SESSION['userfirstname'] . " (" . $_SESSION['userid'] . ")." : "" ?>
                <?= ($_SESSION['userlevel'] == '__1') ? " (adminisztrátor)" : "" ?>
            </p>
        </nav>
        <br><br><br>
        <!--Szekció az oldalak kinézetének megjelenítéséhez..-->
        <div class="tartalom">
            <section>
                <?php if ($viewData['render'])
                    include($viewData['render']); ?>
            </section>
        </div>
        <br>

        <!--Footer megjelenítése.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

            <footer id="lab">
                &copy; Bercze Zsombor, Jenes Norbert
                <?= date("Y") ?>
            </footer>
        </div>
    </div>
</body>