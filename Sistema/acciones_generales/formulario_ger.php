<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
    <link rel="stylesheet" href="/logica/css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color:#f0f0f0;">
    
    <div class="container bg-success p-2 text-dark bg-opacity-10 p-2">
        
        <form action="../auxiliares/insertar_user.php" method="POST" class="row">
                <div class="col-12">
                    <div class="title text-center fs-2 fst-italic ">REGISTRO DE OC</div>      
                </div>        
        
        
                <div class="col-6">
                    <span class="details fw-bolder">Nº OC / CAJA CHICA</span>
                    <div class="input-group">
                        
                        <input type="text" name="n_oc" class="form-control" required><br>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#myModal">Caja Chica</button>
                        </div>  
                                                <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="myModal">ESTRUCTURA PARA ID DE CAJA CHICA</h1>
                                                            </div>
                                                            <div class="modal-body">
                                                            <label>La estructura de un ID para una Caja Chica es:</label><br>                                
                                                                <label>(ID del dueño de la CC) - (Sucursal) - (Monto)</label><br>    
                                                                <label>Ejemplo: BCO-PIRAI-1254.60</label><br> 
                                                                <label></label> 
                                                                <label>No debe existir ningún espaciado entre caracteres, la notación para decimales de moneda debe ser un punto y todos los caracteres deben estar en mayúsculas.</label><br>                     
                                                                <label></label>
                                                                <label>Nota: Escribir en la parte superior de la caja chica física el ID para identificarlo más fácil. </label>                      
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                       
                    </div>                   

                </div>
                <div class="col-6">
                        <div class="input-box">
                            <span class="details fw-bolder">FECHA DE EMISIÓN</span>
                            <input type="date" name="fecha_emision"  class="form-control" required>
                        </div>                    
                    </div> 
                <div class="col-6">
                    <label for="lang" class="fw-bolder">EMPRESA/UD NEGOCIO</label>
                    <select name="empresa" id="lang" class="form-select">
                        <option value=""></option>
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
                </div>

                <div class="col-6">
                    <label for="lang" class="fw-bolder">ESTACIÓN</label>
                    <select name="unidaddenegocio" id="lang" class="form-select ">
                        <option value=""></option>
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
                </div>                

                <div class="col-12">
                    <div class="input-box">
                        <span class="details fw-bolder">PROVEEDOR</span>
                        <input type="text" name="proveedor"  class="form-control text-uppercase" required>
                    </div>                    
                </div>

                <div class="col-6">
                    <label for="lang" class="fw-bolder">DOCUMENTO</label>
                    <select name="documento" id="lang" class="form-select">
                        <option value=""></option>
                        <option value="FACTURA" >FACTURA</option>
                        <option value="RECIBO" >RECIBO</option>                                
                    </select>                    
                </div>

                <div class="col-6">
                    <div class="input-box">
                        <span class="details fw-bolder">NUM. COMPROBANTE</span>
                        <input type="text" name="num_comprobante"  class="form-control" required>
                    </div>                    
                </div>

                <div class="col-6">
                    <div class="input-box">
                        <span class="details fw-bolder">IMPORTE</span>
                        <input type="number" name="importe"  class="form-control" required>
                    </div>                    
                </div>   

                <div class="col-6">
                    <div class="input-box">
                        <span class="details fw-bolder">FECHA DE PAGO</span>
                        <input type="text" name="fecha_pago"  class="form-control text-uppercase" required>
                    </div>                    
                </div>

                <div class="col-6">
                    <div class="input-box">
                        <span class="details fw-bolder">DEVOLVER PAGO</span>
                        <input type="text" name="devolver_pago"  class="form-control text-uppercase" required>
                    </div>                    
                </div>

                <div class="col-6">
                    <label for="lang" class="fw-bolder">ÁREA SOLICITANTE</label>
                    <select name="areasolicitante" id="lang" class="form-select">
                        <option value></option>
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
                </div>

                <div class="col-12">
                    <div class="input-box">
                        <span class="details fw-bolder">REFERENCIA</span>
                        <textarea type="text" name="referencia"  class="form-control text-uppercase" cols="30" required></textarea>
                    </div>                     
                </div>

                <div class="d-grid gap-2 col-6 mx-auto p-2">
                    <button type="submit" class="btn btn-success btn-sm">GUARDAR</button>   
                </div>
        </form> 
        <?php
            if (isset($_GET['area'])) {
                $area=$_GET['area'];
            }         
        ?>
        <div class="d-grid gap-2 col-6 mx-auto p-2">
            <button onclick="location.href='../home_admin/home_ger.php?rol=Administrador&area=<?php echo $area?>'" class="btn btn-secondary btn-sm">VOLVER</button>    
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
