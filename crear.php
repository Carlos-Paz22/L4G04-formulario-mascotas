
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Registro de mascotas<h2>


				<form class="login100-form validate-form" action="guardar_mascota.php" method="post" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="nombre is required" >
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" size="70"name="nombre" placeholder="Ingrese nombre mascota"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="raza is required">
						<span class="label-input100">Raza </span>
						<input class="input100" type="text"size="70" name="raza" placeholder="Ingrese raza"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="edad is required">
						<span class="label-input100">Edad </span>
						<input class="input100" type="text"size="70" name="edad" placeholder="Ingrese edad"required>
						<span class="focus-input100"></span>
					</div>

	

					<input  type="submit" value="guardar"/>
						
						<br>
						<a  href="index.php">Mostrar datos registrados</a>
					
				</form>
	
</body>
</html>