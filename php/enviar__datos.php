<?php

include 'conexion.php';

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$curp = $_POST['txtCurp'];
$comentarios = $_POST['txtComentarios'];

$talleres = $_POST['talleres'];

$taller = "";

foreach($talleres as $item) {
     $taller = $item + $taller;
}

if(isset($_POST['carrera'])){
    $carrera = $_POST['carrera'];
} else {
    $carrera = null;
}

$query = "INSERT INTO datos (curp, nombre, apellido, carrera, talleres, comentarios) VALUES ('$curp', '$nombre', '$apellido', '$carrera', '$item', '$comentarios')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo $item;
    echo '
            <script> 
                alert("Alumno Registrado");
                window.location = "../index.php";
            </script>
        ';
} else {
    echo $item;
    echo '
            <script> 
                alert("Intentelo de nuevo, alumno no registrado");
                
            </script> 
        ';
}
//window.location = "../index.php";
mysqli_close($conexion);
