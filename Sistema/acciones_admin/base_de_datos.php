<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASE DE DATOS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>    
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body style="background-color:#f0f0f0;">


<?php 
$conexion_adq1=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");
$conexion_adq2=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");
    
?>
<?php
        if (isset($_GET['area'])) {
                $area=$_GET['area'];
        } 
        if($area == "Adquisiciones"){
                $indice = "adq";
        }
        if($area == "Gerencia"){
                $indice = "ger";
        }
        if($area == "Jefatura Contabilidad"){
                $indice = "jefcont";
        }
        if($area == "Contabilidad"){
                $indice = "cont";
        }
        if($area == "Tesoreria"){
                $indice = "tes";
        }

     
?>


    <div class="col-12">
        <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card" style="background-color:#f0f0f0;">
                                <div class="card-body">
                                        <h1 class="card-title">BASE DE DATOS GENERAL</h1>
                                        <form id="form2" name="form2" method="POST" action="base_de_datos.php?rol=Administrador&area=<?php echo $area?>">
                                                <div class="col-12">
                                                        <div class="input-group mb-3">
                                                                <label class="input-group-text">Buscar:</label>
                                                                <input type="text" class="form-control" aria-describedby="button-addon2" name="buscar_oc" placeholder="OC / Caja Chica">     
                                                                <select class="form-select" name="buscar_empresa" >
                                                                        <option value="">UD Negocio / Empresa</option>
                                                                        <option value="REFINERIA ORIENTAL SA" >REFINERIA ORIENTAL SA</option>
                                                                        <option value="PIRAI SRL" >PIRAI SRL</option>
                                                                        <option value="SUR SRL" >SUR SRL</option>
                                                                        <option value="BELLGAS SRL" >BELLGAS SRL</option>
                                                                        <option value="CEDEÑO" >CEDEÑO</option>
                                                                        <option value="GASCO SRL" >GASCO SRL</option>
                                                                        <option value="INTPETROL SRL" >INTPETROL SRL</option>
                                                                        <option value="BIOPETROL SA" >BIOPETROL SA</option>
                                                                        <option value="SEIQ SRL" >SEIQ SRL</option>
                                                                        <option value="WOW RETAIL SA" >WOW RETAIL SA</option>
                                                                        <option value="FIREBOL SRL" >FIREBOL SRL</option>
                                                                        <option value="TARIFA SRL" >TARIFA SRL</option>
                                                                        <option value="RONAL IRIARTE PLATA" >RONALD IRIARTE PLATA</option>
                                                                        <option value="EESS HARDEMANALI SRL" >EESS HARDEMANALI SRL</option>
                                                                </select>  
                                                                <select class="form-select" name="buscar_estacion" >
                                                                        <option value="">Estación / Sucursal</option>
                                                                        <option value="ALEMANA" >ALEMANA</option>
                                                                        <option value="BELLGAS" >BELLGAS</option>
                                                                        <option value="BENI" >BENI</option>
                                                                        <option value="BEREA" >BEREA</option>
                                                                        <option value="BIOPETORL" >BIOPETROL</option>
                                                                        <option value="CABEZAS" >CABEZAS</option>
                                                                        <option value="CEDEÑO" >CEDEÑO</option>
                                                                        <option value="CHACO GAS" >CHACO GAS</option>
                                                                        <option value="EQUIPETROL" >EQUIPETROL</option>
                                                                        <option value="GASCO" >GASCO</option>
                                                                        <option value="INTPETROL" >INTPETROL</option>
                                                                        <option value="LA PASCANA" >LA PASCANA</option>
                                                                        <option value="LOPEZ" >LOPEZ</option>
                                                                        <option value="LUCIFER" >LUCIFER</option>
                                                                        <option value="MONTECRISTO" >MONTECRISTO</option>
                                                                        <option value="MONTEVERDE" >MONTEVERDE</option>
                                                                        <option value="PARAPETI" >PARAPETI</option>
                                                                        <option value="PIRAI" >PIRAI</option>
                                                                        <option value="ROYAL" >ROYAL</option>  
                                                                        <option value="SEIQ" >SEIQ</option>
                                                                        <option value="SUR CENTRAL" >SUR CENTRAL</option>
                                                                        <option value="TARIFA" >TARIFA</option>
                                                                        <option value="TECA" >TECA</option>
                                                                        <option value="UNIVERSITARIO" >UNIVERSITARIO</option> 
                                                                        <option value="VIRU VIRU" >VIRU VIRU</option> 
                                                                </select>   
                                                                <input type="text" name="buscar_proveedor"  class="form-control" placeholder="Proveedor">   
                                                                <select name="buscar_areasolicitante" class="form-select">
                                                                        <option value>Area Solicitante</option>
                                                                        <option value="ADQUSICIONES" >ADQUISICIONES</option>
                                                                        <option value="COMERCIAL" >COMERCIAL</option>
                                                                        <option value="CONTABILIDAD" >CONTABILIDAD</option>
                                                                        <option value="ESTACIONES" >ESTACIONES</option>
                                                                        <option value="GERENCIA" >GERENCIA</option>
                                                                        <option value="LOGÍSTICA" >LOGÍSTICA</option>
                                                                        <option value="MANTENIMIENTO" >MANTENIMIENTO</option>
                                                                        <option value="OPERACIONES" >OPERACIONES</option>
                                                                        <option value="SEG. Y MEDIO AMB." >SEGURIDAD Y MEDIO AMBIENTE</option>
                                                                        <option value="SEIQ" >SEIQ</option>
                                                                        <option value="SISTEMAS" >SISTEMAS</option>
                                                                        <option value="TALENTO HUMANO" >TALENTO HUMANO</option>
                                                                        <option value="WOW - ADM" >WOW - ADM</option>
                                                                        <option value="BIOPETROL" >BIOPETROL</option>
                                                                        <option value="OTROS" >OTROS</option>                            
                                                                </select>                                                                   
                                                                <input type="submit" class="btn btn-outline-secondary" value="Ver" name="enviar">
                                                        </div>
                                                </div>
                                        </form>
                                        
                                        <?php 

                                        ?>
                                        <div class="row justify-content-between">
                                                <div class="d-grid gap-2 col-1 p-2 ">
                                                        <button onclick="location.href='../home_admin/home_<?php echo $indice?>.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-secondary btn-sm">VOLVER</button>
                                                
                                                </div>
                                                <div class="col-1 d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <input type="submit" id="pagexcel" class="btn btn-success" value="Descargar Excel">
                                                </div>                                                 
                                        </div><br>

                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead>
                                                                <tr style="background-color: #63C2E9; color:#ffffff;">
                                                                        <th style=" text-align: center;"> N° OC </th>
                                                                        <th style=" text-align: center;"> Fecha Emisión </th>
                                                                        <th style=" text-align: center;"> Empresa/Ud Negocio </th>
                                                                        <th style=" text-align: center;"> Estación </th>
                                                                        <th style=" text-align: center;"> Referencia </th>
                                                                        <th style=" text-align: center;"> Proveedor </th>
                                                                        <th style=" text-align: center;"> Documento </th>
                                                                        <th style=" text-align: center;"> Num Comp </th>
                                                                        <th style=" text-align: center;"> Importe (BS) </th>
                                                                        <th style=" text-align: center;"> Área Solicitante </th>
                                                                        <th style=" text-align: center;"> Devolver A </th>
                                                                        <th style=" text-align: center;"> Fecha de Pago </th>
                                                                        <th style=" text-align: center;"> Adquisiciones 1</th>
                                                                        <th style=" text-align: center;"> Gerencia </th>
                                                                        <th style=" text-align: center;"> Adquisiciones 2</th>
                                                                        <th style=" text-align: center;"> Jefatura Contabilidad </th>
                                                                        <th style=" text-align: center;"> Contabilidad </th>
                                                                        <th style=" text-align: center;"> Tesoreria </th>
                                                                        <th style=" text-align: center;"> OC Pagado </th> 
                                                                           
                                                                                                                                                                                                              
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                        <?php if(isset($_POST['enviar'])){?>
                                                                        <?php        
                                                                                $buscar_oc = $_POST['buscar_oc'];
                                                                                $buscar_empresa = $_POST['buscar_empresa'];
                                                                                $buscar_estacion = $_POST['buscar_estacion'];
                                                                                $buscar_proveedor = $_POST['buscar_proveedor'];
                                                                                $buscar_areasolicitante = $_POST['buscar_areasolicitante'];
                                                                               
                                                                                $nada = "";

                                                                                if(empty($_POST['buscar_oc']) && empty($_POST['buscar_empresa']) && empty($_POST['buscar_estacion']) && empty($_POST['buscar_proveedor']) && empty($_POST['buscar_areasolicitante'])){
                                                                                  
                                                                                        $sql= "SELECT * FROM datos_oc";
                                                                                        $numeroSql = mysqli_query($conexion_adq1,$sql); 
        
                                                                                        while($rowSql = mysqli_fetch_assoc($numeroSql)){?>
                                                                                <tr>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                        <td style="text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_emision'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_emision']));}?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['empresa']; ?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['unidad_de_negocio']; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['referencia']; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['proveedor']; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['documento']; ?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['num_comprobante']; ?></td>                                                                
                                                                                        <td style="text-align: center;"><?php echo $rowSql['importe']; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['area_solicitante']; ?></td>
                                                                                        <td style="text-align: center;"><?php echo $rowSql['devolver_a']; ?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['fecha_pago']; ?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                                
                                                                                        <script> 
                                                                                                document.getElementById("pagexcel").onclick = function () {
                                                                                                    window.location.href = '../exportar_excel/excel_datos_oc.php';
                                                                                                };                                                                                        
                                                                                        </script>    
                                                                                
                                                                                </tr>   
        



                                                                                                
                                                                                <?php } ?>
                                                                                                
                                                                                <?php }else{
                                                                                        //Busqueda de OC
                                                                                        if(!empty($_POST['buscar_oc']) && empty($_POST['buscar_empresa']) && empty($_POST['buscar_estacion']) && empty($_POST['buscar_proveedor']) && empty($_POST['buscar_areasolicitante'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE num_oc LIKE '%".$buscar_oc."%' OR fecha_rec_adq_pos LIKE '%".$buscar_oc."%'";
                                                                                        }
                                                                                        //Busqueda de Empresa
                                                                                        if(!empty($_POST['buscar_empresa']) && empty($_POST['buscar_oc']) && empty($_POST['buscar_estacion']) && empty($_POST['buscar_proveedor']) && empty($_POST['buscar_areasolicitante'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE empresa LIKE '%".$buscar_empresa."%'";
                                                                                        }
                                                                                        //Busqueda de Estacion
                                                                                        if(!empty($_POST['buscar_estacion']) && empty($_POST['buscar_oc']) && empty($_POST['buscar_empresa']) && empty($_POST['buscar_proveedor']) && empty($_POST['buscar_areasolicitante'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE unidad_de_negocio LIKE '%".$buscar_estacion."%'";
                                                                                        }
                                                                                        //Busqueda de Proveedor
                                                                                        if(!empty($_POST['buscar_proveedor']) && empty($_POST['buscar_oc']) && empty($_POST['buscar_estacion']) && empty($_POST['buscar_empresa']) && empty($_POST['buscar_areasolicitante'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE proveedor LIKE '%".$buscar_proveedor."%'";
                                                                                        }                                                                                        
                                                                                        //Busqueda de Area Solicitante
                                                                                        if(!empty($_POST['buscar_areasolicitante']) && empty($_POST['buscar_oc']) && empty($_POST['buscar_estacion']) && empty($_POST['buscar_proveedor']) && empty($_POST['buscar_empresa'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE area_solicitante LIKE '%".$buscar_areasolicitante."%'";
                                                                                        }
                                                                                  

                                                                                $numeroSql = mysqli_query($conexion_adq1,$sql); 
                                                                                $nada = ""; 

                                                                                while($rowSql = mysqli_fetch_assoc($numeroSql)){ ?>
                                                                                        <tr>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                                <td style="text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_emision'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_emision']));}?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['empresa']; ?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['unidad_de_negocio']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['referencia']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['proveedor']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['documento']; ?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['num_comprobante']; ?></td>                                                                
                                                                                                <td style="text-align: center;"><?php echo $rowSql['importe']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['area_solicitante']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['devolver_a']; ?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['fecha_pago']; ?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                                                        
                                                                                                
                                                                                                <script> 
                                                                                                       
                                                                                                        document.getElementById("pagexcel").onclick = function () {
                                                                                                            window.location.href = '../exportar_excel/excel_datos_oc.php';
                                                                                                        };                                                                                        
                                                                                                </script>    
                                                                                        
                                                                                        </tr>   
                                                                                        <?php   }  ?>
                                                                                
                                                                                        <?php    } ?>
                                                                               

                                                                        
                                                                
                                                                        <?php  }else{  ?>
                                                                        <?php    ?>
                                                                        <?php   
                                                                                
                                                                                $sql= "SELECT * FROM datos_oc";
                                                                                $numeroSql = mysqli_query($conexion_adq1,$sql);
                                                                                $nada = ""; 

                                                                                while($rowSql = mysqli_fetch_assoc($numeroSql)){?>
                                                                        <tr>
                                                                                <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                <td style="text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_emision'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_emision']));}?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['empresa']; ?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['unidad_de_negocio']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['referencia']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['proveedor']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['documento']; ?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['num_comprobante']; ?></td>                                                                
                                                                                <td style="text-align: center;"><?php echo $rowSql['importe']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['area_solicitante']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['devolver_a']; ?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['fecha_pago']; ?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                
                                                                        
                                                                                
                                                                                <script> 
                                                                                        
                                                                                        document.getElementById("pagexcel").onclick = function () {
                                                                                            window.location.href = '../exportar_excel/excel_datos_oc.php';
                                                                                        };                                                                                        
                                                                                </script>   
                                                                        
                                                                        </tr>   
                                                                        <?php  }  ?>                                                                         
                                                                <?php  }  ?>


                                                        
                                                        </tr>
                                        
                                             
                                                        </tbody>
                                                        </table>
                                                </div>


                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>


</body>
</html>