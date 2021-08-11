<?php
require_once('User.php');
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$user = new User();
$user->validar($email, $password);



?>