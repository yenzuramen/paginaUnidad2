<?php
if(isset($_POST["registro_alumnos"])){
$idalumno=$_POST['alum_id'];
$alunombre=$_POST['alum_nombre'];
$aluapellidopat=$_POST['alum_apellidop'];
$aluapellidomat=$_POST['alum_apellidom'];
$alutelefono=$_POST['alum_telefono'];
$alucorreoelectronico=$_POST['alum_correoelectronico'];
$aluescuela=$_POST['alum_escuela'];
$alufecnac=$_POST['alum_fecnac'];
$alutalla=$_POST['alum_talla'];

if(isset($_POST['alum_id'])&& !empty($_POST['alum_nombre'])&&
isset($_POST['alum_apellidop'])&& !empty($_POST['alum_apellidom'])&&
isset($_POST['alum_telefono'])&& !empty($_POST['alum_correoelectronico'])&&
isset($_POST['alum_escuela'])&& !empty($_POST['alum_fecnac'])&& !empty($_POST['alum_talla'])){

    $enlace=mysqli_connect("localhost","root","", "bdcodingcup") or die ("no se conecto a la base de datos");
    $consulta = "INSERT INTO alumnos VALUES('$idalumno', '$alunombre','$aluapellidopat', '$aluapellidomat', '$alutelefono', '$alucorreoelectronico', '$aluescuela', '$alufecnac', '$alutalla')";
    $resultado = mysqli_query("$enlace","$consulta");
}
if("$resultado"){
     echo "<h3 class=\*ok\"> Datos Registrados realizado correctamente </h3>";
    }else { echo "<h3 class=\*bad\"> hubo un error y no se hizo el regitro </h3>";
}
} else{echo "<h3 class=\*bad\"> Primero Complete los datos regitro </h3>";
}

if(isset($_POST["registro_entrenador"])){
  $ident=$_POST['ent_id'];
  $entnombre=$_POST['ent_nombre'];
  $entapellidopat=$_POST['ent_apellidop'];
  $entapellidomat=$_POST['ent_apellidom'];
  $enttelefono=$_POST['ent_telefono'];
  $entcorreoelectronico=$_POST['ent_correoelectronico'];
  $enttelefonoesc=$_POST['ent_telefono_esc'];
  $entescuela=$_POST['ent_escuela'];
  
  
  if(isset($_POST['ent_id'])&& !empty($_POST['ent_nombre'])&&
  isset($_POST['ent_apellidop'])&& !empty($_POST['ent_apellidom'])&&
  isset($_POST['ent_telefono'])&& !empty($_POST['ent_correoelectronico'])&& !empty($_POST['ent_telefono_esc'])&&
  isset($_POST['ent_escuela'])){
  
      $enlace=mysqli_connect("localhost","root","", "bdcodingcup") or die ("no se conecto a la base de datos");
      $consulta = "INSERT INTO entrenador VALUES('$ident', '$entnombre','$entapellidopat', '$entapellidomat', '$enttelefono', '$entcorreoelectronico', '$enttelefonoesc','$entescuela')";
      $resultado = mysqli_query("$enlace","$consulta");
  }
  if("$resultado"){
       echo "<h3 class=\*ok\"> Datos Registrados realizado correctamente </h3>";
      }else { echo "<h3 class=\*bad\"> hubo un error y no se hizo el regitro </h3>";
  }
  } else{echo "<h3 class=\*bad\"> Primero Complete los datos regitro </h3>";
  }

  if(isset($_POST["registro_equipo"])){
    $idequ=$_POST['equ_id'];
    $equnombre=$_POST['equ_nombre'];
    $equentrenador=$_POST['equ_entrenador'];
    $equintegrante1=$_POST['equ_integrante1'];
    $equintegrante2=$_POST['equ_integrante2'];
    $equintegrante3=$_POST['equ_integrante3'];
    $equcorreoelectronico=$_POST['equ_correoelectronico'];
    $equtelefono =$_POST['equ_telefono'];
    $equescuela=$_POST['equ_escuela'];
    
    if(isset($_POST['equ_id'])&& !empty($_POST['equ_nombre'])&&
    isset($_POST['equ_entrenador'])&& !empty($_POST['equ_integrante1'])&&
    isset($_POST['equ_integrante2'])&& !empty($_POST['equ_integrante3'])&&
    isset($_POST['equ_correoelectronico'])&& !empty($_POST['equ_telefono'])&& !empty($_POST['equ_escuela'])){
    
        $enlace=mysqli_connect("localhost","root","", "bdcodingcup") or die ("no se conecto a la base de datos");
        $consulta = "INSERT INTO equipo VALUES('$idequ', '$equnombre','$equentrenador', '$equintegrante1', '$equintegrante2', '$equintegrante3', '$equcorreoelectronico', '$equtelefono', '$equescuela')";
        $resultado = mysqli_query("$enlace","$consulta");
    }
    if("$resultado"){
         echo "<h3 class=\*ok\"> Datos Registrados realizado correctamente </h3>";
        }else { echo "<h3 class=\*bad\"> hubo un error y no se hizo el regitro </h3>";
    }
    } else{echo "<h3 class=\*bad\"> Primero Complete los datos regitro </h3>";
    }
  
?>