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

$req = $bdd->prepare('INSERT INTO agenda(title, description, date, hour, pseudo) VALUES(:title, :description, :date, :hour,:pseudo)');


$req->execute(array(
	'title' => $_POST['title'],
	'description' => $_POST['description'],
	'date' => $_POST['date'],
	'hour' => $_POST['hour'],
	'pseudo' => $_SESSION['pseudo']
	));

echo 'Evenement bien ajouté';	


?>