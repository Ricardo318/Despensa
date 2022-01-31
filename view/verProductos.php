<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Ver productos</title>
</head>
<body>
<style>

	tr{
		box-sizing: border-box;
        background-color:greenyellow;
      }
      
</style>
<center>
<form>

<table style="width: 900px;">
	<thead>
		<tr>
	        <th>Producto</th>
	         <th>Cantidad</th>
	       <th>Accion</th>
       </tr>
  </thead>
  <tbody>
    	<tr>
        	<?php
            	if($despensas){
                foreach ($despensas as $despensa) { ?>
				<td><?php echo $despensa->getProducto() ?></td>
				<td><?php echo $despensa->getCantidad() ?></td>

				<td><a href="index.php?op=eliminar&producto=<?php echo $despensa->getProducto() ?>">Eliminar</a></td>
        </tr>
            <?php }
                }
        	?>
    </tbody>
</table>
<br><br>
		<a href="index.php?op=inicio">Volver</a>
</form>
</center>
</body>
</html>
