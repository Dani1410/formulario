<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>

  <!-- Conexion -->
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <div class="contenedor__formulario">
    <form action="./php/enviar__datos.php" method="POST" class="formulario">
      <div class="contenedor__datos">
        <h3>Datos</h3>

        <div class="nombre">
          <label for="txtNombre">Nombre</label>
          <input type="text" id="txtNombre" name="txtNombre" pattern="[A-Za-z]+" required />
        </div>

        <div class="apellido">
          <label for="txtApellido">Apellido</label>
          <input type="text" id="txtApellido" name="txtApellido" pattern="[A-Za-z]+" required />
        </div>

        <div class="curp">
          <label for="txtCurp">Curp</label>
          <input type="text" id="txtCurp" name="txtCurp" require minlength="18" maxlength="18" />
        </div>

      </div>

      <div class="contenedor__carreras">
        <h3>Carreras</h3>

        <div class="programacion">
          <input type="radio" name="carrera" id="brProgramacion" value="1"> <label for="brProgramacion">Tecnico en programacion</label>
        </div>

        <div class="programacion">
          <input type="radio" name="carrera" id="brVentas" value="2"> <label for="brVentas">Tecnico en ventas</label>
        </div>

        <div class="programacion">
          <input type="radio" name="carrera" id="brMyH" value="3"> <label for="brMyH">Tecnico en maquinas y herramientas</label>
        </div>
      </div>

      <div class="contenedor__talleres">
        <h3>Talleres</h3>

        <div class="zonaverde">
          <input type="checkbox" id="zoneVerde" name="talleres[]" value="1"> <label for="cbZonaVerde">Zona verde</label>
        </div>

        <div class="futbol">
          <input type="checkbox" id="futbol" name="talleres[]" value="2"> <label for="cbFutbol">Futbol</label>
        </div>

        <div class="basquetball">
          <input type="checkbox" id="basquet" name="talleres[]" value="3"> <label for="cbBasquet">Basquetball</label>
        </div>

        <div class="ajedrez">
          <input type="checkbox" id="ajedrez" name="talleres[]" value="4"> <label for="cbAjedrez">Ajedrez</label>
        </div>

        <div class="musica">
          <input type="checkbox" id="musica" name="talleres[]" value="5"> <label for="cbMusica">Musica</label>
        </div>
      </div>

      <div class="contenedor__comentarios">
        <h3>Comentarios</h3>

        <div class="comentarios">
          <textarea name="txtComentarios" id="txtComentarios" cols="30" rows="10"></textarea>
        </div>

        <button>Registrar Alumno</button>
      </div>
    </form>
  </div>
</body>

</html>