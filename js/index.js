document.addEventListener("DOMContentLoaded", function() {
	// Obtener el texto

	const textWrapper = document.querySelector('.text-overlay');
	textWrapper.textContent = textWrapper.textContent.trim();
	textWrapper.innerHTML = textWrapper.textContent.replace(/[a-zA-Z0-9ñÑíáÍ]/g, "<span class='letter'>$&</span>");

	anime({
		targets: '.letter',
		opacity: [0, 1],
		easing: "easeOutExpo",
		duration: 1500,
		offset: '-=775',
		delay: (el, i) => 15 * (i + 1)
	});

	// Animación de los divs de "primera-portada", "segunda-portada" y "tercera-portada"
	anime({
		targets: '.indexportada > div',
		opacity: [0, 1],
		translateX: [20, 0],
		duration: 1000,
		easing: 'easeOutExpo',
		delay: anime.stagger(500),
	});
  
});