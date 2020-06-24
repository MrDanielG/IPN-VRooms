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
      href="../css/materialize.min.css"
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
    <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">IPN VRooms</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="cerrarSesion.php">Cerrar Sesión</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"
          ><i class="material-icons">menu</i></a
        >
      </div>
    </nav>

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
            href="../php/Docente/publicaciones.php"
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
              <h5 class="center">Crea un nuevo Grupo</h5>

              <p class="light">
                We did most of the heavy lifting for you to provide a default
                stylings that incorporate our custom components. Additionally,
                we refined animations and transitions to provide a smoother
                experience for developers.
              </p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="center light-blue-text">
                <i class="material-icons">group</i>
              </h2>
              <h5 class="center">Ve tus alumnos por grupo</h5>

              <p class="light">
                By utilizing elements and principles of Material Design, we were
                able to create a framework that incorporates components and
                animations that provide more feedback to users. Additionally, a
                single underlying responsive system across all platforms allow
                for a more unified user experience.
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
                We have provided detailed documentation as well as specific code
                examples to help new users get started. We are also always open
                to feedback and can answer any questions a user may have about
                Materialize.
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
        $(".includeFooter").load("modules/footer.html");
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../js/materialize.min.js"></script>

  </body>
</html>
