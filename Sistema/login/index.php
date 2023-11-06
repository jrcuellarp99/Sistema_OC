<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESIÓN</title>
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-color:#F0F0F0;">
    <div class="container text-center ">
        <div class="text-end">
            <img src="../logos/BIO_LOGO_OFICIAL.jpeg" class="rounded" alt="../logos/BIO_LOGO_OFICIAL.jpeg" width="250" height="250">
        </div>                  
    </div>    
    <div class="container text-center" >
        <div class="Caja ">
            <form action="validar.php" method="post" class="row position-absolute top-50 start-50 translate-middle border border-success" style="background-color:#FFFFFF;">
                <h1 class="title ">INICIO DE SESIÓN</h1>
                <p class="blanco">Usuario <input type="text" placeholder="Ingrese su usuario" name="usuario" class="form-control"></p>
                <p class="blanco">Contraseña <input type="password" placeholder="Ingrese su contraseña" name="password" class="form-control"></p>
                <div class="d-grid gap-2 col-6 mx-auto p-2">
                    <input class="btn btn-success" type="submit" value="Ingresar">  
                </div>
                           
            </form>
        </div>       
    </div>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>