<?php
require_once('Connect.php');
session_start();
class User {

  protected $connect;
  private $id;
  public $email;
  protected $password;

  public function validar($email, $password){
    $cont = new Connect();
    $connect = $cont->init();

    $query = $connect->prepare("SELECT * FROM usuario
    WHERE email = :email AND password = :password");
    $query->bindParam(":email",$email);
    $query->bindParam(":password",$password);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);
    print_r($user);

    if($user){
      $_SESSION['email'] = $user['EMAIL'];
      $_SESSION['name'] = $user['NAME'];
      header("location: inicio.php");  

    }else{
      $error = "El email o password es incorrecto";
      header("location: login.php?msg=$error");
    }

  }
}

?>