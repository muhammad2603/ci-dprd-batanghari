const swiper = new Swiper('.swiper', {
    effect: 'slide',
    speed: 1500,
    loop: true,
    autoplay: {
        delay: 8000
    },
    navigation: {
        nextEl: '.custom-button-next',
        prevEl: '.custom-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },
});