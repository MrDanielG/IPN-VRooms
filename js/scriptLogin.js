let xmlHttp = null;

var elemento = (id) => document.getElementById(id);

window.onload = () => {
  let contra = elemento("passwordInp").value;
  let usr = elemento("usernameInp").value;

  contra.value == "";
  usr.value == "";

  if (contra == "" || usr == "") {
    elemento("btnIngresar").disabled = true;
  } else {
    elemento("btnIngresar").disabled = false;
  }
};

function get(url, accion) {
  xmlHttp = crearXMLHttpRequest();
  xmlHttp.onreadystatechange = accion;
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
}

function verificarUsr() {
  let nombreUsr = elemento("usernameInp").value;
  let respuestaUsr = elemento("verificaUsr");

  if (nombreUsr.length < 3) {
    respuestaUsr.innerHTML = "Usuario Menor a 3 caracteres";
    elemento("btnIngresar").disabled = true;
  } else {
    get("../php/verificarLogin.php?nombre=" + nombreUsr, cargar);
    elemento("btnIngresar").disabled = false;
  }
}

function crearXMLHttpRequest() {
  var xmlHttp = null;
  if (window.ActiveXObject) xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

function cargar() {
  let respuestaUsr = elemento("verificaUsr");
  let contra = elemento("passwordInp").value;

  if (xmlHttp.readyState == 4) {
    respuestaUsr.innerHTML = xmlHttp.responseText;

    if (respuestaUsr.innerHTML == "Usuario Inexistente") {
      elemento("btnIngresar").disabled = true;
    } else if (
      respuestaUsr.innerHTML == "Usuario Existente" &&
      contra.value != ""
    ) {
      elemento("btnIngresar").disabled = false;
    }
  }
}

function verificarInp() {
  let contra = elemento("passwordInp").value;
  let usr = elemento("usernameInp").value;
  console.log(usr.length);
  if (contra == "" || usr == "" || usr.length < 3) {
    elemento("btnIngresar").disabled = true;
  } else {
    elemento("btnIngresar").disabled = false;
  }
}
