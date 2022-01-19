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

<body>


    <!--PNG logo Cesur-->
    <div class="text-center">
            <p>
                    <?php
                        echo "bienvenido, ".$_SESSION["Nombre"];
                    ?>
                    <br>
                    <a href="cerrarsesion.php"><input type="button" class="btn btn-info" value="Cerrar Sesi&oacute;n"></a>
            </p>
    </div>
    <div> <img class="logocesur" src="../img/CESUR-web.png" alt="Cesur Logo"></div>

    <?php

        switch ($_SESSION["Rol"]) {
                case '0':

                        echo '<div class="botonPadre">

                        <a href="añadirAlumno.html"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Añadir alumno"></a> <br>
                
                        <a href="formularioProfesor.html"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Añadir profesor"></a> <br>
                
                
                        <a href="añadir_empresa.html"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="añadir empresas"></a> <br>
                        
                        <a href="formularioActividad.html"><input type="button" class="btn btn-primary btn-lg padding"
                                value="Añadir nueva actividad"></a><br>
                
                        <a href="../php/mostrar_alumno.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar alumnos"></a> <br>
                                
                        <a href="../php/mostrar_profesor.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar profesor"></a> <br>
                
                        <a href="../php/mostrar_empresa.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar empresas"></a> <br>
                
                        <a href="../php/mostrar_actividad.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar actividad de alumnos"></a>
                
                    </div>';
                        break;

                case '1':

                        echo '<div class="botonPadre">

                        <a href="añadirAlumno.html"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Añadir alumno"></a> <br>
                
                        <a href="añadir_empresa.html"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="añadir empresas"></a> <br>
                
                
                        <a href="../php/mostrar_alumno.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar alumnos"></a> <br>
                                
                        <a href="../php/mostrar_profesor.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar profesor"></a> <br>
                
                        <a href="../php/mostrar_empresa.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar empresas"></a> <br>
                
                        <a href="../php/mostrar_actividad.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar actividad de alumnos"></a>
                
                    </div>';
                        break;

                case '2':
                        echo '<div class="botonPadre">

                        <a href="formularioActividad.html"><input type="button" class="btn btn-primary btn-lg padding"
                        value="Añadir nueva actividad"></a><br>

                
                        <a href="../php/mostrar_actividad.php"> <input type="button" class="btn btn-primary btn-lg padding"
                                value="Mostrar actividad de alumnos"></a>
                
                    </div>';
                        break;
                
                default:
                        echo "erró";
                        header('location: ../index.html');
                        break;
        }

    ?>

    <!-- <div class="botonPadre">

        <a href="añadirAlumno.html"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Añadir alumno"></a> <br>

        <a href="formularioProfesor.html"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Añadir profesor"></a> <br>


        <a href="añadir_empresa.html"> <input type="button" class="btn btn-primary btn-lg padding"
                value="añadir empresas"></a> <br>
        
        <a href="formularioActividad.html"><input type="button" class="btn btn-primary btn-lg padding"
                value="Añadir nueva actividad"></a><br>

        <a href="../php/mostrar_alumno.php"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Mostrar alumnos"></a> <br>
                
        <a href="../php/mostrar_profesor.php"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Mostrar profesor"></a> <br>

        <a href="../php/mostrar_empresa.php"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Mostrar empresas"></a> <br>

        <a href="../php/mostrar_actividad.php"> <input type="button" class="btn btn-primary btn-lg padding"
                value="Mostrar actividad de alumnos"></a>

    </div> -->
</body>

</html>