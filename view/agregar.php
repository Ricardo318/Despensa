<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Despensa</title>
</head>
<body>
	<center>
	<h1>Agregar Productos</h1>
	<form action="index.php?op=agregarDespensa" method="post">
	<select name="Producto" id="Producto">
		<option value="1">Seleccione Producto</option>
		<option value="Arroz">Arroz</option>
		<option value="Fideos">Fideos</option>
		<option value="Garbanzos">Garbanzos</option>
		<option value="Porotos">Porotos</option>
		<option value="Harina">Harina</option>
		<option value="Cereales">Cereales</option>
		<option value="Avena">Avena</option>
		<option value="Aceite">Aceite</option>
		<option value="Té">Té</option>
		<option value="Cafe">Cafe</option>
		<option value="Azucar">Azucar</option>
		<option value="Sal">Sal</option>
		<option value="Mantequilla">Mantequilla</option>
		<option value="Huevos">Huevos</option>
	</select>
	<br><br>
	<select name="Cantidad" id="Cantidad">
		<option value="Ingrese cantidad">Ingrese cantidad</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
	</select>


	<br>
	<script >
			function alerta(){

			alert("Producto ingresado en la Despensa");
}
	</script>

<br><br><br>
<input type="submit" id="agregar" onclick="alerta()" name="agregar" value="Agregar">

<input type="submit" id="verDespensa" name="verDespensa" value="Ver despensa">
<br><br>
		<a href="index.php?op=inicio">Volver</a>
		</center>
</form>

</body>
</html>