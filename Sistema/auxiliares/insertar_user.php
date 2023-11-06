<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="/logica/css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
        
    <?php
    if (isset($_GET['area'])) {
        $area=$_GET['area'];
    }   

    $conexionn=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die(
        "error de conexion");

    $n_oc=$_POST['n_oc'];
    $fecha_emision=$_POST['fecha_emision'];
    $empresa=$_POST['empresa'];
    $unidaddenegocio=$_POST['unidaddenegocio'];
    $proveedor=$_POST['proveedor'];
    $documento=$_POST['documento'];
    $num_comprobante=$_POST['num_comprobante'];
    $importe=$_POST['importe'];
    $fecha_pago=$_POST['fecha_pago'];
    $devolver_pago=$_POST['devolver_pago'];
    $area_solicitante=$_POST['areasolicitante'];
    $referencia=$_POST['referencia'];
    $recibe="NO";
  
    $sql2 = "INSERT INTO datos_oc       (num_oc, fecha_emision, empresa, unidad_de_negocio, proveedor,
                                        documento, num_comprobante, importe, fecha_pago, devolver_a,
                                        area_solicitante, referencia, rec_adq, rec_ger, rec_jefcont, rec_cont, rec_tes, pagado) 
                                        VALUES ('$n_oc','$fecha_emision','$empresa','$unidaddenegocio','$proveedor',
                                        '$documento','$num_comprobante','$importe','$fecha_pago','$devolver_pago',
                                        '$area_solicitante','$referencia','$recibe','$recibe','$recibe','$recibe','$recibe','$recibe')";
                                        
    mysqli_query($conexionn,$sql2);
    
    $sql1="INSERT INTO bd_adquisiciones  (num_oc, fecha_emision, empresa, unidad_de_negocio, 
                                        proveedor, documento, num_comprobante, importe, fecha_pago, devolver_a, 
                                        area_solicitante, referencia, rec_adq) 
                                        VALUES ('$n_oc','$fecha_emision','$empresa',
                                        '$unidaddenegocio','$proveedor','$documento','$num_comprobante',
                                        '$importe','$fecha_pago','$devolver_pago','$area_solicitante',
                                        '$referencia','$recibe')";
    mysqli_query($conexionn,$sql1);
    mysqli_close($conexionn);

        header("location:../home_user/home_user.php?rol=Administrador&area=$area");   

    ?>

</body>
