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
<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link rel="icon" href="../img/logo.jpg">
    
    <!--<link rel="stylesheet" href="../css/foundation.css">-->
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--CSS-->    
    <link rel="stylesheet" href="media/css/bootstrap.css">
    <link rel="stylesheet" href="media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="media/font-awesome/css/font-awesome.css">
    <!--Javascript-->    
    <script src="media/js/jquery-1.10.2.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <script src="media/js/dataTables.bootstrap.min.js"></script>          
    <script src="media/js/bootstrap.js"></script>
    <script src="media/js/lenguajeusuario.js"></script>     
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>   
</head>

<body>

    
        <nav class="top-bar topbar-responsive">
            <div class="top-bar-title">
                <a class="topbar-responsive-logo" href="cp.php"><strong>PANEL DE CONTROL</strong></a>
            </div>
            <div id="topbar-responsive" class="topbar-responsive-links">
                <div class="top-bar-right">
                    <ul class="menu simple vertical medium-horizontal">
                        <li><a style="float: right;" href="../logic/logout.php">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>



   <table id="example" class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de Nacimiento</th>               
            <th>País</th>
            <th>Ciudad</th>
            <th>Referente</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Estado</th>
            <th>Tipo</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de Nacimiento</th>               
            <th>País</th>
            <th>Ciudad</th>
            <th>Referente</th>
            <th>E-mail</th>
            <th>Password</th>
            <th>Estado</th>
            <th>Tipo</th>
        </tr>
        </tfoot>
    </table>        

</body>
</html>
