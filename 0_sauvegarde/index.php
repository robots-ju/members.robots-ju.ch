<?php
    include('login.php'); // Includes Login Script
    if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <link rel="shortcut icon" href="medias/favicon.png"/>
        <title>Login robots-ju.ch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/uikit-rtl.css"/>
        <link rel="stylesheet" href="css/uikit-rtl.min.css"/>
        <link rel="stylesheet" href="css/uikit.css"/>
        <link rel="stylesheet" href="css/uikit.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
 
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script src="js/uikit.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>

    <body style="padding-left: 5%; padding-right: 5%">
        <header>
            <div class="container">    
                <h1>Intranet Robots-JU</h1>
                <p>Bienvenue sur la plateforme Membres de Robots-JU !</p>
		    </div>
        </header>

        <main>
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-body">                        
                        <img data-src="medias/login/ImageFLL2019.jpg" uk-img>
                    </div>
                </div>

                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-body">
                        <h1>Se connecter</h1>
                        <hr>
                        <p><a href="accueil.php">Accéder au site</a></p>
                        <div id="login">
                            <form action="" method="post">
                                <label>Nom d'utilisateur :</label>
                                <input id="name" name="username" placeholder="username" type="text"><br><br>

                                <label>Mot de passe :</label>
                                <input id="password" name="password" placeholder="**********" type="password"><br><br>
                                <input name="submit" type="submit" value=" Login ">
                                <span><?php echo $error; ?></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>