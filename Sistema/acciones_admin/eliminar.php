<?php
    if (isset($_GET['num_oc'])) {
        $num_oc = $_GET['num_oc'];
    
   
//------------------------------------------------------------------------------------------------------------------------    

        $conexion_1 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql1 =  "DELETE FROM datos_oc WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_1,$sql1);

        $conexion_1->close();    

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_2 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql2 =  "DELETE FROM bd_adquisiciones WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_2,$sql2);

        $conexion_2->close();  

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_3 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql3 =  "DELETE FROM bd_gerencia WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_3,$sql3);

        $conexion_3->close();  

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_4 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql4 =  "DELETE FROM bd_pos_adquisiciones WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_4,$sql4);

        $conexion_4->close();    

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_5 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql5 =  "DELETE FROM bd_jef_cont WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_5,$sql5);

        $conexion_5->close(); 
        
//------------------------------------------------------------------------------------------------------------------------    

        $conexion_6 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql6 =  "DELETE FROM bd_contadores WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_6,$sql6);

        $conexion_6->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_7 = new mysqli("localhost","root","","basededatos_sistema_seguimiento");

        $sql7 =  "DELETE FROM bd_tesoreria WHERE num_oc = '$num_oc'";

        mysqli_query($conexion_7,$sql7);

        $conexion_7->close(); 

//------------------------------------------------------------------------------------------------------------------------

        header("location: editar_eliminar.php?rol=Administrador&area=Adquisiciones");  

    }
?>