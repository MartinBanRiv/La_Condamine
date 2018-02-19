<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="img/favicon.png">
	<title>Mon compte</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/signin.css">
</head>
<body>

<?php
include 'remember.php';
include 'redirection_nonco.php';

echo 'Qui suis-je? <br/>' .$_SESSION['id'] . '<br />' .$_SESSION['email']. '<br />' .$_SESSION['nom']. '<br />' .$_SESSION['prenom']. '<br />' .$_SESSION['pseudo']. '<br />' .$_SESSION['pass']. '<br />' .$_SESSION['id_groupe']. '<br />' .$_SESSION['date_inscription']. '<br />' .$_SESSION['id_groupe']. '<br />';
?>

<a href="disconnect.php">Se déconnecter</a>


</body>
</html>