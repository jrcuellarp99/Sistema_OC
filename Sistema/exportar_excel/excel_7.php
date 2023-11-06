<?php 
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= archivo.xls");

    $conexion_adq1=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");

?>
<table class="table">
                                                        <thead>
                                                                <tr style="background-color: #63C2E9; color:#ffffff;">
                                                                        <th style=" text-align: center;"> Num OC </th>
                                                                        <th style=" text-align: center;"> Fecha Emision </th>
                                                                        <th style=" text-align: center;"> Empresa/Ud Negocio </th>
                                                                        <th style=" text-align: center;"> Estacion </th>
                                                                        <th style=" text-align: center;"> Referencia </th>
                                                                        <th style=" text-align: center;"> Proveedor </th>
                                                                        <th style=" text-align: center;"> Documento </th>
                                                                        <th style=" text-align: center;"> Num Comp </th>
                                                                        <th style=" text-align: center;"> Importe (BS) </th>
                                                                        <th style=" text-align: center;"> Area Solicitante </th>
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
                                                                                $buscar1 = $_POST['buscar1'];
                                                                                $buscar2 = $_POST['buscar2'];
                                                                                $nada = "";

                                                                                if(empty($_POST['buscar1']) && empty($_POST['buscar2'])){
                                                                                  
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
                                                                                        <td style=" text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_pago'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pago']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                        <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                                
                                                                                        <script> 
                                                                                                document.getElementById("pagexcel").onclick = function () {
                                                                                                    window.location.href = '../exportar_excel/excel_2.php';
                                                                                                };                                                                                        
                                                                                        </script>    
                                                                                
                                                                                </tr>   
        



                                                                                                
                                                                                <?php } ?>
                                                                                                
                                                                                <?php }else{
                                                                                        if(empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE num_oc LIKE '%".$buscar1."%' OR empresa LIKE '%".$buscar1."%' OR unidad_de_negocio LIKE '%".$buscar1."%' OR proveedor LIKE '%".$buscar1."%' OR area_solicitante LIKE '%".$buscar1."%'";
                                                                                        }
                                                                                        if(empty($_POST['buscar1'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE rec_adq_pos LIKE '%".$buscar2."%'";
                                                                                        }
                                                                                        if(!empty($_POST['buscar1']) && !empty($_POST['buscar2'])){
                                                                                                $sql= "SELECT * FROM datos_oc WHERE rec_adq_pos LIKE '%".$buscar2."%' AND num_oc LIKE '%".$buscar1."%' OR rec_adq_pos LIKE '%".$buscar2."%' AND empresa LIKE '%".$buscar1."%' OR rec_adq_pos LIKE '%".$buscar2."%' AND unidad_de_negocio LIKE '%".$buscar1."%' OR rec_adq_pos LIKE '%".$buscar2."%' AND proveedor LIKE '%".$buscar1."%' OR rec_adq_pos LIKE '%".$buscar2."%' AND area_solicitante LIKE '%".$buscar1."%'";
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
                                                                                                <td style=" text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_pago'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pago']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                                <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                                                        
                                                                                                
                                                                                                <script> 
                                                                                                       
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
                                                                                <td style=" text-align: center;"><?php if(date("d/m/Y", strtotime($rowSql['fecha_pago'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pago']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_ger']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_jefcont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_cont']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['rec_tes']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?></td>
                                                                                <td style=" text-align: center;"><?php echo $rowSql['pagado']; ?><br><?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?></td>
                                                                                
                                                                        
                                                                                
                                                                                <script> 
                                                                                        
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