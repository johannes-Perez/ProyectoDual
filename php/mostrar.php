<?php
require_once 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>

<body>
    <table border="1px">
        <tr>
            <td>Nombre</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Responsable</td>
            <td>Observaciones/Incidentes</td>
        </tr>

        <?php 
       $query="SELECT * from alumnos";
    $resul=mysqli_query($conn,$query);
    while ($row= mysqli_fetch_array($resul)) {
        ?>
        <tr>
            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['telefono'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['responsable'] ?></td>
            <td><?php echo $row['observacion'] ?></td>
        </tr>
        <?php
    }
            ?>
        <?php 
      $query=mysqli_query($conn,"SELECT venta FROM ventas where num_semana=2");
      $suma=0;
      while($sumar=mysqli_fetch_array($query))
      {
      $suma=$suma+$sumar["venta"];
      }

      ?>

        <p>Resultado ventas:</p>
        <?php

echo $suma;
      ?>


        <table border="1px">
            <tr>
                <td>id</td>
                <td>gasto</td>
                <td>num_semana</td>
            </tr>

            <?php 
       $query="SELECT * from gastos  where num_semana=2  ";
    $resul=mysqli_query($conn,$query);
    while ($row= mysqli_fetch_array($resul)) {
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['gasto'] ?></td>
                <td><?php echo $row['num_semana'] ?></td>
            </tr>
            <?php
    }
            ?>
            <?php 
      $query=mysqli_query($conn,"SELECT gasto FROM gastos where num_semana=2");
      $suma=0;
      while($sumar=mysqli_fetch_array($query))
      {
      $suma=$suma+$sumar["gasto"];
      }

      ?>

            <p>Resultado gastos:</p>
            <?php

echo $suma;
      ?>