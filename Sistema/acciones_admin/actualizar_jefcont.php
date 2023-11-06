<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR</title>

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
?>


    <div class="col-12">
        <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card" style="background-color:#f0f0f0;">
                                <div class="card-body">
                                        <h1 class="card-title">BUSCAR OC</h1>
                                        <form id="form2" name="form2" method="POST" action="actualizar_jefcont.php?rol=Administrador&area=<?php echo $area?>">
                                                <div class="col-8">
                                                        <div class="input-group mb-3">
                                                                <label class="input-group-text">BUSCAR:</label>
                                                                <input type="text" class="form-control" placeholder="NºOC / Ud Neg / Empresa / Estación / Proveedor " aria-describedby="button-addon2" name="buscar1" >     
                                                                <label class="input-group-text">RECIBE JEF CONT:</label>
                                                                <select class="form-select" name="buscar2">
                                                                        <option value="">RECIBE JEF. CONTABILIDAD</option>
                                                                        <option value="SI">SI</option>
                                                                        <option value="NO">NO</option>
                                                                </select>                                                                            
                                                                <input type="submit" class="btn btn-outline-secondary" value="Ver" name="enviar">
                                                        </div>
                                                </div>
                                        </form>
                                        
                                        <?php 

                                        ?>
                                        <div class="row justify-content-between">
                                                <div class="d-grid gap-2 col-1 p-2 ">
                                                        <button onclick="location.href='../home_admin/home_jefcont.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-secondary btn-sm">VOLVER</button>
                                                
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
                                                                        <th style=" text-align: center;"> Recibido </th>   
                                                                                                                                                                                                              
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                        <?php if(isset($_POST['enviar'])){?>
                                                                        <?php        
                                                                                $buscar1 = $_POST['buscar1'];
                                                                                $buscar2 = $_POST['buscar2'];

                                                                                if(empty($_POST['buscar1']) && empty($_POST['buscar2'])){
                                                                                  
                                                                                        $sql= "SELECT * FROM bd_jef_cont";
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
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                        
                                                                                        
                                                                                        <script> 
                                                                                                var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                                checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                        
                                                                                                                window.location.href = '../logica_actualizar/log_act_jefcont.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                        
                                                                                                })
                                                                                                document.getElementById("pagexcel").onclick = function () {
                                                                                                    window.location.href = '../exportar_excel/excel_2.php';
                                                                                                };                                                                                        
                                                                                        </script>    
                                                                                
                                                                                </tr>   
        



                                                                                                
                                                                                <?php } ?>
                                                                                                
                                                                                <?php }else{
                                                                                        if(empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM bd_jef_cont WHERE num_oc LIKE '%".$buscar1."%' OR empresa LIKE '%".$buscar1."%' OR unidad_de_negocio LIKE '%".$buscar1."%' OR proveedor LIKE '%".$buscar1."%' OR area_solicitante LIKE '%".$buscar1."%'";
                                                                                        }
                                                                                        if(empty($_POST['buscar1'])){
                                                                                                $sql= "SELECT * FROM bd_jef_cont WHERE rec_jefcont LIKE '%".$buscar2."%'";
                                                                                        }
                                                                                        if(!empty($_POST['buscar1']) && !empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM bd_jef_cont WHERE rec_jefcont LIKE '%".$buscar2."%' AND num_oc LIKE '%".$buscar1."%' OR rec_jefcont LIKE '%".$buscar2."%' AND empresa LIKE '%".$buscar1."%' OR rec_jefcont LIKE '%".$buscar2."%' AND unidad_de_negocio LIKE '%".$buscar1."%' OR rec_jefcont LIKE '%".$buscar2."%' AND proveedor LIKE '%".$buscar1."%' OR rec_jefcont LIKE '%".$buscar2."%' AND area_solicitante LIKE '%".$buscar1."%'";
                                                                                        }
                                                                                $numeroSql = mysqli_query($conexion_adq1,$sql); 

                                                                                while($rowSql = mysqli_fetch_assoc($numeroSql)){ ?>
                                                                                        <tr>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                                <td style="text-align: center;"><?php echo $rowSql['fecha_emision']; ?></td>
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
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                                
                                                                                                
                                                                                                <script> 
                                                                                                        var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                                        checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                                
                                                                                                                        window.location.href = '../logica_actualizar/log_act_jefcont.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                                
                                                                                                        })
                                                                                                        document.getElementById("pagexcel").onclick = function () {
                                                                                                            window.location.href = '../exportar_excel/excel_2.php';
                                                                                                        };                                                                                        
                                                                                                </script>    
                                                                                        
                                                                                        </tr>   
                                                                                        <?php   }  ?>
                                                                                
                                                                                        <?php    } ?>
                                                                               

                                                                        
                                                                
                                                                        <?php  }else{  ?>
                                                                        <?php    ?>
                                                                        <?php   
                                                                                $buscar = $_POST['buscar1'] ?? null;
                                                                                $sql= "SELECT * FROM bd_jef_cont";
                                                                                $numeroSql = mysqli_query($conexion_adq1,$sql); 

                                                                                while($rowSql = mysqli_fetch_assoc($numeroSql)){?>
                                                                        <tr>
                                                                                <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['fecha_emision']; ?></td>
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
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                
                                                                                
                                                                                <script> 
                                                                                        var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                        checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                
                                                                                                        window.location.href = '../logica_actualizar/log_act_jefcont.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                
                                                                                        })
                                                                                        document.getElementById("pagexcel").onclick = function () {
                                                                                            window.location.href = '../exportar_excel/excel_2.php';
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