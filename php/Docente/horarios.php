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
    </div>
    <br />

    <div class="container">
          
    <?php 
      include "../conexion.php";
      $queryHorario = "SELECT * FROM `horario` WHERE num_boleta = " . $_SESSION['usuario']; 
      $resultHorario = $conexion->query($queryHorario);

      if($resultHorario->num_rows > 0){ 
        while($row = $resultHorario->fetch_assoc()) { 

          echo  '<div class="container center">';
          echo  '<div class="container center">';
          echo    '<div class="row">';
          echo      '<div class="col s12 m12">';
          echo        '<div class="card">';
          echo          '<div class="card-image">';
          echo            '<img src="../../img/horarios/'. $row["img"] .'" />';
          echo            '<span class="card-title">'. $row["titulo"] .'</span>';
          echo            '<a class="btn-floating halfway-fab waves-effect waves-light red" href="deleteHorario.php?idHorario='.$row["id_horario"].'"';
          echo              '><i class="material-icons">delete</i></a';
          echo            '>';
          echo          '</div>';
          echo          '<div class="card-content"></div>';
          echo        '</div>';
          echo      '</div>';
          echo    '</div>';
          echo  '</div>';
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

      $.ajaxSetup({
        cache: false,
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
  </body>
</html>
