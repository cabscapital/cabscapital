<?php
session_start();
include("../logic/user_functions.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $parm1 = "0";
  $parm2 = $_POST["nombres"];
  $parm3 = $_POST["apellidos"];
  $parm4 = $_POST["fecha"];
  $parm5 = $_POST["pais"];   
  $parm6 = $_POST["ciudad"];
  $parm7= $_POST["referente"];
  $parm8 = $_POST["email"];
  $parm9 = $_POST["password"]; 
  $parm10 = "Inactivo";
  $parm11 = "U";

  $newUser = new UserCabsCapital();
  $newUser->setUser($parm1,$parm2,$parm3,$parm4,$parm5,$parm6,$parm7,$parm8,$parm9,$parm10,$parm11);

  $service = new User();
  if($service->insert($newUser)){
    ?>
      <script type='text/javascript'>
        alert('Su cuenta ha sido creada correctamente.');
        window.location.href='index.php' 
        </script>
    <?php
  }else{
    ?>
      <script type='text/javascript'>
        alert('Ups ! Lo sentimos, un error inesperado ocurrió');
        window.location.href='register.php' </script>;
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
    <title>CABS Capital | Registro</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/min.foundation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <a class="topbar-responsive-logo" href="index.php"><strong>CABS CAPITAL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          <ul class="menu simple vertical medium-horizontal">
            <li><a href="../entrenamiento.php">Entrenamiento</a></li>
            <li><a href="../faqs.php">Preguntas Frecuentes</a></li>
            <li>
              <a href="../contacto.php"><button type="button" class="button hollow topbar-responsive-button">Contacto</button></a>
            </li>
            <li><a href="index.php">Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br />
    <br />
    
    <div class="row">
      <div class="column" align="center">
        <h3>Regístrate | Sign Up</h3>
      </div>
    </div>

 <div class="row">
  <div class="column" align="center">

    <form class="callout" action="register.php" method="post"  >
      <div class="form-icons">

        <div class="labeled">  

          <label >Nombres *</label>          
          <input class="input-group-field" type="text" placeholder="Nombres" name="nombres" required="true">
        </div>

        <div class="labeled">  

          <label >Apellidos *</label>          
          <input class="input-group-field" type="text" placeholder="Apellidos" name="apellidos" required="true">
        </div>

        <div class="labeled">  
          <label>Fecha de Nacimiento *</label>
          <input class="input-group-field" type="date" placeholder="Fecha de Nacimiento" name="fecha" required="true">
        </div>

        <div class="labeled">  
          <label>País *</label>
          <select required="true" name="pais">
            <option value=" Afganistán  ">  Afganistán  </option> 
                  <option></option>
                  <option value=" Albania ">  Albania </option> 
                  <option value=" Alemania  ">  Alemania  </option> 
                  <option value=" Andorra ">  Andorra </option> 
                  <option value=" Angola  ">  Angola  </option> 
                  <option value=" Antigua y Barbuda ">  Antigua y Barbuda </option> 
                  <option value=" Arabia Saudita  ">  Arabia Saudita  </option> 
                  <option value=" Argelia ">  Argelia </option> 
                  <option value=" Argentina ">  Argentina </option> 
                  <option value=" Armenia ">  Armenia </option> 
                  <option value=" Australia ">  Australia </option> 
                  <option value=" Austria ">  Austria </option> 
                  <option value=" Azerbaiyán  ">  Azerbaiyán  </option> 
                  <option value=" Bahamas ">  Bahamas </option> 
                  <option value=" Bangladés ">  Bangladés </option> 
                  <option value=" Barbados  ">  Barbados  </option> 
                  <option value=" Baréin  ">  Baréin  </option> 
                  <option value=" Bélgica ">  Bélgica </option> 
                  <option value=" Belice  ">  Belice  </option> 
                  <option value=" Benín ">  Benín </option> 
                  <option value=" Bielorrusia ">  Bielorrusia </option> 
                  <option value=" Birmania  ">  Birmania  </option> 
                  <option value=" Bolivia ">  Bolivia </option> 
                  <option value=" Bosnia-Herzegovina  ">  Bosnia-Herzegovina  </option> 
                  <option value=" Botsuana  ">  Botsuana  </option> 
                  <option value=" Brasil  ">  Brasil  </option> 
                  <option value=" Brunéi  ">  Brunéi  </option> 
                  <option value=" Bulgaria  ">  Bulgaria  </option> 
                  <option value=" Burkina Faso  ">  Burkina Faso  </option> 
                  <option value=" Burundi ">  Burundi </option> 
                  <option value=" Bután ">  Bután </option> 
                  <option value=" Cabo Verde  ">  Cabo Verde  </option> 
                  <option value=" Camboya ">  Camboya </option> 
                  <option value=" Camerún ">  Camerún </option> 
                  <option value=" Canadá  ">  Canadá  </option> 
                  <option value=" Catar ">  Catar </option> 
                  <option value=" Chad  ">  Chad  </option> 
                  <option value=" Chile ">  Chile </option> 
                  <option value=" China ">  China </option> 
                  <option value=" Chipre  ">  Chipre  </option> 
                  <option value=" Colombia  ">  Colombia  </option> 
                  <option value=" Comoras ">  Comoras </option> 
                  <option value=" Congo ">  Congo </option> 
                  <option value=" Corea del Norte ">  Corea del Norte </option> 
                  <option value=" Corea del Sur ">  Corea del Sur </option> 
                  <option value=" Costa de Marfil ">  Costa de Marfil </option> 
                  <option value=" Costa Rica  ">  Costa Rica  </option> 
                  <option value=" Croacia ">  Croacia </option> 
                  <option value=" Cuba  ">  Cuba  </option> 
                  <option value=" Dinamarca ">  Dinamarca </option> 
                  <option value=" Dominica  ">  Dominica  </option> 
                  <option value=" Ecuador ">  Ecuador </option> 
                  <option value=" Egipto  ">  Egipto  </option> 
                  <option value=" El Salvador ">  El Salvador </option> 
                  <option value=" Emiratos Árabes Unidos  ">  Emiratos Árabes Unidos  </option> 
                  <option value=" Eritrea ">  Eritrea </option> 
                  <option value=" Eslovaquia  ">  Eslovaquia  </option> 
                  <option value=" Eslovenia ">  Eslovenia </option> 
                  <option value=" España  ">  España  </option> 
                  <option value=" Estados Unidos  ">  Estados Unidos  </option> 
                  <option value=" Estonia ">  Estonia </option> 
                  <option value=" Etiopía ">  Etiopía </option> 
                  <option value=" Filipinas ">  Filipinas </option> 
                  <option value=" Finlandia ">  Finlandia </option> 
                  <option value=" Fiyi  ">  Fiyi  </option> 
                  <option value=" Francia ">  Francia </option> 
                  <option value=" Gabón ">  Gabón </option> 
                  <option value=" Gambia  ">  Gambia  </option> 
                  <option value=" Georgia ">  Georgia </option> 
                  <option value=" Ghana ">  Ghana </option> 
                  <option value=" Granada ">  Granada </option> 
                  <option value=" Grecia  ">  Grecia  </option> 
                  <option value=" Guatemala ">  Guatemala </option> 
                  <option value=" Guinea  ">  Guinea  </option> 
                  <option value=" Guinea Ecuatorial ">  Guinea Ecuatorial </option> 
                  <option value=" Guinea-Bisáu  ">  Guinea-Bisáu  </option> 
                  <option value=" Guyana  ">  Guyana  </option> 
                  <option value=" Haití ">  Haití </option> 
                  <option value=" Honduras  ">  Honduras  </option> 
                  <option value=" Hungría ">  Hungría </option> 
                  <option value=" India ">  India </option> 
                  <option value=" Indonesia ">  Indonesia </option> 
                  <option value=" Irak  ">  Irak  </option> 
                  <option value=" Irán  ">  Irán  </option> 
                  <option value=" Irlanda ">  Irlanda </option> 
                  <option value=" Islandia  ">  Islandia  </option> 
                  <option value=" Islas Marshall  ">  Islas Marshall  </option> 
                  <option value=" Islas Salomón ">  Islas Salomón </option> 
                  <option value=" Israel  ">  Israel  </option> 
                  <option value=" Italia  ">  Italia  </option> 
                  <option value=" Jamaica ">  Jamaica </option> 
                  <option value=" Japón ">  Japón </option> 
                  <option value=" Jordania  ">  Jordania  </option> 
                  <option value=" Kazajistán  ">  Kazajistán  </option> 
                  <option value=" Kenia ">  Kenia </option> 
                  <option value=" Kirguistán  ">  Kirguistán  </option> 
                  <option value=" Kiribati  ">  Kiribati  </option> 
                  <option value=" Kosovo  ">  Kosovo  </option> 
                  <option value=" Kuwait  ">  Kuwait  </option> 
                  <option value=" Laos  ">  Laos  </option> 
                  <option value=" Lesoto  ">  Lesoto  </option> 
                  <option value=" Letonia ">  Letonia </option> 
                  <option value=" Líbano  ">  Líbano  </option> 
                  <option value=" Liberia ">  Liberia </option> 
                  <option value=" Libia ">  Libia </option> 
                  <option value=" Liechtenstein ">  Liechtenstein </option> 
                  <option value=" Lituania  ">  Lituania  </option> 
                  <option value=" Luxemburgo  ">  Luxemburgo  </option> 
                  <option value=" Macedonia ">  Macedonia </option> 
                  <option value=" Madagascar  ">  Madagascar  </option> 
                  <option value=" Malasia ">  Malasia </option> 
                  <option value=" Malaui  ">  Malaui  </option> 
                  <option value=" Maldivas  ">  Maldivas  </option> 
                  <option value=" Malí  ">  Malí  </option> 
                  <option value=" Malta ">  Malta </option> 
                  <option value=" Marruecos ">  Marruecos </option> 
                  <option value=" Mauricio  ">  Mauricio  </option> 
                  <option value=" Mauritania  ">  Mauritania  </option> 
                  <option value=" México  ">  México  </option> 
                  <option value=" Micronesia  ">  Micronesia  </option> 
                  <option value=" Moldavia  ">  Moldavia  </option> 
                  <option value=" Mónaco  ">  Mónaco  </option> 
                  <option value=" Mongolia  ">  Mongolia  </option> 
                  <option value=" Montenegro  ">  Montenegro  </option> 
                  <option value=" Mozambique  ">  Mozambique  </option> 
                  <option value=" Namibia ">  Namibia </option> 
                  <option value=" Nauru ">  Nauru </option> 
                  <option value=" Nepal ">  Nepal </option> 
                  <option value=" Nicaragua ">  Nicaragua </option> 
                  <option value=" Níger ">  Níger </option> 
                  <option value=" Nigeria ">  Nigeria </option> 
                  <option value=" Noruega ">  Noruega </option> 
                  <option value=" Nueva Zelanda ">  Nueva Zelanda </option> 
                  <option value=" Omán  ">  Omán  </option> 
                  <option value=" Países Bajos  ">  Países Bajos  </option> 
                  <option value=" Pakistán  ">  Pakistán  </option> 
                  <option value=" Palaos  ">  Palaos  </option> 
                  <option value=" Palestina ">  Palestina </option> 
                  <option value=" Panamá  ">  Panamá  </option> 
                  <option value=" Papúa Nueva Guinea  ">  Papúa Nueva Guinea  </option> 
                  <option value=" Paraguay  ">  Paraguay  </option> 
                  <option value=" Perú  ">  Perú  </option> 
                  <option value=" Polonia ">  Polonia </option> 
                  <option value=" Portugal  ">  Portugal  </option> 
                  <option value=" Reino Unido ">  Reino Unido </option> 
                  <option value=" República Centroafricana  ">  República Centroafricana  </option> 
                  <option value=" República Checa ">  República Checa </option> 
                  <option value=" República Democrática del Congo ">  República Democrática del Congo </option> 
                  <option value=" República Dominicana  ">  República Dominicana  </option> 
                  <option value=" Ruanda  ">  Ruanda  </option> 
                  <option value=" Rumania ">  Rumania </option> 
                  <option value=" Rusia ">  Rusia </option> 
                  <option value=" Samoa ">  Samoa </option> 
                  <option value=" San Cristóbal y Nieves  ">  San Cristóbal y Nieves  </option> 
                  <option value=" San Marino  ">  San Marino  </option> 
                  <option value=" San Vicente y las Granadinas  ">  San Vicente y las Granadinas  </option> 
                  <option value=" Santa Lucía ">  Santa Lucía </option> 
                  <option value=" Santo Tomé y Príncipe ">  Santo Tomé y Príncipe </option> 
                  <option value=" Senegal ">  Senegal </option> 
                  <option value=" Serbia  ">  Serbia  </option> 
                  <option value=" Seychelles  ">  Seychelles  </option> 
                  <option value=" Sierra Leona  ">  Sierra Leona  </option> 
                  <option value=" Singapur  ">  Singapur  </option> 
                  <option value=" Siria ">  Siria </option> 
                  <option value=" Somalia ">  Somalia </option> 
                  <option value=" Sri Lanka ">  Sri Lanka </option> 
                  <option value=" Suazilandia ">  Suazilandia </option> 
                  <option value=" Sudáfrica ">  Sudáfrica </option> 
                  <option value=" Sudán ">  Sudán </option> 
                  <option value=" Sudán del Sur ">  Sudán del Sur </option> 
                  <option value=" Suecia  ">  Suecia  </option> 
                  <option value=" Suiza ">  Suiza </option> 
                  <option value=" Surinam ">  Surinam </option> 
                  <option value=" Tailandia ">  Tailandia </option> 
                  <option value=" Taiwán  ">  Taiwán  </option> 
                  <option value=" Tanzania  ">  Tanzania  </option> 
                  <option value=" Tayikistán  ">  Tayikistán  </option> 
                  <option value=" Timor Oriental  ">  Timor Oriental  </option> 
                  <option value=" Togo  ">  Togo  </option> 
                  <option value=" Tonga ">  Tonga </option> 
                  <option value=" Trinidad y Tobago ">  Trinidad y Tobago </option> 
                  <option value=" Túnez ">  Túnez </option> 
                  <option value=" Turkmenistán  ">  Turkmenistán  </option> 
                  <option value=" Turquía ">  Turquía </option> 
                  <option value=" Tuvalu  ">  Tuvalu  </option> 
                  <option value=" Ucrania ">  Ucrania </option> 
                  <option value=" Uganda  ">  Uganda  </option> 
                  <option value=" Uruguay ">  Uruguay </option> 
                  <option value=" Uzbekistán  ">  Uzbekistán  </option> 
                  <option value=" Vanuatu ">  Vanuatu </option> 
                  <option value=" Vaticano  ">  Vaticano  </option> 
                  <option value=" Venezuela ">  Venezuela </option> 
                  <option value=" Vietnam ">  Vietnam </option> 
                  <option value=" Yemen ">  Yemen </option> 
                  <option value=" Yibuti  ">  Yibuti  </option> 
                  <option value=" Zambia  ">  Zambia  </option> 
                  <option value=" Zimbabue  ">  Zimbabue  </option>  
          </select> 
        </div>

        <div class="labeled">      
          <label >Ciudad *</label>  
          <input class="input-group-field" type="text" placeholder="Ciudad" name="ciudad" required="true">
        </div>


        <div class="labeled">  
           <label >E-mail referente</label>   
          <input class="input-group-field" type="email" placeholder="E-mail de quién te refiere" name="referente">
        </div>

        <div class="labeled">      
          <label >E-mail *</label>  
          <input class="input-group-field" type="email" placeholder="E-mail" required="true" name="email">
        </div>

        <div class="labeled">  
           <label >Password *</label>   
          <input class="input-group-field" type="Password" placeholder="Password" required="true" name="password">
        </div>



      </div>
      <h7>Los campos marcados * son requeridos.</h7>
      <button class="button expanded">Sign Up</button>
    </form>
  </div>
</div>


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
