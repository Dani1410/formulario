<?php

include 'conexion.php';

// Variables
$nombre = $_POST['txtNombre'];
$apellidos = $_POST['txtApellido'];
$curp = $_POST['txtCurp'];
$talleres = $_POST['talleres'];
$comentarios = $_POST['txtComentarios'];

// Verifica que se haya seleccionado una carrera de no ser asi nos manda un mnsj
if (isset($_POST['carrera'])) {
    $id_carrera = $_POST['carrera'];
} else {
    echo '
            <script> 
                alert("Seleccione una carrera");
                window.location = "../index.php";
            </script>
        ';
}

$query = "INSERT INTO alumnos (curp_alumno, nombre_alumno, apellidos_alumno, id_carrera) VALUES ('$curp', '$nombre', '$apellidos', '$id_carrera')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {

    foreach ($talleres as $item) {
        $query = "INSERT INTO alumnoxtaller (curp, id_taller) VALUES ('$curp', $item)";
        $ejecutar = mysqli_query($conexion, $query);
    }

    if ($ejecutar) {

        $query = "INSERT INTO comentarios (comentario, curp_alumno) VALUES ('$comentarios', '$curp')";
        $ejecutar = mysqli_query($conexion, $query);
    }
} else {
    echo $item;
    echo '
            <script> 
                alert("Intentelo de nuevo, alumno no registrado");
                window.location = "../index.php";
            </script> 
        ';
}

// <script> 
//                 alert("Alumno Registrado");
//                 window.location = "../index.php";
//             </script>

mysqli_close($conexion);
