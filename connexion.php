<?php
define("DB_SERVER","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","billet");
$con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$con){
    echo "Vous n'êtes pas connecté à la base de donnée";
 }
?>

