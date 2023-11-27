<?php
require "config/conex.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $materias = $_POST['materia'];
    foreach ($materias as $nombre) {
        $sql = "INSERT INTO Materias (Nombre) VALUES ('$nombre')";

        if ($mensajero->exec($sql)) {
            echo "Nueva materia creada exitosamente: $nombre<br>";
        } else {
            $error = $mensajero->errorInfo();
            echo "Error: " . $error[2] . "<br>";
        }
    }
}

$sql= "SELECT ID, Nombre FROM Materias";

foreach($mensajero->query($sql) as $row)
{
    $id = $row["ID"];
    $nombre = $row["Nombre"];
    echo "Materia: $nombre (ID: $id)<br>";
}

print "
<form method='post' action='" . $_SERVER['PHP_SELF'] . "'>
    <div id='materias'>
        <div class='materia'>
            Nombre de la materia: <input type='text' name='materia[]' required><br>
        </div>
    </div>
    <button type='button' onclick='agregarMateria()'>Agregar otra materia</button>
    <input type='submit' value='REGISTRAR'>
</form>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script>
function agregarMateria() {
    var materias = document.getElementById('materias');
    var nuevaMateria = document.createElement('div');
    nuevaMateria.className = 'materia';
    nuevaMateria.innerHTML = 'Nombre de la materia: <input type=\"text\" name=\"materia[]\" required><br>';
    materias.appendChild(nuevaMateria);
}
</script>
";
?>
