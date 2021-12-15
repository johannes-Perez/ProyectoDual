<!DOCTYPE html>
<html lang="es">


<head>

    <!--Meta Tags Requeridos-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Link estilos boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="local.css">

</head>


<body>

   
    <!--PNG logo Cesur-->
    <div> <img class="logocesur"  src="https://2019.talent-woman.es/wp-content/uploads/2019/11/CESUR-web.png" alt="Cesur Logo"></div>


    <!--Formulario añadir empresa-->

    <form method="POST" action=""> 

    <p>
        <label>Nombre</label>
        <imput type="text" name="nombreEmp">
    </p>

    <p>
        <label>Telefono</label>
        <input type="number" name="telefonoEmp">
    </p>

    <p>
        <label>Email</label>
        <input type="text" name="emailEmp">
    </p>

    <p>
        <label>Responsable</label>
        <imput type="text" name="responsableEmp">
    </p>

    <p>
        <label>Observaciones e Incidentes</label>
        <textarea name="comentarios" rows="5" cols="20">
            Escribe aquí tus comentarios
        </textarea>
    </p>

    <p>
        <input type="submit" value="Guardar">
    </p>

    </form>

</body>    

</html>