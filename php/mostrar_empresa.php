<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Empresa</title>

</head>

<body>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Responsable</td>
            <td>Observaciones</td>
        </tr>

        <?php 
        
        
        require 'lib/conexion_mysql.php';
        
       $query="SELECT * from empresa";
    $resul=mysqli_query($conexion_mysql,$query);
    while ($row= mysqli_fetch_array($resul)) {
        ?>
        <tr>
            <td><?php echo $row['ID_Empresa'] ?></td>
            <td><?php echo $row['Nombre_Empresa'] ?></td>
            <td><?php echo $row['Telefono'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Responsable'] ?></td>
            <td><?php echo $row['Observaciones'] ?></td>
        </tr>
        <?php
    }
            ?>