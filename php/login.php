<?php
    session_start();
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

</head>


<?php

    // var_dump($_POST);

    switch ($_POST["rol"]) {
        case 'p':

            $conexion_mysql= mysqli_connect("localhost", "elusuario", "lacontra", "proyectodual");

            $codigo_sql = "SELECT * FROM profesor where Nombre='".$_POST["nom"]."'";
            $resultado = mysqli_query($conexion_mysql, $codigo_sql);
            $registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

            if ($registro['Nombre']) {
                echo "Se ha encontrado en la base de datos";

                if ($_POST['con'] == $registro['Contraseña']) {
                    echo "Contraseña correcta";
                    $_SESSION["Nombre"]=$registro["Nombre"];
                    $_SESSION["Rol"]=$registro["rol"];
                    $_SESSION["ID"]=$registro["ID_Profesor"];
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
            echo "has seleccionado alumno";

            $conexion_mysql= mysqli_connect("localhost", "elusuario", "lacontra", "proyectodual");

            $codigo_sql = "SELECT * FROM alumno where Nombre='".$_POST["nom"]."'";
            $resultado = mysqli_query($conexion_mysql, $codigo_sql);
            $registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

            if ($registro['Nombre']) {
                echo "Se ha encontrado en la base de datos";

                if ($_POST['con'] == $registro['Contraseña']) {
                    echo "Contraseña correcta";
                    $_SESSION["Nombre"]=$registro["Nombre"];
                    $_SESSION["Rol"]=$registro["rol"];
                    $_SESSION["ID"]=$registro["ID_Alumno"];
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