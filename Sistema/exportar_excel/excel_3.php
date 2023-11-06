<?php 
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename= archivo.xls");

    $conexion_adq=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");

    $buscar = $_POST['buscar'] ?? null;
    $sql= "SELECT * FROM bd_gerencia WHERE num_oc LIKE '%".$buscar."%' OR empresa LIKE '%".$buscar."%' OR unidad_de_negocio LIKE '%".$buscar."%' OR proveedor LIKE '%".$buscar."%' OR area_solicitante LIKE '%".$buscar."%'";
    $numeroSql = mysqli_query($conexion_adq,$sql);
?>
<table class="table">
<thead>
        <tr style="background-color: #63C2E9; color:#ffffff;">
                <th style=" text-align: center;"> N° OC </th>
                <th style=" text-align: center;"> Fecha Emisión </th>
                <th style=" text-align: center;"> Unidad de Negocio </th>
                <th style=" text-align: center;"> Empresa </th>
                <th style=" text-align: center;"> Referencia </th>
                <th style=" text-align: center;"> Proveedor </th>
                <th style=" text-align: center;"> Documento </th>
                <th style=" text-align: center;"> Num Comp </th>
                <th style=" text-align: center;"> Importe </th>
                <th style=" text-align: center;"> Área Solicitante </th>
                <th style=" text-align: center;"> Devolver A </th>
                <th style=" text-align: center;"> Fecha Pago </th>
                <th style=" text-align: center;"> Recibe Ger </th>   
                                                                                                                                                        
        </tr>
</thead>
<tbody>
        <?php while ($rowSql = mysqli_fetch_array($numeroSql)){ ?>

                <tr>
                        <td style="text-align: center;"><?php echo $rowSql['num_oc']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['fecha_emision']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['unidad_de_negocio']; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql['empresa']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['referencia']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['proveedor']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['documento']; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql['num_comprobante']; ?></td>                                                                
                        <td style="text-align: center;"><?php echo $rowSql['importe']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['area_solicitante']; ?></td>
                        <td style="text-align: center;"><?php echo $rowSql['devolver_a']; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql['fecha_pago']; ?></td>
                        <td style=" text-align: center;"><?php echo $rowSql['rec_adq_pos']; ?></td>
                        
                        

                
                </tr>

        <?php } ?>
</tbody>
</table>