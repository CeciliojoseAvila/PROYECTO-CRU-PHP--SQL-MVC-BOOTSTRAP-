<?php

require_once("c://xampp/htdocs/PROYECTO/Controller/usernameController.php");
$obj = new usernameController();
$obj-> update($_POST['id'], $_POST['nombre']);

?>