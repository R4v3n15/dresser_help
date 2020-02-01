<?php 
ob_start();
session_start();
require_once 'config.php';  
?>
<?php 
	if( !empty( $_POST )){  
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: home.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>SmartDresser</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    
  </head>
  <body>


  <div class="menu-web-top">

            <ul>
             
              <li class="li-menu"><a href="" class="lk">Suscribirse</a></li>
              <li class="li-menu"><a href="" class="lk">Ayuda</a></li>
              <li class="li-menu"><a href="#" class="lk">Descargar</a></li>
              <li class="li-menu"><a href="" class="lk">|</a></li>
              <li class="li-menu"><a href="" class="lk">Regístrate</a></li>
               <li class="li-menu"><a href="iniciar-app.php" class="lk">Inicio de sesión</a></li> 
              
             
             
            
              
             
            </ul>
            
           
  </div>
  
  
  
<br> <br>
 
 <center>
   
 
 <center>
    <h3>Políticas de privacidad</h3>
     <p class="index-text-der" style="color:black; font-size:25px;">anunciará en este sitio web, los cambios introducidos con razonable antelación a su puesta en práctica. El hecho de continuar utilizando el sitio web de SMART DRESSER después de haberse consignado cualquier cambios de esta Política de Privacidad significará que usted ha aceptado tales cambios.
Si tiene alguna pregunta relativa a nuestras prácticas de privacidad le rogamos ponerse en contacto con nosotros a través del menú en ‘Contacto‘ que encuentra en nuestro menú.
SMART DRESSER hará los esfuerzos razonables necesarios para investigar inmediatamente cualquier queja que pueda usted tener en relación con nuestra Política de Privacidad o la utilización por nuestra parte de su Información Personal.
1. General
MYPELIX respeta la privacidad de todos los individuos que visitan nuestro sitio web. Esta Política de Privacidad refleja la información que SMART DRESSER recoge y cómo utilizaremos dicha información. SMART DRESSER desea proporcionarle el máximo control a su alcance sobre la información que le identifica a usted personalmente. Cuando usted lo solicite, SMART DRESSER,
(a) nos permitirá acceder a su información personal;
(b) retirar su Información Personal de nuestra base de datos; y,
(c) corregir la Información Personal que usted haya manifestado ser errónea. Esta política de privacidad no aplica hacia otros sitios web que se pueden acceder a través de vínculos en el sitio web de SMART DRESSER.
2. Información Personal
Cuando usted visite nuestro sitio web, no recogeremos ninguna Información Personal sobre usted (como su nombre, dirección, número de teléfono, número de identificación, información relativa a facturación y envío, información sobre su carta de crédito o dirección de correo electrónico) a menos que usted la proporcione voluntariamente. Utilizando nuestro sitio web, usted acepta y se compromete a aceptar los términos y condiciones de nuestra actual Política de Privacidad tal como se explica en esta sección del sitio web. Si usted no acepta los términos y condiciones de esta Política de Privacidad, le rogamos que no suministre ningún dato de carácter personal a SMART DRESSER a través de este sitio web.
</p>
 
 </center>
 </center>

  
   
  
   <!-- foolter -->
  
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
