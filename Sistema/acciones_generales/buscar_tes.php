<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUSQUEDA</title>
    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#f0f0f0;">
    <div class="container">
        <div class="row">
            <div class="title text-center fs-1 fst-italic">SISTEMA DE SEGUIMIENTO DE OC</div><br>

        </div>
            
        <form action="" method="POST">
            <div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Buscar:</span> 
                            <input type="text" class="form-control" placeholder="Nº OC / CAJA CHICA" aria-describedby="button-addon2" name="buscar_todo" required>     
                            <input type="submit" class="btn btn-outline-secondary" value="BUSCAR"><br>
                        </div>
                    </div>
                <?php  
            $conexion=mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");
            $buscar = $_POST['buscar_todo'] ?? null;
            $nada = "";

            $sql= "SELECT * FROM datos_oc WHERE num_oc LIKE '%".$buscar."%'";
            $numeroSql = mysqli_query($conexion,$sql);   
            $rowSql = mysqli_fetch_array($numeroSql);

              
            if($buscar == null){?>
            
            <div class="row">
                    <div class="col-1"></div>
                            
                      
                    <div class="col-3">
                        <label for="n" class="fw-bold">Nº OC:</label><br>               
                        <input type="text" value="<?php echo $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA EMISION:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-1">
    
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA RECIBIDO ADQ:</label> <br>      
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>           
                    </div>                
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">EMPRESA/UD NEGOCIO:</label>  <br>              
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">ESTACIÓN:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-1">
                        
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA INGRESO GERENCIA:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>                  
                </div>
                <div class="row">
                    <div class="col-1"></div>                    
                    <div class="col-3">
                        <label for="n" class="fw-bold">PROVEEDOR:</label>          <br>      
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">DOCUMENTO:</label>     <br>           
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-1">
                      
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA SALIDA GERENCIA:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>                     
                </div>
                <div class="row">
                <div class="col-1"></div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">NUM COMPROBANTE:</label>    <br>            
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">IMPORTE (BS):</label>  <br>              
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-1">
                      
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA RECIBIDO JEF CONT:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>                  
                </div>
                <div class="row">
                <div class="col-1"></div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA DE PAGO:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">DEVOLVER A:</label>  <br>              
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-1">
                
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA RECIBIDO CONTADORES:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>  
                </div>
                <div class="row">
                <div class="col-1"></div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">ÁREA SOLICITANTE:</label> <br>               
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>
                    <div class="col-2">
                       
                    </div>
                    <div class="col-2">
                        
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA RECIBIDO TESORERIA:</label>            
                        <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
                    </div>                
                </div>    
                <div class="row">
                <div class="col-1"></div>
                    <div class="col-6">
                        <label for="n" class="fw-bold">REFERENCIA:</label>     <br>           
                        <textarea type="text" rows="2" cols="77" disabled><?php echo  $nada; ?> </textarea>
                    </div>
    
                    <div class="col-1">
                   
                    </div>
                    <div class="col-3">
                        <label for="n" class="fw-bold">FECHA PAGADA:</label>     <br>           
                        <input type="text" value="<?php echo $nada ?>" class="form-control" disabled>
                    </div>                
                </div>  
    
                <?php } ?>
    
            <?php if($buscar <> null){ ?>
                <?php if($rowSql){ ?>    

            <div class="row">

            <div class="col-1">
                        
                </div>    
                <div class="col-3">
                    <label for="n" class="fw-bold">Nº OC:</label><br>               
                    <input type="text" value="<?php echo $rowSql['num_oc']; ?>" class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA EMISION:</label> <br>               
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_emision'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_emision']));}?>" class="form-control" disabled>
                </div>
                <div class="col-1">
                  
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA RECIBIDO ADQ:</label> <br>     
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq']));}?>" class="form-control text-start" disabled>           
                </div>                
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>                  
                <div class="col-3">
                    <label for="n" class="fw-bold">EMPRESA:</label>  <br>             
                    <input type="text" value="<?php echo $rowSql['empresa']; ?>" class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">UNIDAD DE NEGOCIO:</label> <br>               
                    <input type="text" value="<?php echo $rowSql['unidad_de_negocio']; ?>" class="form-control" disabled>
                </div>
                <div class="col-1">
                   
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA INGRESO GERENCIA:</label> <br>  
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_ger'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_ger']));}?>" class="form-control text-start" disabled>
                </div>                  
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>  
                <div class="col-3">
                    <label for="n" class="fw-bold">PROVEEDOR:</label>          <br>      
                    <input type="text" value="<?php echo $rowSql['proveedor']; ?>" class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">DOCUMENTO:</label>     <br>           
                    <input type="text" value="<?php echo $rowSql['documento']; ?>" class="form-control" disabled>
                </div>
                <div class="col-1">
                  
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA SALIDA GERENCIA:</label> <br>               
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_adq_pos']));}?>" class="form-control text-start" disabled>
                </div>                     
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>  
                <div class="col-3">
                    <label for="n" class="fw-bold">NUM COMPROBANTE:</label>    <br>            
                    <input type="text" value="<?php echo $rowSql['num_comprobante']; ?>" class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">IMPORTE (BS):</label>  <br>              
                    <input type="text" value="<?php echo $rowSql['importe']; ?>" class="form-control" disabled>
                </div>
                <div class="col-1">
             
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA RECIBE JEF CONT:</label> <br>               
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_jefcont']));}?>" class="form-control text-start" disabled>
                </div>                  
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>                  
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA DE PAGO:</label> <br>               
                    <input type="text" value="<?php echo $rowSql['fecha_pago']; ?>" class="form-control" disabled>
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">DEVOLVER A:</label>  <br>              
                    <input type="text" value="<?php echo $rowSql['devolver_a']; ?>" class="form-control" disabled>
                </div>
                <div class="col-1">
                  
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA RECIBIDO CONTADORES:</label> <br>               
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_cont'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_cont']));}?>" class="form-control text-start" disabled>
                </div>  
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>          
                <div class="col-3">
                    <label for="n" class="fw-bold">ÁREA SOLICITANTE:</label> <br>               
                    <input type="text" value="<?php echo $rowSql['area_solicitante']; ?>" class="form-control" disabled>
                </div>
                <div class="col-2">
                    
                </div>
                <div class="col-2">
               
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA RECIBIDO TESORERIA:</label><br>           
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_rec_tes'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_rec_tes']));}?>" class="form-control text-start" disabled>
                </div>                
            </div>
            <div class="row">
                <div class="col-1">
                        
                </div>  
                <div class="col-6">
                    <label for="n" class="fw-bold">REFERENCIA:</label>     <br>           
                    <textarea type="text" rows="2" cols="77" disabled><?php echo $rowSql['referencia']; ?> </textarea>
                </div>

                <div class="col-1">
               
                </div>
                <div class="col-3">
                    <label for="n" class="fw-bold">FECHA PAGADA:</label>     <br>           
                    <input type="text" value="<?php if(date("d/m/Y", strtotime($rowSql['fecha_pagado'])) == "30/11/-0001"){echo $nada;}else{echo date("d/m/Y", strtotime($rowSql['fecha_pagado']));}?>" class="form-control text-start" disabled>
                </div>                
            </div>
            
            <?php }else{ ?>


            <div class="row">
            <div class="col-1"></div>
                    
              
            <div class="col-3">
                <label for="n" class="fw-bold">Nº OC:</label><br>               
                <input type="text" value="<?php echo $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA EMISION:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-1">

            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA RECIBIDO ADQ:</label> <br>      
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>           
            </div>                
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <label for="n" class="fw-bold">EMPRESA/UD NEGOCIO:</label>  <br>              
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">ESTACIÓN:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-1">
                
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA INGRESO GERENCIA:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>                  
        </div>
        <div class="row">
            <div class="col-1"></div>                    
            <div class="col-3">
                <label for="n" class="fw-bold">PROVEEDOR:</label>          <br>      
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">DOCUMENTO:</label>     <br>           
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA SALIDA GERENCIA:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>                     
        </div>
        <div class="row">
        <div class="col-1"></div>
            <div class="col-3">
                <label for="n" class="fw-bold">NUM COMPROBANTE:</label>    <br>            
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">IMPORTE (BS):</label>  <br>              
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-1">
              
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA RECIBIDO JEF CONT:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>                  
        </div>
        <div class="row">
        <div class="col-1"></div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA DE PAGO:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">DEVOLVER A:</label>  <br>              
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-1">
        
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA RECIBIDO CONTADORES:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>  
        </div>
        <div class="row">
        <div class="col-1"></div>
            <div class="col-3">
                <label for="n" class="fw-bold">ÁREA SOLICITANTE:</label> <br>               
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>
            <div class="col-2">
               
            </div>
            <div class="col-2">
                
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA RECIBIDO TESORERIA:</label>            
                <input type="text" value="<?php echo  $nada; ?>" class="form-control" disabled>
            </div>                
        </div>    
        <div class="row">
        <div class="col-1"></div>
            <div class="col-6">
                <label for="n" class="fw-bold">REFERENCIA:</label>     <br>           
                <textarea type="text" rows="2" cols="77" disabled><?php echo  $nada; ?> </textarea>
            </div>

            <div class="col-1">
           
            </div>
            <div class="col-3">
                <label for="n" class="fw-bold">FECHA PAGADA:</label>     <br>           
                <input type="text" value="<?php echo $nada ?>" class="form-control" disabled>
            </div>                
        </div>  

        <?php } ?>


        <?php   } ?>
     
    
     
    
            </form>
        <?php
            if (isset($_GET['area'])) {
                $area=$_GET['area'];
            }         
        ?>
        <div class="row"> 
            <div class="d-grid gap-2 col-6 mx-auto p-2">
                    <button onclick="location.href='../home_admin/home_tes.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-secondary">VOLVER</button>    
                    <button onclick="location.href='../logica_descarga/logica_descarga.php?num_oc=<?php echo $rowSql['num_oc']; ?>&rol=Administrador&area=<?php echo $area?>'" class="btn btn-primary">DESCARGAR COMPROBANTE</button>
            </div> 
        </div>

    </div>

</body>