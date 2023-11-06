<?php

    
        $num_oc=$_POST['num_oc1'];
        $fecha_emision=$_POST['fecha_emision1'];
        $empresa=$_POST['empresa1'];
        $unidaddenegocio=$_POST['unidad_de_negocio1'];
        $proveedor=$_POST['proveedor1'];
        $documento=$_POST['documento1'];
        $num_comprobante=$_POST['num_comprobante1'];
        $importe=$_POST['importe1'];
        $fecha_pago=$_POST['fecha_pago1'];
        $devolver_pago=$_POST['devolver_a1'];
        $area_solicitante=$_POST['area_solicitante1'];
        $referencia=$_POST['referencia1'];
//------------------------------------------------------------------------------------------------------------------------    

        $conexion_1 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql1 =     "UPDATE datos_oc SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_1,$sql1);

        $conexion_1->close();   
        
        
//------------------------------------------------------------------------------------------------------------------------    

        $conexion_2 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql2 =     "UPDATE bd_adquisiciones SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_2,$sql2);

        $conexion_2->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_3 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql3 =     "UPDATE bd_gerencia SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_3,$sql3);

        $conexion_3->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_4 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql4 =     "UPDATE bd_pos_adquisiciones SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_4,$sql4);

        $conexion_4->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_5 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql5 =     "UPDATE bd_jef_cont SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_5,$sql5);

        $conexion_5->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_6 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql6 =     "UPDATE bd_contadores SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_6,$sql6);

        $conexion_6->close(); 

//------------------------------------------------------------------------------------------------------------------------    

        $conexion_7 = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento");

        $sql7 =     "UPDATE bd_tesoreria SET 
                        fecha_emision = '".$fecha_emision."', empresa = '".$empresa."', unidad_de_negocio = '".$unidaddenegocio."',
                        proveedor = '".$proveedor."', documento = '".$documento."', num_comprobante = '".$num_comprobante."', importe = '".$importe."', 
                        fecha_pago = '".$fecha_pago."', devolver_a = '".$devolver_pago."', area_solicitante = '".$area_solicitante."', 
                        referencia = '".$referencia."'
                    WHERE num_oc = '".$num_oc."'";

        mysqli_query($conexion_7,$sql7);

        $conexion_7->close(); 

//------------------------------------------------------------------------------------------------------------------------

        header("location: ../acciones_admin/editar_eliminar.php?rol=Administrador&area=Adquisiciones");  

    
?>