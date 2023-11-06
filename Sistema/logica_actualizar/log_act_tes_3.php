<?php
    if (isset($_GET['num_oc'])) {

        $num_oc = $_GET['num_oc'];
        $fecha_prog = $_GET['fechaprog'];

        //---------------------------------RECIBE TESORERIA = SI---------------------------------------------------------------------        

        $conexion1 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");        
                
        $sql1 = "UPDATE bd_tesoreria SET fecha_programada = ('$fechaprog') WHERE num_oc = '$num_oc'";

        mysqli_query($conexion1,$sql1);
        $conexion1->close();        

        header("location:../acciones_admin/actualizar_tes.php?rol=Administrador&area=Tesorería");








    }





?>