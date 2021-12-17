<!DOCTYPE html>
<html lang="es">

<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">
<?php
    require 'lib/conexion_mysql.php';

echo "<table class='table' border=1 align='center'> <tr><th> ID_profesor </th> <th> Nombre </th><th> Apellido1 </th><th> Segundo Apellido </th><th> Email </th></tr>";


$query = $conexion_mysql->query ("SELECT * FROM profesor");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $profesor=$query->fetch_assoc();
    echo "<tr><td>" . $profesor["ID_Profesor"] ."</td> <td>". $profesor["Nombre"]."</td> <td>". $profesor["Apellido1"]."</td><td>". $profesor["Apellido2"]."</td><td>". $profesor["Email"]."</td>";
    echo "</tr>";   
}
?>
<a href="../html/index.html"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a>
