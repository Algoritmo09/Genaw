<?php
require "config/conex.php";

$id = $_POST["registro"];

$sql ="DELETE FROM estudiantes 
WHERE id=".$id."";

if($mensajero->query($sql)){
    $mensajero->query("SET @count = 0");
    $mensajero->query("UPDATE `estudiantes` SET `estudiantes`.`id` = @count:= @count + 1");
    $mensajero->query("ALTER TABLE `estudiantes` AUTO_INCREMENT = 1");
    echo "<script>
    alert('REGISTRO ELIMINADO');
    window.location.href='consultar_estudiantes.php'
    </script>";
}else
{
    echo "Error al eliminar el estudiante";
}
echo "<br>";
echo "<a href='index.php'>Volver</a>";
?>

