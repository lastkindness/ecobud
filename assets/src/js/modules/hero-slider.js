import Swiper from 'swiper/swiper-bundle.min';

export default () => {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 2,
        watchSlidesProgress: true,
        loop: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 0,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        thumbs: {
            swiper: swiper,
        },
    });
}
