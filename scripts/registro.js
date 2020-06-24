let xmlHttp = null;

var elemento = id => document.getElementById(id);
window.onload = function() {
  let contra = elemento('newPassword').value;
  let usr = elemento('newUsername').value;

  if (contra == '' || usr == '') {
    elemento('btnRegistro').disabled = true;
  } else {
    elemento('btnRegistro').disabled = false;
  }
};

function get(url, accion) {
  xmlHttp = crearXMLHttpRequest();
  xmlHttp.onreadystatechange = accion;
  xmlHttp.open('GET', url, true);
  xmlHttp.send();
}
function verificar() {
  let nombreUsr = elemento('newUsername').value;
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

  if (xmlHttp.readyState == 4) {
    respuestaUsr.innerHTML = xmlHttp.responseText;
    if (respuestaUsr.innerHTML == 'Usuario Existente') {
      elemento('btnRegistro').disabled = true;
    } else {
      elemento('btnRegistro').disabled = false;
    }
  }
}

function validate() {
  let usr = elemento('newUsername').value;
  let contra = elemento('newPassword').value;
  let contraVerif = elemento('newPasswordValidate').value;

  // if (usr.value == '' || contra.value == '' || contraVerif == '') {
  //   alert('Por favor llenar todos lso campos');
  // } else if (contra.value != contraVerif.value) {
  //   alert('Las Contraseñas No Conciden');
  // } else {
  //   //Enviar a PHP
  // }
}
