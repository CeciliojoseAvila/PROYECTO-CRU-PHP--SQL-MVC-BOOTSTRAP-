<?php
require_once("c://xampp/htdocs/PROYECTO/Controller/usernameController.php");
$obj = new usernameController();
$obj ->delete($_GET['id']);

?>