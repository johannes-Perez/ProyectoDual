<?php
    session_start();
    require 'lib/consultas.php';
    $BaseDatos=new consultas();
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">

    <title>Iniciar Sesi&oacute;n</title>

</head>


<?php

$encontrado = false;

    switch ($_POST["rol"]) {
        case 'p':

            $resultado=$BaseDatos->loginProfesor($_POST["nom"]);

            foreach($resultado as $registro){
                if ($_POST["nom"] == $registro["Nombre"]) {
                    $encontrado = true;
                    $nombre = $registro["Nombre"];
                    $rol = $registro["rol"];
                    $contra = $registro["Contraseña"];
                    $id = $registro["ID_Profesor"];
                }
            }

            if ($encontrado) {

                if ($_POST['con'] == $registro['Contraseña']) {
                    echo "Contraseña correcta";
                    $_SESSION["Nombre"]=$nombre;
                    $_SESSION["Rol"]=$rol;
                    $_SESSION["ID"]=$id;
                    header('location: ../html/index.php');
                }
                else {
                    echo "<h1>La contraseña introducida es incorrecta</h1>";
                }

            }
            else {
                echo "<h1>Este usuario no existe</h1>";
            }

            break;

        case 'a':
            $resultado=$BaseDatos->loginAlumno($_POST["nom"]);

            foreach($resultado as $registro){
                if ($_POST["nom"] == $registro["Nombre"]) {
                    $encontrado = true;
                    $nombre = $registro["Nombre"];
                    $rol = $registro["rol"];
                    $contra = $registro["Contraseña"];
                    $id = $registro["ID_Alumno"];
                }
            }

            if ($encontrado) {
                
                if ($_POST['con'] == $registro['Contraseña']) {
                    echo "Contraseña correcta";
                    $_SESSION["Nombre"]=$nombre;
                    $_SESSION["Rol"]=$rol;
                    $_SESSION["ID"]=$id;
                    header('location: ../html/index.php');
                }
                else {
                    echo "<h1>La contraseña introducida es incorrecta</h1>";
                }

            }
            else {
                echo "<h1>Este usuario no existe</h1>";
            }

            break;
        
        default:
            echo "error";
            break;
    }


    
?>

<a href="../index.html"><input type="button" class="btn btn-danger btn-lg" value="Volver"></a>