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
        <img src="../../img/bg2.jpg" />
      </div>

      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br /><br />
          <h1 class="header center orange-text">Editar Publicacion</h1>
          <div class="row center">
            <h5 class="header col s12 light white-text">
              Edita tus publicaciones
            </h5>
          </div>
        </div>
      </div>
    </div> <br>

    <div class="container">

    
    <?php 
      include "../conexion.php";
      $idPublicacion = $_GET['idPub']; 
      $queryPublicacion = "SELECT * FROM `publicacion` WHERE `id_publicacion` = $idPublicacion"; 
      $resultPub = $conexion->query($queryPublicacion)->fetch_assoc();
    
      // if($resultPub->num_rows > 0){ 
      //   while($row = $resultPub->fetch_assoc()) { 

      //     $queryNombre = "SELECT * FROM `persona` WHERE num_boleta = " . $row["num_boleta"];
      //     $resultNombre = $conexion->query($queryNombre)->fetch_assoc();
      //     $nombreComp = $resultNombre["nombre"] . ' ' . $resultNombre["paterno"] . ' ' . $resultNombre["materno"];

      //     echo '<div class="container">';
      //     echo '<div class="row">';
      //     echo  '<div class="col s12 m6 l12">';
      //     echo   '<div class="card">';
      //     echo      '<div class="card-content">';
      //     echo        '<span class="card-title orange-text">' . $row["asunto"] . '</span>';
      //     echo        '<p class="teal-text">' . $row["fecha"] . '</p>';
      //     echo        '<p>';
      //     echo         $row["contenido"];
      //     echo        '</p>';
      //     echo      '</div>';
      //     echo      '<div class="card-action">';
      //     echo        '<a class="blue-grey-text" href="#">Editar</a>';
      //     echo      '</div>';
      //     echo    '</div>';
      //     echo  '</div>';
      //     echo '</div>';
      //     echo '</div>';
      //   } 
      // }
    ?>
    
    </div>

    <form
      class="col s12"
      action="updatePublicacion.php"
      method="GET"
      id="publicacionForm"
    >
      <div class="container">
        <div class="row">
          <div class="col s12 m6 l12">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Editar Publicacion</span>
                <div class="row">
                  <div class="row">
                  <input type="hidden" name="idPub" 
                    value="<?php echo $idPublicacion; ?>">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">mode_edit</i>
                      <input
                        id="input_text"
                        type="text"
                        data-length="45"
                        name="asuntoInp"
                        id="asuntoInp"
                        value="<?php echo $resultPub["asunto"] ?>"
                        require
                      />
                      <label for="input_text">Asunto</label>
                    </div>
                    <div class="input-field col s6">
                      <select name="grupoInp" id="grupoInp" required>
                        <option selected value="<?php echo $resultPub["id_grupo"] ?>"> <?php echo $resultPub["id_grupo"] ?>  </option>
                        <option value="6IM1">6IM1</option>
                        <option value="6IM2">6IM2</option>
                        <option value="6IM3">6IM3</option>
                        <option value="6IM4">6IM4</option>
                        <option value="6IM5">6IM5</option>
                        <option value="Docente">Docentes</option>
                      </select>
                      <label>Selecciona un Grupo</label>
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
                      ><?php echo $resultPub["contenido"] ?></textarea>
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

      $(function () {
        $(".includeFooter").load("../modules/footer.html");
      });

      $(function () {
        $(".includeMenuDocente").load("../modules/menuDocente.html");
      });

      $.ajaxSetup ({
          cache: false
      });

      $(document).ready(function(){
        $('select').formSelect();
      });

      $(document).ready(function () {
        $("input#input_text, textarea#contenidoInp").characterCounter();
      });
    </script>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>

  </body>
</html>
