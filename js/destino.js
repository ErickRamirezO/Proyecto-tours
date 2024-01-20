document.addEventListener("DOMContentLoaded", function() {
	var textWrapper = document.querySelector('.titulo');
  textWrapper.textContent = textWrapper.textContent.trim();
	textWrapper.innerHTML = textWrapper.textContent.replace(/[a-zA-Z0-9ñÑíáó]/g, "<span class='letter'>$&</span>");

  var tamañoPantalla = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  var pixelesMoviles = 768;
  if (tamañoPantalla > pixelesMoviles) {
  	anime({
    targets: '.imagen_a',
    opacity: [0, 1],
    translateX: [850, -1050],
    easing: "easeOutExpo",
    duration: 7700,
    complete: function() {
      anime({
        targets: '.imagen_a',
        opacity: [1, 0]
      });
      }
    });
  }
	anime({
		targets: '.letter',
		opacity: [0, 1],
		easing: "easeOutExpo",
		duration: 1500,
		offset: '-=775',
		delay: (el, i) => 150 * (i + 1)
	});

	//Imagenes
	anime({
		targets: ".imagenes-portada div",
		translateY: [-20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});

	//Tabla de contenido
	anime({
		targets: ".table-of-contents li",
		translateY: [-20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});
	anime({
		targets: ".table-of-contents-sticky",
		translateX: [-100, 0],
		opacity: [0, 1],
		duration: 1800,
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});

  //Información del destino
  anime({
		targets: ".reservas-primero div",
		translateY: [20, 0],
		opacity: [0, 1],
		easing: "easeOutExpo",
		delay: anime.stagger(100),
	});
	anime({
		targets: ".reservas-primero",
		translateX: [100, 0],
		opacity: [0, 1],
		duration: 1800,
		easing: "easeOutExpo",
		delay: anime.stagger(150),
	});
  // Manejar el evento clic en los enlaces de la tabla de contenidos
    $(".table-of-contents ul li a").on("click", function (e) {
        e.preventDefault(); // Evitar el comportamiento predeterminado del enlace

        var target = $(this).attr("href"); 
        var offset = $(target).offset().top; 

        // Animacion suave
        $("html, body").animate(
            {
                scrollTop: offset,
            },
            700
        );
    });
});