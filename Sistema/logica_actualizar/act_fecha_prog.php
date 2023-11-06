<?php
    if (isset($_GET['num_oc'])) {


        $num_oc = $_GET['num_oc'];
        
        $rec_ger="NO";
        $rec_adq="SI";

 
        $conexion_adq4 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");  

        date_default_timezone_set('America/New_York');
        $fecha_rec_adq = $_POST['fecha_prog'];

        $sql4 = "UPDATE bd_tesoreria SET fecha_programada = ('$fecha_rec_adq') WHERE num_oc = '$num_oc'";
  
        mysqli_query($conexion_adq4,$sql4);
        $conexion_adq4->close();
//------------------------------------------------------------------------------------------------------

        header("location: ../acciones_admin/actualizar_tes.php?rol=Administrador&area=Adquisiciones");
    } 
?>