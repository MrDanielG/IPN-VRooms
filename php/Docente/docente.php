<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <!--Import materialize.css-->
    <link
      type="text/css"
      rel="stylesheet"
      href="../../css/materialize.min.css"
      media="screen,projection"
    />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"
    ></script>
  </head>

  <body>

    <div class="includeMenuDocente"></div>

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <h1 class="header center orange-text">
          Bienvenido
          <?php echo $_SESSION["nombre"]?>
        </h1>
        <div class="row center">
          <h5 class="header col s12 light">
            VRooms la nueva plataforma escolar diseñada para el IPN
          </h5>
        </div>
        <div class="row center">
          <a
            href="publicacion.php"
            id="download-button"
            class="btn-large waves-effect waves-light orange"
            >Crear Publicación</a
          >
        </div>
        <br /><br />
      </div>
    </div>

    <div class="container">
      <div class="section">
        <!--   Icon Section   -->
        <div class="row">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">flash_on</i>
              </h2>
              <h5 class="center">Crea todo tipo de Publicaciones</h5>

              <p class="light">
                VRooms te permite crear todo tipo de publicaciones dirigidas a tus grupos,
                de tal manera que puedes dar avisos a un grupo en especifico o incluso a los docentes.
              </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">group</i>
              </h2>
              <h5 class="center">Visualiza a tus alumnos</h5>

              <p class="light">
                En la seccion de alumnos podrás ver a todos los alumnos registrados
                en la plataforma VRooms para tener un control de cada uno de ellos. 
              </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">settings</i>
              </h2>
              <h5 class="center">Crea y Visualiza tu horario</h5>

              <p class="light">
                Sube todo tipo de imagenes de tus horarios a la plataforma,
                de tal manera que tengas todo en un solo lugar! En cualquier momento
                puedes eliminar tus horarios antiguos y subir nuevos.
              </p>
            </div>
          </div>
        </div>
      </div>
      <br /><br />
    </div>

    <div class="includeFooter"></div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var elems = document.querySelectorAll(".parallax");
        var instances = M.Parallax.init(elems);
      });

      $(function () {
        $(".includeFooter").load("../modules/footer.html");
      });

      $(function () {
        $(".includeMenuDocente").load("../modules/menuDocente.html");
      });

      $.ajaxSetup ({
          cache: false
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>

  </body>
</html>
