<?php
include ("Subirimagenes/variado/conexion.php");
$sql="SELECT * FROM `tbimg` ";
$res=mysqli_query($cn,$sql);
?>

<?php  
ob_start();
session_start();
require_once 'config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="icon/fonts/style.css"> 
  
</head>
<body> 
 
 
  
    <div class="menu-top-app">
    

   
	
        <a title="agregar prenda" href="#"><img src="https://img.icons8.com/windows/32/000000/user.png" class="usuario-top" /></a>
    
    <p class="nikname">Hola, <?php if($_SESSION['logged_in']) { ?>
  <?php echo $_SESSION['name']; ?>
  <?php } ?></p>
     
  </div>
  
    
  

  <div class="menu-app">
<!--- Icono uno -->
   <div class="categiorias-menu-app">
   
    <a title="agregar prenda" href="home.php"><img src="https://img.icons8.com/ios/64/000000/person-at-home.png" class="icono-home" /></a>
    <p class="button-home">Inicio</p>
   </div>
    <!--- Icono dos -->
    
   <div class="categiorias-menu-app">
   
       <a title="agregar prenda" href="agregar-prendas.php"><img src="https://img.icons8.com/pastel-glyph/64/000000/t-shirt--v1.png" class="icono-home" /></a>
        <p class="button-home">Agregar Prendas</p>
   </div>
    <!--- Icono tres -->
    
    
    <div class="categiorias-menu-app">
   
   <a title="agregar prenda" href="#"><img src="https://img.icons8.com/pastel-glyph/64/000000/hearts.png" class="icono-home" /></a>
     <p class="button-home">Favoritos</p>
   </div>
    <!--- Icono cuatro -->
    

   <div class="categiorias-menu-app">
   
      <a title="agregar prenda" href="#"><img src="https://img.icons8.com/ios/50/000000/womens-pajama.png" class="icono-home" /></a>
        <p class="button-home">Combinar prendas</p>
   </div>
   
   <!--- Icono uno -->
  
   
   
   
    
    
     
  </div>
  
    <br> <br>
  <div data-type="timetable"  class="contenedor">
     
     <p class="title-contenedor">Camisetas <img src="https://img.icons8.com/android/24/000000/expand-arrow.png" class="flecha-b"> </p>
   	<br><br><br>
					
					
		

<hr>
<center>
  <?php
while ($data=mysqli_fetch_array($res))
{
    echo '<img src="Subirimagenes/camisetas/manga-larga/'.$data['ruta'].'" class="img-publish">';
}
?>

  


</center>		     
					
				

      
  </div>
  
  <br>
  
    <div data-type="timetable"  class="contenedor">
     
     <p class="title-contenedor">Pantalones <img src="https://img.icons8.com/android/24/000000/expand-arrow.png" class="flecha-b"> </p>
   	<br><br><br>
					
					
		

<hr>
<center>
  <?php
while ($data=mysqli_fetch_array($res))
{
    echo '<img src="Subirimagenes/camisetas/manga-larga/'.$data['ruta'].'" class="img-publish">';
}
?>

  


</center>		     
					
				

      
  </div>
  
  <br>
  
  
    <div data-type="timetable"  class="contenedor">
     
     <p class="title-contenedor">Calzado <img src="https://img.icons8.com/android/24/000000/expand-arrow.png" class="flecha-b"> </p>
   	<br><br><br>
					
					
		

<hr>
<center>
  <?php
while ($data=mysqli_fetch_array($res))
{
    echo '<img src="Subirimagenes/camisetas/manga-larga/'.$data['ruta'].'" class="img-publish">';
}
?>

  


</center>		     
					
				

      
  </div>
  
  <br>
  
  
   

	<script src="lib/js/jquery.js"></script>
	<script src="lib/js/bootstrap.min.js"></script>
    
</body>
</html>