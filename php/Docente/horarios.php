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

    
    <div class="parallax-container">
      <div class="parallax">
        <img src="../../img/bg4.jpg" />
      </div>

      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br /><br />
          <h1 class="header center orange-text">Tus Horarios</h1>
          <div class="row center">
            <h5 class="header col s12 light white-text">
              Visualiza y Crea Imágenes de tus Horarios
            </h5>
          </div>
          <div class="row center">
          <a
            href="crearHorario.php"
            id="download-button"
            class="btn-large waves-effect waves-light orange"
            >Crea un Nuevo Horario</a
          >
        </div>
        </div>
      </div>
    </div> <br>

    <div class="container">

    
    <?php 
      include "../conexion.php";
      $queryPublicaciones = "SELECT * FROM `publicacion` WHERE num_boleta = " . $_SESSION['usuario']; 
      $resultPub = $conexion->query($queryPublicaciones);

      if($resultPub->num_rows > 0){ 
        while($row = $resultPub->fetch_assoc()) { 

          $queryNombre = "SELECT * FROM `persona` WHERE num_boleta = " . $row["num_boleta"];
          $resultNombre = $conexion->query($queryNombre)->fetch_assoc();
          $nombreComp = $resultNombre["nombre"] . ' ' . $resultNombre["paterno"] . ' ' . $resultNombre["materno"];

          echo '<div class="container">';
          echo '<div class="row">';
          echo  '<div class="col s12 m6 l12">';
          echo   '<div class="card">';
          echo      '<div class="card-content">';
          echo        '<span class="card-title orange-text">' . $row["asunto"] . '</span>';
          echo        '<p class="teal-text">' . $row["fecha"] . '</p>';
          echo        '<p>';
          echo         $row["contenido"];
          echo        '</p>';
          echo      '</div>';
          echo      '<div class="card-action">';
          echo        '<a class="blue-grey-text" href="editarPublicacion.php?idPub='.$row["id_publicacion"].'">Editar</a>';
          echo      '</div>';
          echo    '</div>';
          echo  '</div>';
          echo '</div>';
          echo '</div>';
        } 
      }
    ?>
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
