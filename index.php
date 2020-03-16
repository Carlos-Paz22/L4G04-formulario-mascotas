<?php 
include('includes/db.php');
//DB::init();

	

	 //$conexion= new mysqli($host, $user, $password, $bd);
	 $sql="SELECT * from mascotas";
	 $result=DB::query($sql);
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
	<tr>
	<td colspan = 5 ><h2>Datos guardados en la base<h2></td>
	</tr>
	
		<tr>
	

			<td>id</td>
			<td>nombres</td>
			<td>raza</td>
			<td>edad</td>
			<td>acciones</td>
			
		</tr>

		<?php 
		
		//$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>	
			<td><?php echo $mostrar['raza'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
			<td>
			<a href="editar.php?id=<?= $mostrar["id"] ?>">Editar</a>
			<a href="eliminar.php?id=<?= $mostrar['id']?>">Eliminar</a>
			</td>
		</tr>
	
	<?php 
	}
	 ?>
	</table>
	<br>
	<a  href="crear.php">Registrar nueva mascota</a>
</body>
</html>