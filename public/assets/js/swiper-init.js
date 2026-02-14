// Swiper Element
const swiperWrapper = document.getElementById('swiperWrapper');
// Slides Element
const getSlides = swiperWrapper.querySelectorAll('.swiper-slide');
// Initialize Swiper
const swiper = new Swiper('.swiper', {
    // Set effect to slide (move effect)
    effect: 'slide',
    // Disabled Swiper first for nice visual
    enabled: false,
    // Set speed effect to 1500ms (1.5s)
    speed: 1500,
    // Set loop for swiper not stuck at beginning or end slide
    loop: true,
    // Set autoplay
    autoplay: {
        // with delay 8000ms (8s) to change slide automatic
        delay: 8000
    },
    // Navigation Control
    navigation: {
        // Next Element
        nextEl: '.custom-button-next',
        // prev Element
        prevEl: '.custom-button-prev',
    },
    // Pagination Control
    pagination: {
        // Pagination Element
        el: '.swiper-pagination',
        // Enable clickable: for change slide when pagination clicked
        clickable: true,
    },
    // Keyboard Control
    keyboard: {
        // Set to enabled: for change slide when keyboard arrow clicked, this mean "<" (before) and ">" (after) on keyboard to control move slide
        enabled: true,
        // Set onvlyInViewport as true: for event Keyboard active only on element while entered viewport
        onlyInViewport: true,
    },
    // On event
    on: {
        // When swiper completed initialized
        init: () => {
            // Set Timeout
            setTimeout(() => {
                // Remove class overflow-hidden to swiperWrapper
                swiperWrapper.classList.remove('overflow-hidden')
                // Loop element slide, then remove class invisible (this important to understand)
                getSlides.forEach(item => item.classList.remove('invisible'))
                // Enable swiper
                swiper.enable()
            }, 3000) // with delay. Change delay if that make so slow or too fast
        },
    },
});