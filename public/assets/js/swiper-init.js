const swiper = new Swiper('.swiper', {
    speed: 500,
    loop: true,
    navigation: {
        nextEl: '.custom-button-next',
        prevEl: '.custom-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});