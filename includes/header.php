<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include './variables.php'; ?>
        <link rel="shortcut icon" href="<?php echo $FaviconRobotsJU ?>"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo $CSSlogin ?>">
        <link rel="stylesheet" href="<?php echo $CSSuikitrtl ?>"/>
        <link rel="stylesheet" href="<?php echo $CSSuikitrtlmin ?>"/>
        <link rel="stylesheet" href="<?php echo $CSSuikit ?>"/>
        <link rel="stylesheet" href="<?php echo $CSSuikitmin ?>"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
        <script src="<?php echo $JSuikiticons ?>"></script>
        <script src="<?php echo $JSuikiticonsmin ?>"></script>
        <script src="<?php echo $JSuikit ?>"></script>
        <script src="<?php echo $JSuikitmin ?>"></script>
    </head>

    <body>
        <header>
            <nav class="uk-navbar-container" style="background-color: white" uk-navbar>
                <div class="uk-navbar">
                    <ul class="uk-navbar-nav">
                        <li class="uk-width-large@m" style="background-color: #478a23"><h3 style="padding-top: 4.5%; padding-right: 2%"><a class="uk-align-right uk-link-heading" href="<?php echo $PHPaccueil ?>" style="color: white">ROBOTS-JU</h3></a></li>
                        <li>
                            <a href="#" style="color: black">Ateliers FLL</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="https://docs.google.com/spreadsheets/d/1ApRLGGmWo1kzBd34gfZn4cavAzHtd6T2VD7IUPL3j_I/edit?usp=sharing" target="blank">Liste des présences du samedi matin</a></li>
                                    <li><a href="https://docs.google.com/spreadsheets/d/1D3XyIRs-7BKvyzYqP71z6HeADRM6puv3ltNE1_3H67c/edit?usp=sharing" target="blank">Liste des présences du samedi après-midi</a></li>
                                    <li><a href="<?php echo $PHPmembresAteliersFLL ?>">Liste des membres</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#" style="color: black">Ateliers Avancés</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="https://docs.google.com/spreadsheets/d/1A9YqmD6e2x_WhRRWOhWrdeKE-JPd5I57FQKM8hmEK6M/edit?usp=sharing" target="blank">Liste des présences</a></li>
                                    <li><a href="<?php echo $PHPmembresAteliersAvances ?>">Liste des membres</a></li>
                                </ul>
                            </div>
                        </li>

                        <!--<li><a href="#" style="color: black">Ateliers St-Ursule</a></li>

                        <li><a href="#" style="color: black">Comité Robots-JU</a></li>-->

                        <li><a href="<?php echo $PHPphotos ?>" style="color: black">Photos</a></li>
                    </ul>
                </div>

                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav" style="background-color: #F2F2F2;">
                        <li><a class="uk-align-right" href="https://robots-ju.ch/" style="color: black">Site public</a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </body>
</html>
