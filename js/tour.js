$(document).ready(function() {
  //ANIMACION TEXTO
  const destinos = document.querySelector('.frase_tours_ecuador1');
	var text = destinos.textContent;
	destinos.textContent = "";

	// Crear un span para cada letra del texto
	for (let i = 0; i < text.length; i++) {
		var letter = document.createElement('span');
		letter.textContent = text[i];
		destinos.appendChild(letter);
	}

	// Animación de cada letra del texto
	var letters = destinos.querySelectorAll('span');

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
  


      $('.paginacion-pri').on('click', function () {
        $('.primero').fadeIn(900);
        $('.segundo, .tercero').hide(900);
      });

      $('.paginacion-seg').on('click', function () {
        $('.segundo').fadeIn(900);
        $('.primero, .tercero').hide(900);
      });

      $('.paginacion-ter').on('click', function () {
        $('.tercero').fadeIn(900);
        $('.primero, .segundo').hide(900);
      });

    //Movil paginacion
   
   $('.paginacion-1').on('click', function () {
    $('.movil-1, .primero').fadeIn(900);
    $('.movil-2, .movil-3, .movil-4, .movil-5, .movil-6').hide(900);
  });
  
  $('.paginacion-2').on('click', function () {
      $('.movil-2, .primero ').fadeIn(900);
      $('.movil-1, .movil-3, .movil-4, .movil-5, .movil-6').hide(900);
  });
  
  $('.paginacion-3').on('click', function () {
      $('.movil-3, .segundo').fadeIn(900);
      $('.movil-1, .movil-2, .movil-4, .movil-5, .movil-6').hide(900);
  });
  
  $('.paginacion-4').on('click', function () {
      $('.movil-4, .segundo').fadeIn(900);
      $('.movil-1, .movil-2, .movil-3, .movil-5, .movil-6').hide(900);
  });
  
  $('.paginacion-5').on('click', function () {
      $('.movil-5, .tercero').fadeIn(900);
      $('.movil-1, .movil-2, .movil-3, .movil-4, .movil-6').hide(900);
  });
  
  $('.paginacion-6').on('click', function () {
      $('.movil-6, .tercero').fadeIn(900);
      $('.movil-1, .movil-2, .movil-3, .movil-4, .movil-5').hide(900);
  });
	});