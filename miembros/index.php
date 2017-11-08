<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CABS Capital | Cursos</title>
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
        </span>
        <a class="topbar-responsive-logo" href="../index.php"><strong>CABS CAPITAL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          <ul class="menu simple vertical medium-horizontal">
            <li><a href="../faqs.php">Preguntas Frecuentes</a></li>
            <li>
              <a href="../contacto.php"><button type="button" class="button hollow topbar-responsive-button">Contacto</button></a>
            </li>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="index.php">Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br />
    <br />

    <div class="row">
      <div class="column">
        <form class="callout text-center" action="../logic/checklogin.php" method="POST">
          <h2>Iniciar Sesión</h2>
          <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" name="username"  placeholder="Email" required="true">
          </div>
          <div class="floated-label-wrapper">
            <label for="pass">Password</label>
            <input type="password" name="password"  placeholder="Password" required="true">
          </div>
          
            <input type="submit" class="button expanded" editable="false" value="Entrar">
           
        </form>
      </div>
    </div>

    <br />
    <br />

    <footer>
      <div class="wrap row small-up-1 medium-up-3">
        <div class="column"></div>
        <div class="column">
          <p align="center"><small>© 2017 – CABS CAPITAL Inc.<br />Todos los derechos reservados.<br />No brindamos consejo ni asesoría de inversión.</small></p>
        </div>
        <div class="column"></div>
      </div>
    </footer>
    
    <script src="https://www.cabscapital.com/js/vendor/jquery.js"></script>
    <script src="https://www.cabscapital.com/js/vendor/what-input.js"></script>
    <script src="https://www.cabscapital.com/js/vendor/foundation.js"></script>
    <script src="https://www.cabscapital.com/js/app.js"></script>
  </body>
</html>