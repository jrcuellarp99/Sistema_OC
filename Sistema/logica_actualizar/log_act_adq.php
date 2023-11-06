<?php
    if (isset($_GET['num_oc'])) {


        $num_oc = $_GET['num_oc'];
        
        $rec_ger="NO";
        $rec_adq="SI";

 
//------------------------------------------------------------------------------------------------------

        $conexion_adq1 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");      

        $sql1 = "INSERT INTO    bd_gerencia (num_oc, fecha_emision, empresa, unidad_de_negocio, 
                                proveedor, documento, num_comprobante, importe, fecha_pago, devolver_a, area_solicitante, 
                                referencia) SELECT num_oc, fecha_emision, empresa, unidad_de_negocio, proveedor, 
                                documento, num_comprobante, importe, fecha_pago, devolver_a, area_solicitante, 
                                referencia FROM bd_adquisiciones WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq1,$sql1);
        $conexion_adq1->close();

//--------------------------------------RECIBE GERENCIA = NO----------------------------------------------------------------        

        $conexion_adq2 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        
        
        $sql2 = "UPDATE bd_gerencia SET rec_ger = ('$rec_ger') WHERE num_oc = '$num_oc'";
  
        mysqli_query($conexion_adq2,$sql2);
        $conexion_adq2->close();

//-------------------------------------RECIBE ADQUISICIONES = SI-----------------------------------------------------------------

        $conexion_adq3 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        
        
        $sql3 = "DELETE FROM bd_adquisiciones WHERE num_oc = '$num_oc'";
  
        mysqli_query($conexion_adq3,$sql3);
        $conexion_adq3->close();

//----------------------------HORA DE ACTUALIZACION Y CONFIRMACION BASE GENERAL--------------------------------------------------------------------------

        $conexion_adq4 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");  

        date_default_timezone_set('America/New_York');
        $fecha_rec_adq = date("Y-m-d");

        $sql4 = "UPDATE datos_oc SET rec_adq = ('$rec_adq'), fecha_rec_adq = ('$fecha_rec_adq') WHERE num_oc = '$num_oc'";
  
        mysqli_query($conexion_adq4,$sql4);
        $conexion_adq4->close();
//------------------------------------------------------------------------------------------------------

        header("location: ../acciones_admin/actualizar_adq.php?rol=Administrador&area=Adquisiciones");
    } 
?>