const splide = new Splide('.splide', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 3,
    autoScroll: {
        speed: 3,
    },
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