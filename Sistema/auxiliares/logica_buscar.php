<?php 
    $conexion=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");
    $buscar = $_POST['buscar_todo'] ?? null;

    if($buscar <> 0){
        $sql= "SELECT * FROM datos_oc WHERE num_oc LIKE '%".$buscar."%'";
        $numeroSql = mysqli_query($conexion,$sql);


        

    }
























?>