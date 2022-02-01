<?php

require_once("bd.php");

 class Despensa{

   private $producto;
   private $cantidad;

  function __construct()
  {
  }

    public function getProducto()
    {
        return $this->producto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

      public function agregarDespensa($despensa)
    {
    	$producto= $despensa->getProducto();
        $cantidad= $despensa->getCantidad(); 

        $db= new DB();
        $stmt =  $db->getConexion()->prepare("INSERT INTO alimentos (producto,cantidad) VALUES (?,?)");
        $stmt->bindParam(1,  $producto);
        $stmt->bindParam(2,  $cantidad);
        $stmt->execute();
    }

    public function eliminarProducto($producto){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("DELETE FROM alimentos WHERE producto = ?");
        $stmt->bindParam(1, $producto);
        $stmt->execute();
    
    }
   public function finalizarProducto($producto){
        $db= new DB();
        $stmt =  $db->getConexion()->prepare("DELETE FROM alimentos WHERE producto = ?");
        $stmt->bindParam(1, $producto);
        $stmt->execute();
    
    }

      public function listarProductos()
   {
        $db= new DB();
        $sql = "SELECT * FROM alimentos";
        $stmt = $db->getConexion()->prepare($sql);
        $stmt->execute();
        $rs= $stmt->fetchAll();
        $despensas = [];
        if($rs){
        foreach ($rs as $fila) { 
           $despensa= new Despensa();
           $despensa->setProducto($fila["producto"]);
           $despensa->setCantidad($fila["cantidad"]); 
         
           $despensas[] =$despensa;
        }
    }
        return $despensas;
    
    }



 }
