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
            <p>El mercado es el lugar donde se encuentran los oferentes y demandantes de productos y servicios de todo tipo. Desde alimentos como el pan, la naranja, el café o el trigo, pasando por materias primas como el petróleo, energía eléctrica, madera o el oro hasta productos de financiamiento como los créditos, bonos, acciones y en mercados más desarrollados, productos de cobertura como lo son los derivados de índices, opciones, swaps entre otros y hasta información o servicios de información.</p>
            <p>En conclusión, el mercado es el lugar (intangible) que permite a oferentes y demandantes tranzar toda clase de productos y servicios que se presten para ello, en el cual usualmente como elemento de intercambio de valor, se utiliza el dinero por sus amplias características de cambio.</p>
            <p>Es importante resaltar que cuando se habla de mercado en este contexto, se hace referencia al mercado en general, no específicamente a un supermercado, plaza de mercado, mercado de valores u otros. Ya que los mencionados, hacen parte del mercado y corresponde a ellos una clasificación dentro del mercado en general.</p>
            <p>Para fines de este curso, nos referiremos únicamente al mercado financiero, donde se tranzan títulos valores que permiten acceder a diferentes clases de derechos según sea la naturaleza del contrato tranzado.</p>
            <hr />
            <h5>&nbspTipos de Mercado</h5>
            <p>El mercado financiero, es susceptible a ser clasificado de diferentes maneras; ya sea haciéndolo por los activos tranzados, por el originador del producto o por la plaza en la que es tranzado. A continuación</p>
            <ul>
              <li>Clasificación Por Activos</li>
              <ul>
                <li>Mercado Monetario</li>
                <p>Este hace referencia al mercado donde se negocian depósitos bancarios, letras del tesoro o deuda corporativa de alta liquidez y usualmente de bajo riesgo en términos que suelen darse para corto plazo, lo cual fomenta su liquidez. Los principales participantes en este mercado son grandes instituciones financieras y departamentos de finanzas de diferentes países.</p>
                <p>Las negociaciones suelen hacerse directamente entre las partes o a través de intermediarios especializados.</p>
                <li>Mercado de Capitales</li>
                <p>Es el mercado en el que se encuentran por primera vez los demandantes de capital, con los oferentes de capital para la negociación de contratos que son emitidos en este mercado a diferentes plazos, aunque usualmente son a mediano y largo plazo.</p>
                <p>Los principales participantes son las empresas como emisoras de deuda y las personas, fondos de inversión u otros como oferentes de liquidez. En ocasiones, existen intermediarios como entidades bancarias u otros, que permiten a los ahorradores acceder al mercado de capitales. </p>
                <li>Mercado de Valores</li>
              </ul>
              <li>Clasificación Por Originador</li>
              <li>Clasificación Por Plaza</li>
            </ul>
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