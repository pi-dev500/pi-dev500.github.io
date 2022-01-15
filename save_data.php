
<?php

header('Content-type: application/json');

include 'conx.php';

 

// Retrieve querystring

$udidiboite = $_POST["udidiboite"];

$udidiboite = stripslashes($udidiboite);

$udidiboite = $db->real_escape_string($udidiboite);

 

$codearticleuddi = $_POST["codearticleuddi"];

$codearticleuddi = stripslashes($codearticleuddi);

$codearticleuddi = $db->real_escape_string($codearticleuddi);

 

// Prevent SQL injection

$udidiboite = stripslashes($udidiboite);

$codearticleuddi = stripslashes($codearticleuddi);

 

// Create new game

$sql = "INSERT INTO ZMM_UDI_DI(udidiboite,codearticleuddi) ";

$sql = $sql."values ('".$udidiboite."','".$codearticleuddi."');";

if(!$result = $db->query($sql)) die('There was an error running the query [' . $db->error . ']');
$result = $result . ']';
echo $result;

// on ferme la connexion à mysql

$db->close();

?>
