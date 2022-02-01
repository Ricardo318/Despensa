<?php

require_once("/xampp/htdocs/Despensa/controller/controller.php");

$despensaController = new DespensaController();

$validacion = (isset($_GET['op']) && !empty($_GET['op']));

if(!$validacion){   
    $despensaController->inicio();
}else{
    $op=$_GET["op"];

    if($op=="inicio"){
        $despensaController->inicio();
    }

    if($op=="agregar"){
        
    $despensaController->agregar();
        
    }

    if($op=="verDespensa"){
        
    }

    if($op=="verProductos"){
        $despensaController->verProductos();
    }
    if($op=="agregarDespensa"){
        $producto = $_POST['Producto'];
        $cantidad = $_POST['Cantidad'];
        
        if(isset($_POST['verDespensa'])){
            $despensaController->verDespensa();
        }else{
            $despensaNuevo = new Despensa();
        
        $despensaNuevo->setProducto($producto);
        $despensaNuevo->setCantidad($cantidad); 
        
        $despensaController->agregarDespensa($despensaNuevo);
        }
        
        
    }
    if($op=="eliminar"){
        $producto = $_GET['producto'];
        $despensaController->eliminarDespensa($producto);
        
    }
    
     if($op=="finalizar"){
        $producto = $_GET['producto'];
        $despensaController->eliminarDespensa($producto);
        
    }
}  
?>
