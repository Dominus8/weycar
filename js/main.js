// const swiper = new Swiper('.swiper-container', {
//     direction: 'vertical',
//     loop: true,

//     pagination: {
//         el: '.swiper-pagination',
//     },

//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },

//     scrollbar: {
//         el: '.swiper-scrollbar',
//     },
// });

var swiper = new Swiper(".swiper-container", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window width is >= 480px
        1024: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1440: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

});