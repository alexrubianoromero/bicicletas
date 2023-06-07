<?php

$raiz = dirname(dirname(dirname(__file__)));

require_once($raiz.'/conexion/Conexion.php');



class bicicletasModelo extends Conexion
{
    public function grabarBicicleta($request)
    {
        $sql = "insert into bicicletas (idCliente,marca,color,serial)
        values (
            '".$request['idCliente']."'
            ,'".$request['marcabici']."'
            ,'".$request['colorbici']."'
            ,'".$request['serialbici']."'
        ) 
        ";
        // die($sql); 
        $consulta = mysql_query($sql,$this->connectMysql() );     
        
    }
    public function traerultimoIdBicicletas()
    {
        $sql = "select max(idBicicleta) as maxId  from bicicletas "; 
        $consulta = mysql_query($sql,$this->connectMysql() );     
        $arr = mysql_fetch_assoc($consulta);
        return $arr['maxId'];  
    }
    public function traerBicicletasCliente($idCliente){
        $sql ="select * from bicicletas where idCliente = '".$idCliente."'    ";
        $consulta = mysql_query($sql,$this->connectMysql() );     
        $bicicletas = $this->get_table_assoc($consulta);
        return $bicicletas;
    }
    
    public function grabarIngresoBicicleta($request)
    {
        $sql = "insert into ordenes_bicicletas (idBicicleta,fecha,motivo)
        values (
            '".$request['idBicicleta']."'
            ,now()
            ,'".$request['motivoIngreso']."'
            )
            ";    
            // die($sql); 
            $consulta = mysql_query($sql,$this->connectMysql() );     
            
        }
        
        public function traerHistorialBicicleta($idBicicleta)
        {
            $sql = "select * from ordenes_bicicletas  where idBicicleta = '".$idBicicleta."'   "; 
            $consulta = mysql_query($sql,$this->connectMysql() );     
            $historial = $this->get_table_assoc($consulta);
            return $historial;
        }
        public function traerOrdenesBicicletas()
        {
            $sql = "select * from ordenes_bicicletas  order by idOrden desc   "; 
            $consulta = mysql_query($sql,$this->connectMysql() );     
            $ordenes = $this->get_table_assoc($consulta);
            return $ordenes;
        }
        
        public function traerInfoOrdenBIcicleta($idOrden)
        {
            $sql = "select * from ordenes_bicicletas    where idOrden = '".$idOrden."'  "; 
            $consulta = mysql_query($sql,$this->connectMysql() );     
            $orden = mysql_fetch_assoc($consulta);
            return $orden ;  
        } 
        
        public function traerBicicletas()
        {
            $sql = "select * from bicicletas  ";
            $consulta = mysql_query($sql,$this->connectMysql() );     
            $bicicletas = $this->get_table_assoc($consulta);
            return $bicicletas; 
        }

}


?>