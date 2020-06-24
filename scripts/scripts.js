let xmlHttp = null;

var elemento = id => document.getElementById(id);

window.onload = function() {
  let contra = elemento('passwordInp').value;
  let usr = elemento('usernameInp').value;

  contra.value == '';
  usr.value == '';

  if (contra == '' || usr == '') {
    elemento('btnIngresar').disabled = true;
  } else {
    elemento('btnIngresar').disabled = false;
  }
};

function get(url, accion) {
  xmlHttp = crearXMLHttpRequest();
  xmlHttp.onreadystatechange = accion;
  xmlHttp.open('GET', url, true);
  xmlHttp.send();
}

function verificar() {
  let nombreUsr = elemento('usernameInp').value;
  get('../php/verificaUsuario.php?nombre=' + nombreUsr, cargar);
}

function crearXMLHttpRequest() {
  var xmlHttp = null;
  if (window.ActiveXObject) xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
  else if (window.XMLHttpRequest) xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

function cargar() {
  let respuestaUsr = elemento('verificaUsr');
  let contra = elemento('passwordInp').value;

  if (xmlHttp.readyState == 4) {
    respuestaUsr.innerHTML = xmlHttp.responseText;
    if (respuestaUsr.innerHTML == 'Usuario Inexistente') {
      elemento('btnIngresar').disabled = true;
    } else if (
      respuestaUsr.innerHTML == 'Usuario Existente' &&
      contra.value != ''
    ) {
      elemento('btnIngresar').disabled = false;
    }
  }
}

function verificarInp() {
  let contra = elemento('passwordInp').value;
  let usr = elemento('usernameInp').value;

  if (contra == '' || usr == '') {
    elemento('btnIngresar').disabled = true;
  } else {
    elemento('btnIngresar').disabled = false;
  }
}
