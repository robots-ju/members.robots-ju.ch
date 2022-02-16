<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Profil</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Bienvenue : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Se déconnecter</a></b>
</div>
</body>
</html>