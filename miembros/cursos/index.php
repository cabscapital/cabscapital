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
    <link rel="icon" href="https://www.cabscapital.com/img/logo.jpg">
    <link rel="stylesheet" href="https://www.cabscapital.com/css/foundation.css">
    <link rel="stylesheet" href="https://www.cabscapital.com/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
        </span>
        <a class="topbar-responsive-logo" href="index.php"><strong>CABS CAPITAL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          <ul class="menu simple vertical medium-horizontal">
<!--        <li><a href="Blog/index.php">Blog</a></li>    -->
            <li><a href="../../logic/logout.php">Cerrar Sesión</a></li>
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
            <h6 class="header-title">
              Trading de Futuros Sobre Índices
            </h6>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="1IntroduccionAlMercadoFinanciero/index.php">
                  Curso de Introducción al Mercado Financiero
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                 Conceptos y bases de la composición del mercado financiero internacional.
                </p>
              </div>    
            </div>
          </div>
          <!--
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="2FundamentosDeTrading/index.php">
                  Curso de Fundamentos del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de trading, tipos de gráficos, tipos de órdenes y estructura de los trades.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="3AnalisisTecnicoBasico/index.php">
                  Curso de Análisis Técnico Básico
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Movimientos básicos del mercado, impulso, patrones de reversa, herramientas básicas.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="4PsicologiaDelTrading/index.php">
                  Curso de Psicología y Plan del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Control de emociones, disciplina, consistencia, transición a real y gestión del riesgo.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="5ConfigurarNTComoPlataforma/index.php">
                  Configuración de NinjaTrader Como Plataforma
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Instalación, configuración inicial, renovación de contratos, y personalización.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="6IntroduccionFuturosIndicesEmini/index.php">
                  Curso Introductorio a Futuros & E-minis
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de derivados financieros, futuros, contratos e-minis y normatividad.
                </p>
              </div>    
            </div>
          </div>
        -->
        </div>
        <br>
        <div class="people-you-might-know">
          <div class="add-people-header">
            <h6 class="header-title">
              Inversionista en Criptodivisas
            </h6>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="1IntroduccionAlMercadoFinanciero/index.php">
                  Curso de Introducción a las Criptodivisas
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                 Conceptos y bases de la "Blockchain", Bitcoin y las criptodivisas.
                </p>
              </div>    
            </div>
          </div>
          <!--
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="2FundamentosDeTrading/index.php">
                  Curso de Fundamentos del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de trading, tipos de gráficos, tipos de órdenes y estructura de los trades.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="3AnalisisTecnicoBasico/index.php">
                  Curso de Análisis Técnico Básico
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Movimientos básicos del mercado, impulso, patrones de reversa, herramientas básicas.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="4PsicologiaDelTrading/index.php">
                  Curso de Psicología y Plan del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Control de emociones, disciplina, consistencia, transición a real y gestión del riesgo.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="5ConfigurarNTComoPlataforma/index.php">
                  Configuración de NinjaTrader Como Plataforma
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Instalación, configuración inicial, renovación de contratos, y personalización.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="6IntroduccionFuturosIndicesEmini/index.php">
                  Curso Introductorio a Futuros & E-minis
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de derivados financieros, futuros, contratos e-minis y normatividad.
                </p>
              </div>    
            </div>
          </div>
        -->
        </div>
        <br>
        <div class="people-you-might-know">
          <div class="add-people-header">
            <h6 class="header-title">
              Oportunidades de Inversión en Crowdfunding
            </h6>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="1IntroduccionAlMercadoFinanciero/index.php">
                  Curso de Introducción al Crowdfunding
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                 Conceptos y bases del Crowdfunding ,usos y mercados activos para la inversión colectiva.
                </p>
              </div>    
            </div>
          </div>
          <!--
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="2FundamentosDeTrading/index.php">
                  Curso de Fundamentos del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de trading, tipos de gráficos, tipos de órdenes y estructura de los trades.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="3AnalisisTecnicoBasico/index.php">
                  Curso de Análisis Técnico Básico
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Movimientos básicos del mercado, impulso, patrones de reversa, herramientas básicas.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="4PsicologiaDelTrading/index.php">
                  Curso de Psicología y Plan del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Control de emociones, disciplina, consistencia, transición a real y gestión del riesgo.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="5ConfigurarNTComoPlataforma/index.php">
                  Configuración de NinjaTrader Como Plataforma
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Instalación, configuración inicial, renovación de contratos, y personalización.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="6IntroduccionFuturosIndicesEmini/index.php">
                  Curso Introductorio a Futuros & E-minis
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de derivados financieros, futuros, contratos e-minis y normatividad.
                </p>
              </div>    
            </div>
          </div>
        -->
        </div>
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
    
    <script src="../../js/vendor/jquery.js"></script>
    <script src="../../js/vendor/what-input.js"></script>
    <script src="../../js/vendor/foundation.js"></script>
    <script src="../../js/app.js"></script>
  </body>
</html>