let xmlHttp = null;

var elemento = (id) => document.getElementById(id);

window.onload = function () {
  let contra = elemento("newPassword").value;
  let contraValidate = elemento("newPasswordValidate").value;
  let usr = elemento("newUsername").value;
  let tipoUsr = elemento("tipoUsr").value;
  let nombreUsr = elemento("nombreUsr").value;
  let paternoUsr = elemento("paternoUsr").value;
  let maternoUsr = elemento("maternoUsr").value;
  let correoUsr = elemento("correoUsr").value;
  let grupoUsr = elemento("grupoUsr").value;

  if (
    contra != "" &&
    usr != "" &&
    tipoUsr != "¿Eres un Alumno o Docente?" &&
    nombreUsr != "" &&
    paternoUsr != "" &&
    maternoUsr != "" &&
    correoUsr != "" &&
    contraValidate != "" &&
    grupoUsr != "¿En qué grupo te encuentras?"
  ) {
    elemento("btnRegistro").disabled = false;
  } else {
    elemento("btnRegistro").disabled = true;
  }
};

function get(url, accion) {
  xmlHttp = crearXMLHttpRequest();
  xmlHttp.onreadystatechange = accion;
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
}

function verificar() {
  let nombreUsr = elemento("newUsername").value;
  get("../php/verificaUsuario.php?nombre=" + nombreUsr, cargar);
  validate();
}

function crearXMLHttpRequest() {
  var xmlHttp = null;
  if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

function cargar() {
  let respuestaUsr = elemento("verificaUsr");

  if (xmlHttp.readyState == 4) {
    respuestaUsr.innerHTML = xmlHttp.responseText;
    if (respuestaUsr.innerHTML == "Número de Boleta Ocupado, utilize otro") {
      elemento("btnRegistro").disabled = true;
    }
  }
}

function validate() {
  let contra = elemento("newPassword").value;
  let contraValidate = elemento("newPasswordValidate").value;
  let usr = elemento("newUsername").value;
  let tipoUsr = elemento("tipoUsr").value;
  let nombreUsr = elemento("nombreUsr").value;
  let paternoUsr = elemento("paternoUsr").value;
  let maternoUsr = elemento("maternoUsr").value;
  let correoUsr = elemento("correoUsr").value;
  let grupoUsr = elemento("grupoUsr").value;

  if (
    contra != "" &&
    usr != "" &&
    tipoUsr != "¿Eres un Alumno o Docente?" &&
    nombreUsr != "" &&
    paternoUsr != "" &&
    maternoUsr != "" &&
    correoUsr != "" &&
    contraValidate != "" &&
    grupoUsr != "¿En qué grupo te encuentras?"
  ) {
    elemento("btnRegistro").disabled = false;
  } else {
    elemento("btnRegistro").disabled = true;
  }
}
