<?php 
    include('includes/db.php');

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $raza = $_POST["raza"];
    $edad = $_POST["edad"];

   
    if($nombre=="" || $raza=="" || $edad==""){

    }else{
    if(isset($id) == false){
        header('Location: crear.php');
        $sql = "insert into mascotas(nombre,raza,edad)values('$nombre', '$raza', '$edad')"; 
    }else{
        header('Location: index.php');
        $sql = "UPDATE mascotas set nombre='$nombre', raza='$raza', edad='$edad'  WHERE id='$id'";
    }
    }
    DB::query($sql);
?>