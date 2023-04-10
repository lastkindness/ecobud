import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    const swiper = new Swiper(".portfolio-slider.swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: false,
        mousewheel: true,
        keyboard: true,
        speed: 600,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            240: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 32,
            },
            1025: {
                mousewheel: false,
                keyboard: false,
            },
            1280: {
                mousewheel: false,
                keyboard: false,
                slidesPerView: 3,
                spaceBetween: 32,
            },
        },
    });
};
