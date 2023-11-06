<?php
    if (isset($_GET['num_oc'])) {

        $num_oc = $_GET['num_oc'];
        
        $rec_pos_adq="SI";
        $rec_jefcont="NO";

        $conexion_adq1 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql1 = "INSERT INTO    bd_jef_cont (num_oc, fecha_emision, empresa, unidad_de_negocio, 
                                proveedor, documento, num_comprobante, importe, fecha_pago, devolver_a, area_solicitante, 
                                referencia) SELECT num_oc, fecha_emision, empresa, unidad_de_negocio, proveedor, 
                                documento, num_comprobante, importe, fecha_pago, devolver_a, area_solicitante, 
                                referencia FROM bd_pos_adquisiciones WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq1,$sql1);
        $conexion_adq1->close();

//---------------------------------RECIBE JEF CONT = NO---------------------------------------------------------------------        

        $conexion_adq2 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        
        
        $sql2 = "UPDATE bd_jef_cont SET rec_jefcont = ('$rec_jefcont') WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq2,$sql2);
        $conexion_adq2->close();

//---------------------------------RECIBE GERENCIA = SI---------------------------------------------------------------------

        $conexion_adq3 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        
        
        $sql3 = "DELETE FROM bd_pos_adquisiciones WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq3,$sql3);
        $conexion_adq3->close();
        
//------------------------------------------------------------------------------------------------------

        $conexion_adq4 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");  

        date_default_timezone_set('America/New_York');
        $fecha_rec_adq_pos = date("Y-m-d");

        $sql4 = "UPDATE datos_oc SET rec_adq_pos = ('$rec_pos_adq'), fecha_rec_adq_pos = ('$fecha_rec_adq_pos') WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq4,$sql4);
        $conexion_adq4->close();

//------------------------------------------------------------------------------------------------------

        header("location: ../acciones_admin/actualizar_adq_pos.php?rol=Administrador&area=Adquisiciones");
    } 
?>