import Swal from 'sweetalert2'

const btn = document.getElementById('button');
if(btn) {
    const nombreInput = document.getElementById('from_name');
    const emailInput = document.getElementById('email_id');
    const telefonoInput = document.getElementById('telefono');
    const mensajeInput = document.getElementById('message');

    document.getElementById('form')
     .addEventListener('submit', function(event) {
       event.preventDefault();
    
       btn.value = 'Enviando...';
    
       const serviceID = 'default_service';
       const templateID = 'template_pcnoet9';
    
       emailjs.sendForm(serviceID, templateID, this)
        .then(() => {
          btn.value = 'Enviar Email';
          emailInput.value = '';
          nombreInput.value = '';
          telefonoInput.value = '';
          mensajeInput.value = '';
          Swal.fire({
            title: "¡Enviado!",
            text: "El email se ha enviado correctamente.",
            icon: "success"
          });
        }, (err) => {
          btn.value = 'Send Email';
          alert(JSON.stringify(err));
        });
    });
}