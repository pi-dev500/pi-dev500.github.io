<?php

 

// Database connection

include 'conx.php';

 

// Retrieve querystring

// Prevent SQL injection

//$udidiboite = $_POST["udidiboite"];

//$udidiboite = stripslashes($udidiboite);

//$udidiboite = $db->real_escape_string($udidiboite);

//$udidiboite = stripslashes($udidiboite);

 

//$codearticleuddi = $_POST["codearticleuddi"];

//$codearticleuddi = stripslashes($codearticleuddi);

//$codearticleuddi = $db->real_escape_string($codearticleuddi);

//$codearticleuddi = stripslashes($codearticleuddi);

 

// Array of objects start

$data = '{';

                              

// Array of object (areas) begin

//$data = $data . '"logs": [';

 

$data = '[';

 

$sql='SELECT * FROM ZMM_UDI_DI';

if(!$result = $db->query($sql)) die('There was an error running the query [' . $db->error . ']');

               

$rec = 1;

while($record = $result->fetch_assoc()) {

                              

                               if ($rec > 1) {

                                               $data = $data . ',';

                               }                                             

                               $data = $data . '{"udidiboite":"' . $record['udidiboite'] . '",';

                               $data = $data . '"codearticleuddi":"' . $record['codearticleuddi'] . '"}';

                               $rec = $rec + 1;

                              

}

               

// Array of last object end

$data = $data . ']';

               

// Array of objects end

//$data = $data . '}';

                               

echo $data;

?>
