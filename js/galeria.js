$(document).ready(function () {
    $('[data-fancybox="gallery"]').fancybox({
      buttons: [
        "slideShow",
        "fullScreen",
        "thumbs",
        "close"
      ],
      clickOutside: true, 
    });
  //Animación seccion reserva
    let abierto = false;

    $(".Boton-mas").click(function() {
        if (!abierto) {
            anime({
                targets: ".reservas-primero",
                translateX: [-20, 0],
                opacity: [0, 1],
                easing: "easeOutExpo",
                delay: anime.stagger(150),
            });
        } else {
            anime({
                targets: ".reservas-primero",
                translateX: [0, -20],
                opacity: [1, 0],
                easing: "easeOutExpo",
            });
        }

        // Cambia el estado de abierto/cerrado
        abierto = !abierto;
    });
});


