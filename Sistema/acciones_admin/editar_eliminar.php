<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar/Eliminar</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script> 
</head>
<body style="background-color:#f0f0f0;">


<?php 
$conexion_adq=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");

    
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
                                        <h1 class="card-title">BUSCAR OC / CAJA CHICA</h1>
                                        <form id="form2" name="form2" method="POST" action="actualizar_adq.php?rol=Administrador&area=<?php echo $area?>">
                                                <div class="col-4">
                                                        <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="Nº OC / Ud Neg / Empresa / Estación / Proveedor " aria-describedby="button-addon2" name="buscar" required>     
                                                                <input type="submit" class="btn btn-outline-secondary" value="Ver">
                                                        </div>
                                                </div>
                                        </form>
                                        
                                        <?php 
                                                $buscar = $_POST['buscar'] ?? null;
                                                $sql= "SELECT * FROM bd_adquisiciones WHERE num_oc LIKE '%".$buscar."%' OR empresa LIKE '%".$buscar."%' OR unidad_de_negocio LIKE '%".$buscar."%' OR proveedor LIKE '%".$buscar."%' OR area_solicitante LIKE '%".$buscar."%'";
                                                $numeroSql = mysqli_query($conexion_adq,$sql);
                                        ?>
                                        <div class="row justify-content-between">
                                                <div class="d-grid gap-2 col-1 p-2 ">
                                                        <button onclick="location.href='../home_admin/home_adq.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-secondary btn-sm">VOLVER</button>
                                                
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
                                                                        <th style=" text-align: center;"> Importe (Bs)</th>
                                                                        <th style=" text-align: center;"> Área Solicitante </th>
                                                                        <th style=" text-align: center;"> Devolver A </th>
                                                                        <th style=" text-align: center;"> Fecha Pago </th>
                                                                        <th style=" text-align: center;"> Editar </th>  
                                                                        <th style=" text-align: center;"> Eliminar </th>                                                                                                                                                                                                                
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php while ($rowSql = mysqli_fetch_array($numeroSql)){ ?>
                                                        
                                                                        <tr>
                                                                                <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                                                                                <td style="text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_emision'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_emision']));}?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['empresa']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['unidad_de_negocio']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['referencia']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['proveedor']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['documento']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['num_comprobante']; ?></td>                                                                
                                                                                <td style="text-align: center;"><?php echo $rowSql['importe']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['area_solicitante']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['devolver_a']; ?></td>
                                                                                <td style="text-align: center;"><?php echo $rowSql['fecha_pago']; ?></td>
                                                                                <td style="text-align: center;"><button type="button" class="btn btn-primary" id="<?php echo $rowSql['num_oc']."edit"; ?>" >EDITAR</button></td>
                                                                                <td style="text-align: center;"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal3" >ELIMINAR</button></td>
                                                                                
                                                <div class="modal fade" id="myModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="myModal">ELIMINAR</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label>¿Está seguro que desea eliminar la OC: <?php echo $rowSql['num_oc']; ?>?</label><br>                                
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger"  id="<?php echo $rowSql['num_oc']."delete"; ?>" >ELIMINAR</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                                                
                                                                                <script> 
                                                                                        var checkbox<?php echo $rowSql['num_oc']."edit"; ?> = document.getElementById('<?php echo $rowSql['num_oc']. "edit";?>');
                                                                                        checkbox<?php echo $rowSql['num_oc']."edit"; ?>.addEventListener('click', function () {
                                                                                                
                                                                                            window.location.href = 'editar.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                
                                                                                        });

                                                                                        var checkbox<?php echo $rowSql['num_oc']."delete"; ?> = document.getElementById('<?php echo $rowSql['num_oc']. "delete";?>');
                                                                                        checkbox<?php echo $rowSql['num_oc']."delete"; ?>.addEventListener('click', function () {
                                                                                                
                                                                                            window.location.href = 'eliminar.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                
                                                                                        });          

                                                                                </script>    
                                                                        
                                                                        </tr>
                                                        
                                                                <?php } ?>
                                                        </tbody>
                                                        </table>
                                                </div>


                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>