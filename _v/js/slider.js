new Swiper('.complex-slider .image-slider', {
    navigation: {
        nextEl: '.complex-slider .swiper-button-next',
        prevEl: '.complex-slider .swiper-button-prev'
    },
    pagination: {
        el: '.complex-slider .swiper-pagination',
        clickable: true,
    },
    speed: 1000,
    spaceBetween: 60,
    slidesPerView: 1,
    slidesPerGroup: 1,
});

new Swiper('.partners-slider .image-slider', {
    navigation: {
        nextEl: '.partners-slider .swiper-button-next',
        prevEl: '.partners-slider .swiper-button-prev'
    },
    pagination: {
        el: '.partners-slider .swiper-pagination',
        clickable: true,
    },
    speed: 1000,
    autoHeight: true,
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
    slidesPerGroup: 1,
    
});