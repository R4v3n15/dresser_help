<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <?php
include ("conexion.php");

if(isset($_FILES['img'])){
    $nombreImg=$_FILES['img']['name'];
    $ruta=$_FILES['img']['tmp_name'];
    $destino="imagenes/".$nombreImg;
    if(copy($ruta,$destino)){
        $sql="INSERT INTO tbimg(nombre,ruta) VALUES ('$nombreImg','$destino')";
        $res=mysqli_query($cn,$sql);
        if($res){
         echo '<script type="text/javascript"> alert("Agregado Correctamente"); window.location="http://201.241.18.178/Subirimagenes/camisetas/manga-larga/camiseta-manga-larga.php";</script>';
           

        }else{
            die("Error".mysqli_error($cn));
        }

    }

}
?>
</body>
</html>



