<?php
session_start();

include("../logic/user_functions.php");


if (isset($_POST['Activar'])) {

    $parm1 = $_POST["email"];
    $service = new User();

    if($service->updateActivate($parm1)){
      ?>
        <script type='text/javascript'>
          alert('Cuenta activada correctamente.');
          window.location.href='../miembros/cp.php' 
          </script>
      <?php
    }else{
      ?>
        <script type='text/javascript'>
          alert('El usuario no existe.');
          window.location.href='../miembros/cp.php' </script>;
      <?php
    }
}

if (isset($_POST['Desactivar'])) {
         $parm1 = $_POST["email"];
          $service = new User();

        if($service->updateDeactivate($parm1)){
          ?>
            <script type='text/javascript'>
              alert('Cuenta desactivada correctamente.');
              window.location.href='../miembros/cp.php' 
              </script>
          <?php
        }else{
          ?>
            <script type='text/javascript'>
              alert('El usuario no existe.');
              window.location.href='../miembros/cp.php' </script>;
          <?php
        }
}

  if (isset($_POST['editar'])) {

              $parm1 = $_POST["email"];
              $parm2 = $_POST["password"];   
              $service = new User();

              if($service->updatePassword($parm1,$parm2)){
              ?>
                  <script type='text/javascript'>
                      alert('Contraseña actualizada correctamente.');
                      window.location.href='../miembros/cp.php' 
                  </script>
              <?php
              }else{
              ?>
                  <script type='text/javascript'>
                    alert('El usuario no existe.');
                    window.location.href='../miembros/cp.php' </script>;
              <?php
              }        
  } 

?>