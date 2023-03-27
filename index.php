<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>

  <!-- Conexion -->
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <div class="contenedor__formulario">
    <form action="./php/enviar__datos.php" method="POST" class="formulario">

      <div class="contenedor__datos">
        <h3>Datos</h3>

        <div class="nombre">
          <label for="txtNombre">Nombre</label>
          <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre-Completo" required />
        </div>

        <div class="apellido">
          <label for="txtApellido">Apellido</label>
          <input type="text" id="txtApellido" name="txtApellido" placeholder="Apellidos" required />
        </div>

        <div class="curp">
          <label for="txtCurp" id="curps">Curp</label>
          <input type="text" id="txtCurp" name="txtCurp" require minlength="18" pattern="[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$" placeholder="CURP" maxlength="18" required />
        </div>

      </div>

      <div class="contenedor__ct">
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
      </div>

      <div class="contenedor__comentarios">
        <h3>Comentarios</h3>

        <div class="comentarios">
          <textarea name="txtComentarios" id="txtComentarios" cols="30" rows="10" required></textarea>
        </div>

        <button name="registrar">Registrar Alumno</button>
      </div>
    </form>
  </div>
</body>

</html>