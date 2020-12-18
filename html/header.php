<?php

session_start();

if(isset($_POST["lang"])){
  $_SESSION["lang"]=$_POST["lang"];
}

if ($_SESSION["lang"] == "ing") {
  include_once "./assets/lang/ing.php";
} elseif ($_SESSION["lang"] == "rus") {
  include_once "./assets/lang/rus.php";
} elseif ($_SESSION["lang"] == "rum") {
  include_once "./assets/lang/rum.php";
} elseif ($_SESSION["lang"] == "ger") {
  include_once "./assets/lang/ger.php";
} else {
  include_once "./assets/lang/esp.php";
}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Vera Urrestarazu</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css" />

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

  </head>

  <body>
    <header class="hero">
      <nav class="nav_hero">
        <div class="containes nav_container">
          <div class="logo">
            <img class="logo_img" src="./assets/img/logo.png" alt="Vera Urrestarazu">
            <h2 class="logo_name">Vera Urrestarazu<span class="point">.</span></h2>
          </div>
          <div class="links">
            <a href="index.php" class="link link--active"><?php echo $home; ?></a>
            <a href="contact.php" class="link"><?php echo $contact; ?></a>
            <form class="lang link" name="langform" action="index.php" method="post">
              <select name="lang" onchange="langform.submit()">
                <option value='lang' selected disabled><?php echo $lang; ?></option>
                <option value='esp'>Español</option>
                <option value='ing'>English</option>
                <option value='rus'>Russian</option>
                <option value='rum'>Rumano</option>
                <option value='ger'>Aleman</option>
              </select>
            </form>
          </div>
        </div>
      </nav>
