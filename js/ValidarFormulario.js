// VALIDACION DEL FORMULARIO DE CONTACTO
(function() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation")

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

// PROTECCION DEL EMAIL Y TELEFONO DE CONTACTO
// Las codificamos para evitar spam, para ello dividimos el correo o número telefónico del destinatario en varias variables
// estas se ejecutaran solo si el cliente desea contactar y pincha en los logos correspondientes
function mandaemail(){
    usuario="bmcontactoweb";
    correo="gmail.com";
    dest="mailto:"+usuario+"@"+correo;
    location.href=dest;
}
function llamar(){
    digitos1="665";
    digitos2="736";
    digitos3 = "224";
    dest="tel:"+ digitos1 + digitos2 + digitos3;
    location.href=dest;
}