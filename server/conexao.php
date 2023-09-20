<?php

include("_Database.php");
include("_Usuario.php");

$db = new Database("requests.mysql.uhserver.com", "unit_user", "unit@12", "usuarios");
$usuario = new Usuario($db);



?>