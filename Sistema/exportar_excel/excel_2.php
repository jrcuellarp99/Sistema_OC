<?php 
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= archivo.xls");

    $conexion_adq=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");

    $buscar = $_POST['buscar'] ?? null;
    $sql= "SELECT * FROM bd_adquisiciones WHERE num_oc LIKE '%".$buscar."%' OR empresa LIKE '%".$buscar."%' OR unidad_de_negocio LIKE '%".$buscar."%' OR proveedor LIKE '%".$buscar."%' OR area_solicitante LIKE '%".$buscar."%'";
    $numeroSql = mysqli_query($conexion_adq,$sql);
?>
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
                                                                                  
                                                                                        $sql= "SELECT * FROM bd_adquisiciones";
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
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                        
                                                                                        
                                                                                        <script> 
                                                                                                var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                                checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                        
                                                                                                                window.location.href = '../logica_actualizar/log_act_adq.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                        
                                                                                                })
                                                                                                document.getElementById("pagexcel").onclick = function () {
                                                                                                    window.location.href = '../exportar_excel/excel_2.php';
                                                                                                };                                                                                        
                                                                                        </script>    
                                                                                
                                                                                </tr>   
        



                                                                                                
                                                                                <?php } ?>
                                                                                                
                                                                                <?php }else{
                                                                                        if(empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM bd_adquisiciones WHERE num_oc LIKE '%".$buscar1."%' OR empresa LIKE '%".$buscar1."%' OR unidad_de_negocio LIKE '%".$buscar1."%' OR proveedor LIKE '%".$buscar1."%' OR area_solicitante LIKE '%".$buscar1."%'";
                                                                                        }
                                                                                        if(empty($_POST['buscar1'])){
                                                                                                $sql= "SELECT * FROM bd_adquisiciones WHERE rec_adq LIKE '%".$buscar2."%'";
                                                                                        }
                                                                                        if(!empty($_POST['buscar1']) && !empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM bd_adquisiciones WHERE rec_adq LIKE '%".$buscar2."%' AND num_oc LIKE '%".$buscar1."%' OR rec_adq LIKE '%".$buscar2."%' AND empresa LIKE '%".$buscar1."%' OR rec_adq LIKE '%".$buscar2."%' AND unidad_de_negocio LIKE '%".$buscar1."%' OR rec_adq LIKE '%".$buscar2."%' AND proveedor LIKE '%".$buscar1."%' OR rec_adq LIKE '%".$buscar2."%' AND area_solicitante LIKE '%".$buscar1."%'";
                                                                                        }
                                                                                $numeroSql = mysqli_query($conexion_adq1,$sql); 

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
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                                
                                                                                                
                                                                                                <script> 
                                                                                                        var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                                        checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                                
                                                                                                                        window.location.href = '../logica_actualizar/log_act_adq.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                                
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
                                                                                $sql= "SELECT * FROM bd_adquisiciones";
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
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><button type="button" style="width: 20px; height: 15px;" id="<?php echo $rowSql['num_oc']; ?>" ></button></td>
                                                                                
                                                                                
                                                                                <script> 
                                                                                        var checkbox<?php echo $rowSql['num_oc']; ?> = document.getElementById('<?php echo $rowSql['num_oc'];?>');
                                                                                        checkbox<?php echo $rowSql['num_oc']; ?>.addEventListener('click', function () {
                                                                                                
                                                                                                        window.location.href = '../logica_actualizar/log_act_adq.php?num_oc=<?php echo $rowSql['num_oc']; ?>';
                                                                                                
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