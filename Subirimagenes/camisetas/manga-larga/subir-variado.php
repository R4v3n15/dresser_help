<?php
include ("conexion.php");
$sql="SELECT * FROM tbimg ";
$res=mysqli_query($cn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insertar Imagen</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<center>
    <body>
<h1>Insertar y Mostrar imagen en PHP y MYSQL</h1>
<form action="cargar.php" method="POST" enctype="multipart/form-data">
    Nombre <input type="file" name="img" ><br><br>
    <input type="submit" value="Aceptar">
</form>
<hr>
<?php
while ($data=mysqli_fetch_array($res))
{
    echo '<img src="'.$data['ruta'].'" width="200px" height="200px">';
}
?>
</body>
</center>
</html>