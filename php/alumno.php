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
    <!-- 
    <div class="parallax-container">
      <div class="parallax">
        <img src="../img/bg2.jpg" />
      </div>

      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br /><br />
          <h1 class="header center orange-text">Bienvenido</h1>
          <div class="row center">
            <h5 class="header col s12 light">
              La nuev aplataforma escolar diseñada especificamente para el IPN
            </h5>
          </div>
          <div class="row center">
            <a
              href="http://materializecss.com/getting-started.html"
              id="download-button"
              class="btn-large waves-effect waves-light orange"
              >Get Started</a
            >
          </div>
          <br /><br />
        </div>
      </div>
    </div> -->

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <h1 class="header center orange-text">Bienvenido <?php echo $_SESSION["nombre"]?></h1>
        <div class="row center">
          <h5 class="header col s12 light">
            VRooms la nueva plataforma escolar diseñada para el IPN
          </h5>
        </div>
        <div class="row center">
          <a
            href="http://materializecss.com/getting-started.html"
            id="download-button"
            class="btn-large waves-effect waves-light orange"
            >Get Started</a
          >
        </div>
        <br /><br />
      </div>
    </div>

    <div class="container">
      <div class="col s12 m7">
        <h3 class="header">Tus Publicaciones</h3>
        <div class="card horizontal">
          <div class="card-image">
            <img src="https://lorempixel.com/100/190/nature/6" />
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p>
                I am a very simple card. I am good at containing small bits of
                information.
              </p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
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
