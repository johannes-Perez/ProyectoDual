<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
    <body>
           
<div class="encabezado">
       <img class="logo" alt="logo" src="../img/CESUR-web.png">
    </div>

    <div  class="menu">
    <div id="contenido">
                <a class="hoverAzul"href="../html/index.php">Home</a>
                <a class="hoverAmarillo" href="mostrar_profesor.php">mostrar profesor</a>
                <a class="hoverAzul"href="mostrar_alumno.php">mostrar alumno</a>
                <a class="hoverAmarillo" href="mostrar_empresa.php">mostrar empresa</a>
          </div>
    </div>
    </body>
<?php
    require 'lib/consultas.php';
$BaseDatos=new consultas();
$resultado=$BaseDatos->mostraralumno();
echo "<table class='table' border=1 align='center'> <tr><th> ID_Alumno </th> <th> Nombre </th><th> Apellido1 </th><th> Apellido2 </th><th> DNI </th><th> Fecha_Nacimiento </th><th> Email </th>
<th> Telefono </th><th> Empresa </th><th> Tutor </th><th> NºHoras_Dual </th><th> NºHoras_FCT </th><th> Observaciones </th></tr>";



foreach($resultado as $alumno){
    echo "<tr><td>" . $alumno["ID_Alumno"] ."</td> <td>". $alumno["Nombre"]."</td> <td>". $alumno["Apellido1"]."</td><td>". $alumno["Apellido2"]."</td><td>". $alumno["DNI"]."</td><td>"
    . $alumno["Fecha_Nacimiento"]."</td><td>". $alumno["Email"]."</td><td>". $alumno["Telefono"]."</td><td>". $alumno["Empresa"]."</td><td>". $alumno["Tutor"]."</td>
    <td>". $alumno["NºHoras_Dual"]."</td><td>". $alumno["NºHoras_FCT"]."</td><td>". $alumno["Observaciones"]."</td>";
    echo "</tr>";   
}
?>
