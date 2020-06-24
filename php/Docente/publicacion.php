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

  <body class="grey lighten-5">

    <div class="includeMenuDocente"></div>

    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <br /><br />
        <h1 class="header center orange-text">Crea una Publicación</h1>
        <div class="row center">
          <h5 class="header col s12 light">
            Ya sea una tarea, aviso, lo que sea!
          </h5>
        </div>
        <div class="row center"></div>
        <br /><br />
      </div>
    </div>

    <form
      class="col s12"
      action="crearPublicacion.php"
      method="GET"
      id="publicacionForm"
    >
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l12">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Nueva Publicacion</span>
                <div class="row">
                  <div class="row">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">mode_edit</i>
                      <input
                        id="input_text"
                        type="text"
                        data-length="45"
                        name="asuntoInp"
                        id="asuntoInp"
                        require
                      />
                      <label for="input_text">Asunto</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <i class="material-icons prefix">assignment</i>
                      <textarea
                        class="materialize-textarea"
                        data-length="500"
                        form="publicacionForm"
                        name="contenidoInp"
                        id="contenidoInp"
                        require
                      ></textarea>
                      <label for="contenidoInp">Contenido</label>
                    </div>
                  </div>
                </div>
                <button
                  class="btn waves-effect waves-light orange"
                  type="submit"
                  name="action"
                >
                  Crear
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="includeFooter"></div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var elems = document.querySelectorAll(".parallax");
        var instances = M.Parallax.init(elems);
      });

      $(document).ready(function () {
        $("input#input_text, textarea#contenidoInp").characterCounter();
      });

      $(function () {
        $(".includeMenuDocente").load("../modules/menuDocente.html");
      });

      $(function () {
        $(".includeFooter").load("../modules/footer.html");
      });

      $.ajaxSetup ({
          cache: false
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
  </body>
</html>
