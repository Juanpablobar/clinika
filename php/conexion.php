<?php
    $servidor="localhost";
    $nombreBd="id15569091_clinika";
    $usuario="id15569091_cinika1";
    $pass="}9Zg^[?nIK~G0QyF";
    $conexion = new mysqli($servidor,$usuario,$pass,$nombreBd);
    if($conexion -> connect_error ){
        die("No se pudo conectar");
        
    }if (!mysqli_set_charset($conexion, "utf8")) 
    {
      printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
      exit();
    }
  return $conexion;
?> 