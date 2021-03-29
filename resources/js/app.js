require('./bootstrap');

/*
    Para validaciones en el formulario de concursantes
*/

function validateForm() {
    let documento = document.forms["nuevoConcursante"]["documento"].value;
    if (documento == "") {
      alert("Debes poner un documento");
      return false;
    } else if (!(!isNaN(parseFloat(documento)) && isFinite(documento))) {
        alert("No es un documento valido");
    }
}
