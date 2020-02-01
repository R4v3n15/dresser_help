<?php 
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?> 
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peliculas</title>
</head>
<body>
   <div class="div-contenedor-datos">
      	
       
						<a href="../home.php" class="User-co">
							Hola,  
							
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
						</a>
						<?php } ?>
						<a href="../account.php" calss="User-co" id="Cuenta">Cuenta</a>
						<a href="../logout.php" calss="User-co" id="salir">Salir</a>
      	
					
   </div>
				
</body>
</html>