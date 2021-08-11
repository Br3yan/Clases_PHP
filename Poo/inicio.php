<?php
session_start();

if (!$_SESSION) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
</head>
<body>
  <h1>
  Sesión iniciada.  
  </h1>
<div class="animated_rainbow_3"><?php  echo $_SESSION['name']; ?></div>

<style>
.animated_rainbow_3 {
    color: #F00;
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    font-size: 42px;
    font-family: Arial Black, Gadget, sans-serif;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: #FF0000;
    -webkit-animation: animatedBackground_c 2s infinite alternate;
}

@keyframes animatedBackground_c {
    0% {-webkit-text-stroke-color: #ff8b00}
    10% {-webkit-text-stroke-color: #e8ff00}
    20% {-webkit-text-stroke-color: #5dff00}
    30% {-webkit-text-stroke-color: #00ff2e}
    40% {-webkit-text-stroke-color: #00ffb9}
    50% {-webkit-text-stroke-color: #00b9ff}
    60% {-webkit-text-stroke-color: #002eff}
    70% {-webkit-text-stroke-color: #5d00ff}
    80% {-webkit-text-stroke-color: #e800ff}
    90% {-webkit-text-stroke-color: #ff008b}
    100% {-webkit-text-stroke-color: #ff0000}
}

</style> 

  <p></p>
  <form action="logout.php" method="post">
    <button type="submit">Cerrar sesión</button>
  </form>
</body>
</html>