<?php

require_once("/xampp/htdocs/Despensa/models/despensa.php");

class DespensaController
{	
	 public $despensa;

    public function __construct()
    {
        $this->despensa = new Despensa();
    }

    public function inicio()
    {
      include 'view/inicio.php';
    }

     public function verDespensa()
    {
        $despensas = $this->despensa->listarProductos();
        include 'view/verDespensa.php';
        
    }

    
    public function verProductos()
    {
        $despensas = $this->despensa->listarProductos();
        include 'view/verProductos.php';
        
    }

    public function agregar()
    {
        include 'view/agregar.php';
    }

    public function agregarDespensa($despensaNuevo)
    {
      $this->despensa->agregardespensa($despensaNuevo);
      include 'view/agregar.php';
     
    }

    public function eliminarDespensa($producto)
    {
        $this->despensa->eliminarProducto($producto);
        $despensas = $this->despensa->listarProductos();
        include 'view/verDespensa.php';
      
    }

    public function finalizarDespensa($producto)
    {
      
        include 'view/verProductos.php';
       
      
    }




}
