<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script> 
</head>

<body style="background-color:#f0f0f0;">

    <?php 

    if (isset($_GET['num_oc'])) {
        $num_oc = $_GET['num_oc'];
    }

        $area = "Adquisiciones";


    $conexion = mysqli_connect("localhost","root","","basededatos_sistema_seguimiento")or die("error de conexion");
    $sql= "SELECT * FROM datos_oc WHERE num_oc LIKE '%".$num_oc."%'";
    $numeroSql = mysqli_query($conexion,$sql); 
    $rowSql = mysqli_fetch_array($numeroSql);  

    ?>

    <?php if($num_oc <> "0"){ ?>
    <form method="POST" action="log_editar.php?rol=Administrador&area=Adquisiciones&num_oc=<?php echo $rowSql['num_oc'];?>'" class="row position-absolute top-50 start-50 translate-middle">    
        <div class="panel-heading border border-secondary">
            <h3 class="panel-title">EDITAR DATOS DE LA OC</h3>
        </div>
        <div class="panel-body border border-secondary">

            <div class="row justify-content-center">    
                <div class="col-6">
                    <label for="n" class="fw-bold">Nº OC:</label><br>               
                    <input type="text" value="<?php echo $rowSql['num_oc']; ?>" class="form-control" name="num_oc1">
                </div>
                <div class="col-6">
                    <label for="n" class="fw-bold">FECHA EMISION:</label> <br>               
                    <input type="text" value="<?php echo $rowSql['fecha_emision']; ?>" class="form-control" name="fecha_emision1">
                </div>
            </div> 

            <div class="row justify-content-center">   
                <div class="col-6">
                    <label for="n" class="fw-bold">EMPRESA/UD NEGOCIO:</label>  <br>             
                    <select name="empresa1" id="lang" class="form-select" >
                            <option value="<?php echo $rowSql['empresa']; ?>"><?php echo $rowSql['empresa']; ?></option>
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
                    <label for="n" class="fw-bold">ESTACION:</label> <br>               
                    <select name="unidad_de_negocio1" id="lang" class="form-select ">
                            <option value="<?php echo $rowSql['unidad_de_negocio']; ?>"><?php echo $rowSql['unidad_de_negocio']; ?></option>
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
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="n" class="fw-bold">PROVEEDOR:</label>          <br>      
                    <input type="text" value="<?php echo $rowSql['proveedor']; ?>" class="form-control" name="proveedor1">
                </div>
                <div class="col-6">
                    <label for="n" class="fw-bold">DOCUMENTO:</label>     <br>           
                    <select name="documento1" id="lang" class="form-select">
                            <option value="<?php echo $rowSql['documento']; ?>"><?php echo $rowSql['documento']; ?></option>
                            <option value="FACTURA" >FACTURA</option>
                            <option value="RECIBO" >RECIBO</option>                                
                    </select>    
                </div>        
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="n" class="fw-bold">NUM COMPROBANTE:</label>    <br>            
                    <input type="text" value="<?php echo $rowSql['num_comprobante']; ?>" class="form-control" name="num_comprobante1">
                </div>
                <div class="col-6">
                    <label for="n" class="fw-bold">IMPORTE (BS):</label>  <br>              
                    <input type="text" value="<?php echo $rowSql['importe']; ?>" class="form-control" name="importe1">
                </div>  
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="n" class="fw-bold">FECHA DE PAGO:</label> <br>               
                    <input type="text" value="<?php echo $rowSql['fecha_pago']; ?>" class="form-control" name="fecha_pago1">
                </div>
                <div class="col-6">
                    <label for="n" class="fw-bold">DEVOLVER A:</label>  <br>              
                    <input type="text" value="<?php echo $rowSql['devolver_a']; ?>" class="form-control" name="devolver_a1">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="n" class="fw-bold">ÁREA SOLICITANTE:</label> <br>               
                    <select name="area_solicitante1" id="lang" class="form-select">
                            <option value="<?php echo $rowSql['area_solicitante']; ?>"><?php echo $rowSql['area_solicitante']; ?></option>
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
                <div class="col-6">
                    <label for="n" class="fw-bold">REFERENCIA:</label>     <br>           
                    <textarea type="text" rows="2" cols="44" name="referencia1"><?php echo $rowSql['referencia']; ?> </textarea>
                </div>
            </div><br>

            <div class="d-grid gap-2 col-6 mx-auto p-2">
                <button type="submit" class="btn btn-success btn-sm">GUARDAR</button>   
            </div>
            <div class="row justify-content-center">
                <div class="d-grid gap-2 col-4 p-2 ">
                
                    <button onclick="location.href='../home_admin/home_adq.php?rol=Administrador&area=Adquisiciones'" class="btn btn-secondary btn-sm">SALIR</button>
                </div>                                               
            </div>



    </form>

        </div>

        <?php } ?>

    



</body>
</html>