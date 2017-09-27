<?php
session_start();

  $now = time();
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
  }else{
    ?>
      <script type="text/javascript">
        alert("Acceso denegado, debe iniciar sesión");
        window.location.href='../index.php'; 
      </script> 
    <?php
  }

  if($now > $_SESSION['expire']) {
    session_destroy();
    ?>
    <script type='text/javascript'>
      alert('Su sesión ha caducado');
      window.location.href='../index.php'; 
    </script>             
    <?php
    exit;
  } 
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CABS Capital | Cursos</title>
    <link rel="stylesheet" href="../../../css/foundation.css">
    <link rel="stylesheet" href="../../../css/app.css">
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
            <li><a href="../../../logic/logout.php">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <br />
    <br />

    <div class="row">
      <div class="column">
        <div class="people-you-might-know">
          <div class="add-people-header">
            <h4 class="header-title">
              Introducción al Mercado Financiero
            </h4>
          </div>
          <div>
            <br />
            <h5>&nbsp¿Qué es el Mercado?</h5>
            <p>cvgg</p>
            <hr />
            <h5>&nbspTipos de Mercado</h5>
            <p></p>
            <hr />
            <h5>&nbspAgentes del Mercado</h5>
            <p></p>
            <hr />
            <h5>&nbspTipos de Activos Financieros</h5>
            <p></p>
            <hr />
            <h5>&nbspMercado No Regulado</h5>
            <p></p>
            <hr />
            <h5>&nbspDiferencia entre Day trading, Trading e Inversión</h5>
            <p></p>
            <br />
          </div>
        </div>  
      </div>
    </div>

    <br />

    <footer>
      <div class="wrap row small-up-1 medium-up-3">
        <div class="column"></div>
        <div class="column">
          <p align="center"><small>© 2017 – CABS CAPITAL S.A.S.<br />Todos los derechos reservados.<br />No brindamos consejo ni asesoría de inversión.</small></p>
        </div>
        <div class="column"></div>
      </div>
    </footer>
    
    <script src="../../../js/vendor/jquery.js"></script>
    <script src="../../../js/vendor/what-input.js"></script>
    <script src="../../../js/vendor/foundation.js"></script>
    <script src="../../../js/app.js"></script>
  </body>
</html>