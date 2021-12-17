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

echo "<table class='table' border=1 align='center'> <tr><th> ID_Empresa </th> <th> Nombre de la empresa </th><th> Telefono </th><th> Email </th><th> Responsable </th><th> Observaciones </th></tr>";


$query = $conexion_mysql->query ("SELECT * FROM empresa");
$nl = $query->num_rows;

for($x=0;$x<$nl;$x++){
    $profesor=$query->fetch_assoc();
    echo "<tr><td>" . $profesor["ID_Empresa"] ."</td> <td>". $profesor["Nombre_Empresa"]."</td> <td>". $profesor["Telefono"]."</td><td>". $profesor["Email"]."</td><td>". $profesor["Responsable"]."</td><td>".$profesor["Observaciones"]."</td>";
    echo "</tr>";   
}
?>
<a href="../html/index.html"><input type="button" class="btn btn-secondary btn-lg" value="Volver al menú"></a>
