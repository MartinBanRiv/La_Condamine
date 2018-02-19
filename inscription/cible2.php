<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

if (isset($_POST['abonne']))
{
	$abonne=1;
}
else
{
	$abonne=2;
}


$liste_pseudo = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
$liste_pseudo->execute(array($_POST['pseudo']));
$liste_email = $bdd->prepare('SELECT email FROM membres WHERE email = ?');
$liste_email->execute(array($_POST['email']));


if ($liste_pseudo->fetch())
{
	header('location:index2.php?erreur=pseudo');
	
}

elseif ($liste_email->fetch())
{
	header('location:index2.php?erreur=email');
}

elseif ($_POST['pass']!==$_POST['pass2'])
{
	header('location:index2.php?erreur=pass');
}

else
{
	$req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription,id_groupe, nom, prenom) VALUES(:pseudo, :pass, :email, CURDATE(),:abonne,:nom,:prenom)');

	$req->execute(array(
    	'pseudo' => $_POST['pseudo'],
    	'pass' => $pass_hache,
    	'email' => $_POST['email'],
    	'abonne' => $abonne,
   		'nom' => $_POST['nom'],
   		'prenom' => $_POST['prenom']
		));


echo 'Vous êtes bien inscrit !';

}

?>


