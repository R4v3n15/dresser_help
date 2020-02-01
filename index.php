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
     <div class="info-index">
    <div class="info">
        <br> <br> <br>
    <p class="index-text-der" style="color:black; font-size:25px;">Con SmartDresser ya es más fácil combinar prendas.</p>
   <br>
      <hr>
       <center>
            <p class="prubagratis">Prueba gratis 7 días</p>
            <br>
        <a href="" class="pru-gras">Suscribirse</a>
       </center>
    </div>
    <br>
    
    <div class="info">
        <img src="https://blog.sendblaster.com/wp-content/uploads/042011UrbanOutfitters-top.gif" class="gif-index">
        
    </div>
     
 </div>
 </center>

  
   
  
   <!-- foolter -->
  
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
