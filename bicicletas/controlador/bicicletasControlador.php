<?php

$raiz = dirname(dirname(dirname(__file__)));
//  die($raiz);
require_once($raiz.'/bicicletas/vista/bicicletasVista.php');
require_once($raiz.'/bicicletas/modelo/bicicletasModelo.php');

class bicicletasControlador 
{
    protected $vista;
    protected $modelo;

    public function __construct()
    {
        $this->vista = new bicicletasVista();
        $this->modelo = new bicicletasModelo();
        
        if($_REQUEST['opcion']=='preguntarBicicleta')
        {
            $this->preguntarBicicleta($_REQUEST);
        }
        if($_REQUEST['opcion']=='grabarBicicleta')
        {
            $this->grabarBicicleta($_REQUEST);
        }
        if($_REQUEST['opcion']=='pregunteNuevoIngreso')
        {
            $this->pregunteNuevoIngreso($_REQUEST);
        }
        if($_REQUEST['opcion']=='grabarIngresoBicicleta')
        {
            $this->grabarIngresoBicicleta($_REQUEST);
        }
        if($_REQUEST['opcion']=='muestreHistorialBicicleta')
        {
            $this->muestreHistorialBicicleta($_REQUEST);
        }
        if($_REQUEST['opcion']=='muestreOrdenBicicleta')
        {
            $this->muestreOrdenBicicleta($_REQUEST);
        }
        if($_REQUEST['opcion']=='pantallaBicicletas')
        {
            $this->pantallaBicicletas($_REQUEST);
        }
        if($_REQUEST['opcion']=='pantallaOrdenesBicicletas')
        {
            $this->pantallaOrdenesBicicletas($_REQUEST);
        }
       


    }


    public function preguntarBicicleta($request)
    {
        $this->vista->preguntarBicicleta($request['idCliente']);

    }

    public function grabarBicicleta($request)
    {
        $this->modelo->grabarBicicleta($request); 
        $idBicicleta = $this->modelo->traerultimoIdBicicletas(); 
        // $this->vista->pregunteNuevaOrden($idBicicleta); 
    }
    public function pregunteNuevoIngreso($request)
    {
        $this->vista->pregunteNuevoIngreso($request['idBicicleta']); 
        
    }
    public function grabarIngresoBicicleta($request)
    {
        $this->modelo->grabarIngresoBicicleta($request); 
        
    }
    public function muestreHistorialBicicleta($request)
    {
        $historial =  $this->modelo->traerHistorialBicicleta($request['idBicicleta']); 
        $this->vista->muestreHistorial($historial); 
        
    }
    public function muestreOrdenBicicleta($request)
    {
        $orden = $this->modelo->traerInfoOrdenBIcicleta($request['idOrden']); 

    }
    public function pantallaBicicletas($request)
    {
        $bicicletas = $this->modelo->traerBicicletas();
            $this->vista->pantallaBicicletas($bicicletas);
    }
    public function pantallaOrdenesBicicletas($request)
    {
        $ordenes = $this->modelo->traerOrdenesBicicletas();
            $this->vista->pantallaOrdenesBicicletas($ordenes);
    }

}

?>