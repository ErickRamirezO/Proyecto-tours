//Slider
document.addEventListener('DOMContentLoaded', function() {
	var splide = new Splide('.splide', {
		type: 'loop',
		perPage: 3,
		autoplay: true,
    breakpoints: {
        '640': {
            perPage: 1,
        },
        '768': {
            perPage: 2, // Para tablets
        },
    },
	});

	splide.mount();
});