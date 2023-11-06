<?php

    if (isset($_GET['rol'])) {
        $rol=$_GET['rol'];
    }
    if (isset($_GET['area'])) {
        $area=$_GET['area'];
    }            

    if (isset($_FILES["archivo"]) && isset($_GET["num_oc"])) {
        $numero_orden = $_GET["num_oc"];
        $archivo_nombre = $_FILES["archivo"]["name"];
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        

        $directorio_destino = "../pdf_comprobantes/$numero_orden";


        if (move_uploaded_file($archivo_tmp, $directorio_destino.".pdf")) {
            header("location:../acciones_admin/actualizar_tes.php?rol=Administrador&area=Tesorería");
        }
    }   
    else {
        echo "Debes seleccionar un archivo y proporcionar un número de orden.";
    }
?>