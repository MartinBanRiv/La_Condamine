<?php
session_start(); 
?>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$liste_pseudo = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
$liste_pseudo->execute(array($_POST['pseudo']));
$liste_email = $bdd->prepare('SELECT email FROM membres WHERE email = ?');
$liste_email->execute(array($_POST['email']));


if (isset($_POST['abonne']))
{
	$abonne="en_attente";
}
else
{
	$abonne="non_abonne";
}

if ($_POST['pseudo']!==$_SESSION['pseudo'] AND $liste_pseudo->fetch())
{
	//header('location:michel.php?erreur=pseudo');
	echo 'Pseudo déjà utilisé';
}

elseif ($_POST['email']!==$_SESSION['email'] AND $liste_email->fetch())
{
	//header('location:michel.php?erreur=email');
	echo 'Email déjà utilisé';
}

else
{
	$req = $bdd->prepare('UPDATE membres SET pseudo = :nvpseudo,  email = :nvemail,id_groupe = :nvidgr, nom = :nvnom, prenom = :nvprenom  WHERE id = :id');

	$req->execute(array(
		'nvemail' => $_POST['email'],
		'nvpseudo' => $_POST['pseudo'],
		'nvnom' => $_POST['nom'],
		'nvprenom' => $_POST['prenom'],
		'nvidgr' => $abonne,
		'id' => $_SESSION['id']
		));

	$_SESSION['email'] = $_POST['email'];
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['pseudo'] = $_POST['pseudo'];
	$_SESSION['id_groupe'] = $abonne;


	echo 'Vos informations ont bien été modifiées !';	
}


?>