$(document).ready(function() {

  //ANIMACION TEXTO
  const contactanos = document.querySelector('.contactanos');
	var text = contactanos.textContent;
	contactanos.textContent = "";

	// Crear un span para cada letra del texto
	for (let i = 0; i < text.length; i++) {
		var letter = document.createElement('span');
		letter.textContent = text[i];
		contactanos.appendChild(letter);
	}

	// Animación de cada letra del texto
	var letters = contactanos.querySelectorAll('span');

	anime({
		targets: letters,
		opacity: [0, 1],
		top: "40%",
		duration: 200,
		easing: 'easeOutExpo',
		delay: function(el, i) {
			return i * 50;
		},
	});
  
  $('#enviar_btn').click(function(e) {
    e.preventDefault();
    var formulario = $(this).closest('#formularioContacto');
    var nombreCliente = formulario.find("input[name='nombre']").val();
    var emailCliente = formulario.find("input[name='email']").val();
    var codigoPais = $("#codigoPais option:selected").val();
    var telefonoCliente = formulario.find("input[name='telefono']").val();
    var numero= codigoPais + telefonoCliente;
    var asunto = formulario.find("input[name='asunto']").val();
    var mensaje = formulario.find("textarea[name='mensaje']").val()

    // Verificar que haya exactamente dos palabras
    var palabras = nombreCliente.trim().split(" ");
    if (palabras.length !== 2) {
      Swal.fire({
        title: "Error",
        text: "Ingresa un Nombre y un Apellido",
        icon: "error",
        confirmButtonColor: "#3085d6"
      });
      
      return; // Detener el proceso si no hay dos palabras
    }
    
    //Validar correo electronico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailCliente)) {
      Swal.fire({
        title: "Error",
        text: "Ingresa una dirrección de correo electrónico válida",
        icon: "error",
        confirmButtonColor: "#3085d6"
      });
      return;
    }
    
    // Validar el formato del teléfono
    var telefonoRegex = /^\d{10}$/; // Expresión regular para 10 dígitos numéricos
    if(!telefonoRegex.test(telefonoCliente)) {
      Swal.fire({
        title: "Error",
        text: "Ingresa un número de teléfono válido de 10 dígitos",
        icon: "error",
        confirmButtonColor: "#3085d6"
      });
      return; // Detener el proceso si el teléfono no es válido
    }
    
    if (nombreCliente.trim() === '' || emailCliente.trim() === '' || telefonoCliente.trim() === '' || asunto.trim() === '' || mensaje.trim() === '') {
      Swal.fire({
        title: "Error",
        text: "Todos los campos son obligatorios",
        icon: "error",
        confirmButtonColor: "#3085d6"
      });
    } else {
      // Envío del formulario
      // formulario.submit();
      Swal.fire({
        title: 'Enviando formulario',
        text: 'Cerrando en 2 segundos...',
        timer: 2000,
        didOpen: () => {
          Swal.showLoading()
        },
        willClose: () => {
          // Abre la ventana de WhatsApp después de cerrar el autocierre
          var numeroWhatsApp = '593984769613';
          var mensajeWhatsApp = 'Hola Tours Ecuador 👋, mi nombre es *' + nombreCliente + '*\nTelefono: ' + numero + "\nCorreo: " + emailCliente + "\nAsunto: *" + asunto + "*\nMensaje: *" + mensaje + "*";
          var enlaceWhatsApp = 'https://api.whatsapp.com/send?phone=' + numeroWhatsApp + '&text=' + encodeURIComponent(mensajeWhatsApp);

          window.location.href = enlaceWhatsApp;
        }
      });
     
    }

  });
});