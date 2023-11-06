<?php
if (isset($_GET['area'])) {
    $area=$_GET['area'];
}     

if($area == "Adquisiciones"){
    $indice = "adq";
}
else if($area == "Gerencia"){
    $indice = "ger";
}
else if($area == "Contabilidad"){
    $indice = "cont";
}
else if($area == "Jefatura Contabilidad"){
    $indice = "jefcont";
}
else if($area == "Tesorería"){
    $indice = "tes";
}
else {
    $indice = "user";
}


if (isset($_GET["num_oc"])) {

    $numero_orden = $_GET["num_oc"];
    
    $directorio_destino = "../pdf_comprobantes/";

    $archivo_a_descargar = $directorio_destino . $numero_orden . '.pdf';

    if (file_exists($archivo_a_descargar)) {

        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf'); 
        header('Content-Disposition: attachment; filename="' . basename($archivo_a_descargar) . '"');
        header('Content-Length: ' . filesize($archivo_a_descargar));

        readfile($archivo_a_descargar);
        exit;
    } else {

        header("location:../acciones_generales/buscar_$indice.php?rol=Usuario&area=$area");
        echo "<script> alert('NO SE ENCUENTRA UN ARCHIVO DE COMPROBANTE DE PAGO'); </script>";
        
    }
}
?>






