<?php 
include('includes/db.php');
if(isset($_GET["id"])==false){//iset para validar parametros
 echo "Es necesario enviar un id";
 die; //  para ocultar el error para cortarlo como un break
}

$id =$_GET["id"];
$sql="select*from mascotas where id= $id";
$mascota=DB::query($sql);
$mascota=mysqli_fetch_object($mascota);

    if(!$mascota){

    echo "El usuario no existe";
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="guardar_mascota.php" method="post">
        <div>
            <h3>Editar Usuarios</h1>
        </div>
        <input type="hidden" name="id" value="<?= $mascota->id ?>">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?= $mascota->nombre ?>">
        </div>
        <div class="form-group">
            <label for="">Raza</label>
            <input type="text" name="raza" value="<?= $mascota->raza ?>">
        </div>
        <div class="form-group">
            <label for="">Edad</label>
            <input type="text" name="edad" value="<?= $mascota->edad ?>">
        </div>
        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>
</html>