
function grabarBicicleta(idCliente)
{
    // alert(idCliente);

    var marcabici =  document.getElementById("marcabici").value;
    var colorbici =  document.getElementById("colorbici").value;
    var serialbici =  document.getElementById("serialbici").value;

    const http=new XMLHttpRequest();
    const url = '../bicicletas/bicicletas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log(this.responseText);
            document.getElementById("cuerpoModalClientes").innerHTML  = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(
        "opcion=grabarBicicleta"
        + "&idCliente="+idCliente
        + "&marcabici="+marcabici
        + "&colorbici="+colorbici
        + "&serialbici="+serialbici
        );
        
        pantallaClientes();     
}

// function irPantallaClientes()
// {

// }

function nuevoIngresoBicicleta(idBicicleta)
{
    // alert(idBicicleta);
    const http=new XMLHttpRequest();
    const url = '../bicicletas/bicicletas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log(this.responseText);
            document.getElementById("cuerpoModalClientesHisto").innerHTML  = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(
        "opcion=pregunteNuevoIngreso"
        + "&idBicicleta="+idBicicleta
     
        );

}
function grabarIngresoBicicleta(idBicicleta)
{
    // alert(idBicicleta); 
    var motivoIngreso =  document.getElementById("motivoIngreso").value;
    const http=new XMLHttpRequest();
    const url = '../bicicletas/bicicletas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log(this.responseText);
            document.getElementById("cuerpoModalClientesHisto").innerHTML  = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(
        "opcion=grabarIngresoBicicleta"
        + "&idBicicleta="+idBicicleta
        + "&motivoIngreso="+motivoIngreso
    );

}
function muestreHistorialBicicleta(idBicicleta)
{
    // alert(idBicicleta); 
    const http=new XMLHttpRequest();
    const url = '../bicicletas/bicicletas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log(this.responseText);
            document.getElementById("cuerpoModalClientesHisto").innerHTML  = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(
        "opcion=muestreHistorialBicicleta"
        + "&idBicicleta="+idBicicleta
    );
}

function muestreOrdenBicicleta(idOrden)
{
    const http=new XMLHttpRequest();
    const url = '../bicicletas/bicicletas.php';
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status ==200){
            console.log(this.responseText);
            document.getElementById("cuerpoModalClientesHisto").innerHTML  = this.responseText;
        }
    };
    http.open("POST",url);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.send(
        "opcion=muestreOrdenBicicleta"
        + "&idOrden="+idOrden
    );
}
