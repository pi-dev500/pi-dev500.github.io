<?php

$host="localhost";  // TON Host name
                                
$dbusername="root@localhost";    // TON Mysql username

$password="";                                     // TON Mysql password

$db_name="Eudamed";         // TA    Database name

 

// Connect to server and select databse.

$db = new mysqli("$host", "$dbusername", "$password", "$db_name");

 

if (!$db->set_charset('utf8')) {

    printf("Error loading character set utf8: %s\n", $mysqli->error);

    exit;

}

 

if($db->connect_errno > 0){

    die('Unable to connect to database [' . $db->connect_error . ']');

}

?>
