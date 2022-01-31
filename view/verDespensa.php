<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ver Despensa</title>
</head>
<body>
<style>

	tr{ 
		box-sizing: border-box;
        background-color:lightseagreen;
      }
      
</style>

<form>

<table style="width: 1200px;">
	<thead>
		<tr>
	        <th>Mesa</th>
	         <th>Descripcion</th>
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
				<td><a href="index.php?op=finalizar&producto=<?php echo $despensa->getProducto() ?>">Finalizar</a></td>
        </tr>
            <?php }
                }
        	?>
    </tbody>
</table>
<br><br>
		<a href="index.php?op=inicio">Volver</a>
</form>
</body>
</html>
