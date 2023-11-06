<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO JEF CONTABILIDAD</title>
    <link rel="stylesheet" href="logica/css/styles_home_admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
        <?php 
            if (isset($_GET['rol'])) {
                $rol=$_GET['rol'];
            }
            if (isset($_GET['area'])) {
                $area=$_GET['area'];
            }            
        ?>
<body style="background-color:#f0f0f0;"> 
    <div class="container p-3">
        <div class="row justify-content-between">
            <div class="col-4">
                <p class="text-sm-start mb-1">ROL:<?php echo " ".$rol?></p>
                <p class="text-sm-start">AREA:<?php echo " ".$area?></p>
            </div>
            <div class="col-1">
                <div class="d-grid gap-2 p-2 ">
                    <button onclick="location.href='../login'" class="btn btn-secondary btn-sm">SALIR</button>              
                </div>
            </div>            
        </div>
    </div>
    <div class="container text-center ">
        <div class="text-end">
            <img src="../logos/BIO_LOGO_OFICIAL.jpeg" class="rounded" alt="../logos/BIO_LOGO_OFICIAL.jpeg" width="250" height="250">
        </div>                  
    </div>      
    <div class="container text-center">
        <div class="row position-absolute top-50 start-50 translate-middle">
            <div class="title text-center fs-1">SISTEMA DE SEGUIMIENTO DE OC</div><br><br><br> 
            
            <div class="d-grid gap-2 col-6 mx-auto p-2">
                <button onclick="location.href='../acciones_generales/buscar_jefcont.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-primary">BUSCAR OC</button>      
            </div> 

            <div class="d-grid gap-2 col-6 mx-auto p-2">
                <button onclick="location.href='../acciones_generales/formulario_jefcont.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-primary">INSERTAR FORMULARIO DE OC</button>    
            </div> 
            
            <div class="d-grid gap-2 col-6 mx-auto p-2">
                <button onclick="location.href='../acciones_admin/actualizar_jefcont.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-primary">ACTUALIZAR UBICACIÓN DE OC</button>    
            </div> 
            <div class="d-grid gap-2 col-6 mx-auto p-2">
                    <button onclick="location.href='../acciones_admin/base_de_datos.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-primary">BASE DE DATOS GENERAL</button>    
            </div>
         </div>
    </div>
</body>