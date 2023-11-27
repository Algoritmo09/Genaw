<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR ESTUDIANTE</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body class="eliminar">

    <h1 class="eliminar">Eliminar estudiante</h1>

    <form action="eliminar_estudiante.php" method="post" class="eliminar">

    DIGITE EL CODIGO DEL ESTUDIANTE A ELIMINAR <br>
    <input type="number" name="registro" class="eliminar"> <br><br>

    <input type="submit" value="ELIMINAR" class="eliminar">  

</form>
<br> <br>
<a href='admin.php' class='eliminar'>Volver</a>
</body>
</html>
