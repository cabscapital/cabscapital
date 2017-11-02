<?php
session_start();
include("logic/funcionesCorreo.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $parm1 = $_POST["name"];
  $parm2 = $_POST["email"];
  $parm3 = $_POST["message"];
  
  $correo = new NewEmail();
  $correo->setNewEmail($parm1,$parm2,$parm3);

  $serv = new NewEmailService();
      
  if($serv->sendMail($correo)){
    ?>
      <script type='text/javascript'>
        alert('Mensaje enviado con éxito.');            
      </script>
    <?php
  }else{
    ?>
      <script type='text/javascript'>
        alert('Lo sentimos, un error inesperado ocurió.');        
      </script>
    <?php
  }    
}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CABS Capital | Contacto</title>
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
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
            <li><a href="faqs.php">Preguntas Frecuentes</a></li>
            <li>
              <a href="contacto.php"><button type="button" class="button hollow topbar-responsive-button">Contacto</button></a>
            </li>
            <li><a href="miembros/register.php">Registrarse</a></li>
            <li><a href="miembros/index.php">Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br />
    <br />
    
    <div class="row">
      <div class="column" align="center">
        <h3>Contacta a CABS CAPITAL</h3>
        <p>Escribenos si tienes alguna pregunta. No hay por que dudarlo,<strong> te responderemos.</strong></p>        
        <br />
        <p>
          <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
          <a href="mailto:main@cabscapital.com">main@cabscapital.com</a>
        </p>
        <p><strong>Sí prefieres, dejanos tu mensaje ahora</strong></p>
      </div>
    </div>



    <div class="row">
      <div class="column">
        <form class="contact-us-form" action="contacto.php" method="post">
          
          <div class="floated-label-wrapper">
            <label for="text">Nombre</label>
            <input type="text" id="nombre" name="name" placeholder="Nombre" required="true">
          </div>
          <div class="floated-label-wrapper">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email para responderte" required="true">
          </div>
         <div class="floated-label-wrapper">
            <label for="text">Mensaje</label>
            <textarea id="textarea" name="message" placeholder="Cuentanos tus dudas" required="true"></textarea> 
          </div>
            <a href="cursos/index.php">
            <input type="submit" class="button expanded" value="Enviar">
          </a> 
        </form>
      </div>
    </div>

    
    <br />
    <br />
    <br />
    <br />
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
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>