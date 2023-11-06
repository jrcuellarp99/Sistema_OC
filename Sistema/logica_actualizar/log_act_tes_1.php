<?php
    if (isset($_GET['num_oc'])) {

        $num_oc = $_GET['num_oc'];
        
        $rec_tes="SI";
        $pagado="SI";

//---------------------------------PAGADO = SI---------------------------------------------------------------------

        $conexion_adq2 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        

        $sql2 = "UPDATE bd_tesoreria SET pagado = ('$pagado') WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_adq2,$sql2);
        $conexion_adq2->close();

//----------------------------HORA DE ACTUALIZACION Y CONFIRMACION BASE GENERAL--------------------------------------------------------------------------

        $conexion_adq4 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");  

        date_default_timezone_set('America/New_York');
        $fecha_rec_adq = date("Y-m-d");

        $sql4 = "UPDATE datos_oc SET pagado = ('$pagado'), fecha_pagado = ('$fecha_rec_adq') WHERE num_oc = '$num_oc'";
  
        mysqli_query($conexion_adq4,$sql4);
        $conexion_adq4->close();

//------------------------------------------------------------------------------------------------------------------------------
        header("location: ../acciones_admin/actualizar_tes.php?rol=Administrador&area=Tesorería");
    }
?>