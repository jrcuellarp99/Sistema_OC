<?php

include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];


$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);






if(!is_null($filas)){

  if($filas['id_cargo']==1){

    if($filas['area'] == "mantenimiento"){
      $area="Mantenimiento";
    }
    if($filas['area'] == "comercial"){
      $area="Comercial";
    }
    if($filas['area'] == "segymedamb"){
      $area="SegYMedAmbiente";
    }
    if($filas['area'] == "talentohumano"){
      $area="Talento Humano";
    }    
    if($filas['area'] == "operaciones"){
      $area="Operaciones";
    }
    if($filas['area'] == "operaciones"){
      $area="Operaciones";
    }
    if($filas['area'] == "logistica"){
      $area="Logística";
    }
    if($filas['area'] == "sistemas"){
      $area="Sistemas";
    }   
    if($filas['area'] == "seiq"){
      $area="SEIQ";
    }  
    if($filas['area'] == "wow"){
      $area="WOW";
    }  
    
    

    header("location:../home_user/home_user.php?rol=Usuario&area=$area");
    
  }
  else if($filas['id_cargo']==2){  

    header("location:../home_admin/home_adq.php?rol=Administrador&area=Adquisiciones");

  }
  else if($filas['id_cargo']==3){

    header("location:../home_admin/home_ger.php?rol=Administrador&area=Gerencia");

  }
  else if($filas['id_cargo']==4){

    header("location:../home_admin/home_jefcont.php?rol=Administrador&area=Jefatura Contabilidad");

  }
  else if($filas['id_cargo']==5){

    header("location:../home_admin/home_cont.php?rol=Administrador&area=Contabilidad");

  }
  else if($filas['id_cargo']==6){

    header("location:../home_admin/home_tes.php?rol=Administrador&area=Tesorería");

  }
  else {


  }

}else{
      ?>
    <?php
      include("index.php");

    ?>
      <h5 class="bad">USUARIO O CONTRASEÑA INVÁLIDO</h5>
      
    <?php
  
  //header("location:index.php");


}




mysqli_free_result($resultado);
mysqli_close($conexion);
