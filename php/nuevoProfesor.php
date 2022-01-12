<?php
    include "lib/consultas.php";
      
    $BaseDatos=new Consultas();
    
    $resultado=$BaseDatos->nuevoProfesor($_POST["nombre"], $_POST["ape1"], $_POST["ape2"], $_POST["contra"], $_POST["correo"]);
        
    header("Location:../html/formularioProfesor.html");
    
?>