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
    <title>Cinefix</title>
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

            <ul class="position-ul">
             
              <li class="li-menu"><a href="index.php" class="lk">Inicio</a></li>
              <li class="li-menu"><a href="nosotros.php" class="lk">Nosotros</a></li>
              <li class="li-menu"><a href="#" class="lk">Ayuda</a></li>
              <li class="li-menu"><a href="contacto.php" class="lk">Contacto</a></li>
              
              <div class="position-doe">
              <li class="li-menu"><a href="#" class="lk" id="acceder">Acceder</a></li>
              <li class="li-menu"><a href="#" class="lk" id="Rg">Registrarte</a></li>
              </div>
              
             
            </ul>
            
           
  </div>
  
  
  <br> <br> <br> <br>
<div class="section-info-global">
   
   <p class="title-uno">Nosotros</p>
   <br>
   <p class="parrafo-dos">Somos una plataforma que no solo se preocupa de dar servicios, sino de entregar diversión junto a tus seres querido, para que puedas incluirlos en tus panoramas de fines de semanas en tu tv o después del trabajo o tal vez de camino a el en tu Tablet. 
   <br>
   <br> 
   <br>

 MYPELIX está preocupado también de que puedas disfrutar de manera personal en tu celular de camino a tu oficina, tus clases o de viaje. Nos preocupamos de darte la mejor experiencia y disfrutar de tus caminos hacia donde quiera que vayas, MYPELIX te acompañará sin dejar que te pierdas de ninguna canal, película o serie que estés viendo.  

</p>
    
</div>
  
   
  
 
  
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
