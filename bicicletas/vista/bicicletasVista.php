<?php
$raiz = dirname(dirname(dirname(__file__)));
// require_once($raiz.'/caja/model/ConceptoModel.php');

class bicicletasVista
{

    public function pantallaBicicletas($bicicletas)
    {
        echo '<table class="table">';
        echo '<tr>';
        echo '<th>Marca</th>';
        echo '<th>Color</th>';
        echo '<th>Serial</th>';
        echo '</tr>';

        foreach($bicicletas as $bicicleta)
        {
            echo '<tr>';
            echo '<td>'.$bicicleta['marca'].'</td>';
            echo '<td>'.$bicicleta['color'].'</td>';
            echo '<td>'.$bicicleta['serial'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public function preguntarBicicleta($idCliente){
        ?>
           <div style="color:black;">
               <h2>Info Bicicleta</h2>
               <div class ="form-group">
                    <div class="col-xs-12 col-lg-4">
                        <span >Marca:</span>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <input class ="form-control" type="text" id="marcabici">
                    </div>
               </div>
               <div class ="form-group">
                    <div class="col-xs-12 col-lg-4">
                        <span >Color:</span>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <input class ="form-control" type="text" id="colorbici">
                    </div>
               </div>
               <div class ="form-group">
                    <div class="col-xs-12 col-lg-4">
                        <span >Serial:</span>
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <input class ="form-control" type="text" id="serialbici">
                    </div>
               </div>
               <div class ="form-group">
                  <?php
                  echo '<button   
                           data-dismiss="modal" 
                           class="btn btn-primary" 
                           onclick="grabarBicicleta('.$idCliente.')">
                           Grabar Bicicleta
                        </button>';
                  ?>
               </div>
           
               
           </div> 

        <?php
    }

    public function pregunteNuevoIngreso($idBicicleta)
    {
        ?>
            <div style="color:black;">
                <h3>MOTIVO INGRESO BICICLETA </h3>
                <div class ="form-group">
                    <textarea class ="form-control" id="motivoIngreso" >
                        </textarea>
                    </div>
                    <div class ="form-group">
                        <?php
                        echo '<button class="btn btn-primary" onclick ="grabarIngresoBicicleta('.$idBicicleta.');">Grabar Ingreso</button>';
                        ?>
                    </div>
                </div>
                <?php
    }

    public function muestreHistorial($historiales)
    {
        
        echo '<div style="color:black;">';
        echo '<h3>Historial</h3>';
        echo '<table class="table" >';
        echo '<tr>'; 
        echo '<td>FECHA</td>';
        echo '<td>MOTIVO</td>';
        echo '</tr>';
        foreach($historiales as $historial)
        {
            echo '<tr>'; 
            echo '<td><button class="btn btn-primary" onclick="muestreOrdenBicicleta('.$historial['idOrden'].');">'.$historial['fecha'].'</button></td>';
            echo '<td>'.$historial['motivo'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }

    public function pantallaOrdenesBicicletas($ordenes)
    {
        
        echo '<div style="color:white;">';
        echo '<h3>Historial</h3>';
        echo '<table class="table" >';
        echo '<tr>'; 
        echo '<td>ORDEN</td>';
        echo '<td>FECHA</td>';
        echo '<td>BICICLETA</td>';
        echo '<td>MOTIVO</td>';
        echo '</tr>';
        foreach($ordenes as $orden)
        {
            echo '<tr>'; 
            echo '<td>'.$orden['idOrden'].'</td>';
            echo '<td>'.$orden['fecha'].'</td>';
            echo '<td>'.$orden['idBicicleta'].'</td>';
            echo '<td>'.$orden['motivo'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }


}