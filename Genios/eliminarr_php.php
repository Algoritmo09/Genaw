<?php
require "config/conex.php";

$id = $_POST["registro"];

$sql ="DELETE FROM estudiantes 
WHERE id=".$id."";

if($mensajero->query($sql)){
    $mensajero->query("SET @count = 0");
    $mensajero->query("UPDATE `estudiantes` SET `estudiantes`.`id` = @count:= @count + 1");
    $mensajero->query("ALTER TABLE `estudiantes` AUTO_INCREMENT = 1");
} else {
    http_response_code(500);
}
?>
