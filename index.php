<?php     

require_once("config.php");

$jose = new Usuario();
$jose->loadbyId(2);
echo $jose;
?>