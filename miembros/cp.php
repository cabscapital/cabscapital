<?php
session_start();

  $now = time();
  if (isset($_SESSION['loggedin']) && $_SESSION['Admin'] == true) {
    
  }else{
    ?>
      <script type="text/javascript">
        alert("Acceso denegado, debe iniciar sesión");
        window.location.href='index.php'; 
      </script> 
    <?php
  }

  if($now > $_SESSION['expire']) {
    session_destroy();
    ?>
    <script type='text/javascript'>
      alert('Su sesión ha caducado');
      window.location.href='index.php'; 
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
    <title>Control Panel</title>
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>   
  
    
    <nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <a class="topbar-responsive-logo" href="#"><strong>PANEL DE CONTROL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          <ul class="menu simple vertical medium-horizontal">
         	<li><a href="cpdt.php">Listar Usuarios</a></li>
            <li><a href="../logic/logout.php">Cerrar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="fila">

      <div class="columna" id="alignleft">
        <form class="complet" action="../logic/activate.php" method="post"  >
        <h4>Editar usuario</h4>
      <div class="form-icons">       
        <div class="labeled">      
          <label >E-mail</label>  
          <input class="input-group-field" type="email" placeholder="E-mail" required="true" name="email">
        </div>
        <div class="labeled">  
           <label >Password</label>   
          <input class="input-group-field" type="Password" placeholder="Password" required="true" name="password">
        </div>
      </div>
      <br>
      <button class="button expanded" type="submit" name="editar" editable="false">Cambiar</button>
    </form>
      </div>


       <div class="columna" id="alignright">
        <form class="complet" method="post" action="../logic/activate.php">
          <h4>Activar usuario</h4>
            <div class="labeled">      
              <label >Correo</label>  
              <input class="input-group-field" type="email" name="email" placeholder="Correo" required="true">
            </div>
            <br>
            <input class="button expanded" type="submit" name="Activar" editable="false" value="Activar">
            <input class="button expanded" type="submit" name="Desactivar" editable="false" value="Desactivar">
          </a> 
        </form>
      </div>
    </div>

    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>