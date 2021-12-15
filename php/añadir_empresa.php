<!DOCTYPE html>
<html lang="es">


<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/local.css">

</head>


<body>

   
    <!--PNG logo Cesur-->
    <div> <img class="logocesur"  src="https://2019.talent-woman.es/wp-content/uploads/2019/11/CESUR-web.png" alt="Cesur Logo"></div>


    <!--Formulario añadir empresa-->

<div class="divEmpresa">
    <form method="POST" action=""> 

    <p>
        <label>Nombre</label>
        <input type="text" class="form-control form-control-lg posicionFormulario" name="nombreEmp">
    </p>

    <p>
        <label>Telefono</label>
        <input type="text" class="form-control form-control-lg posicionFormulario" name="telefonoEmp">
    </p>

    <p>
        <label>Email</label>
        <input type="text" class="form-control form-control-lg posicionFormulario" name="emailEmp">
    </p>

    <p>
        <label>Responsable</label>
        <input type="text" class="form-control form-control-lg posicionFormulario" name="responsableEmp">
    </p>

    <p>
        <label>Observaciones e Incidentes</label><br>
        <textarea class="form-control form-control-lg posicionFormulario" name="comentarios" rows="5" cols="20">
            Escribe aquí tus comentarios
        </textarea>
    </p>

    <p>
        <input type="submit" class="btn btn-primary btn-lg" value="Guardar">
    </p>

    </form>
</div>
</body>    

</html>


<?php
error_reporting(0);
/*CONEXION*/
 $servername = "localhost";
 $database = "proyectodual";
 $username = "root";
 $password = "";
 $port=3307;
 $conn = mysqli_connect($servername, $username, $password, $database,$port);

/*Campos a rellenar*/
$nombre=$_GET['nombreEmp'];
$telefonoEmp=$_GET['telefonoEmp'];
$emailEmp=$_GET['emailEmp'];
$responsableEmp=$_GET['responsableEmp'];
$comentarios=$_GET['comentarios'];

if ($nombre !=null) {
    $query="insert into empresa(Nombre_Empresa,Telefono,Email,Responsable,Observaciones)
    values('".$nombre."','".$telefonoEmp."','".$emailEmp."','".$responsableEmp."','".$comentarios."',)";
    mysqli_query($conn,$query);
    header("location:index.php");
}


?>

