var swiper = new Swiper(".swiper1", {
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        grabCursor: true
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
            spaceBetween: 30,

        },
        // when window width is >= 640px
        1500: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    },

});
// слайдер наши работы Установка GPS
const mySwiper1 = new Swiper(".slider-block1", {
    slidesPerView: 1,
    loop: true,
});
// зум
const sliderNavItemsOne = document.querySelectorAll('.s1');

sliderNavItemsOne.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        console.log(index);
        mySwiper1.slideTo(index);
    })
});

// слайдер наши работы Установка регистратора
const mySwiper2 = new Swiper(".slider-block2", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsTwo = document.querySelectorAll('.s2');

sliderNavItemsTwo.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper2.slideTo(index);
    })
});

// слайдер наши работы Рации
const mySwiper3 = new Swiper(".slider-block3", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsthree = document.querySelectorAll('.s3');

sliderNavItemsthree.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper3.slideTo(index);
    })
});

// слайдер наши работы
const mySwiper4 = new Swiper(".slider-block4", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsfour = document.querySelectorAll('.s4');

sliderNavItemsfour.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper4.slideTo(index);
    })
});

// слайдер наши работы
const mySwiper5 = new Swiper(".slider-block5", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsFive = document.querySelectorAll('.s5');

sliderNavItemsFive.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper5.slideTo(index);
    })
});

// слайдер наши работы
const mySwiper6 = new Swiper(".slider-block6", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsSix = document.querySelectorAll('.s6');

sliderNavItemsSix.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper6.slideTo(index);
    })
});

// слайдер наши работы
const mySwiper7 = new Swiper(".slider-block7", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsSeven = document.querySelectorAll('.s7');

sliderNavItemsSeven.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper7.slideTo(index);
    })
});

// слайдер наши работы
const mySwiper8 = new Swiper(".slider-block8", {
    slidesPerView: 1,
    loop: true,
});

const sliderNavItemsEight = document.querySelectorAll('.s8');

sliderNavItemsEight.forEach((el, index) => {
    el.setAttribute('data-index', index);

    el.addEventListener('click', (e) => {
        const index = parseInt(e.currentTarget.dataset.index) + 1;
        mySwiper8.slideTo(index);
    })
});

//кнопка скрола 

$(function() {
    $('#scroll_bottom').attr('style', 'display:none');
    $(window).scroll(function() {
        let scrollTop = $(window).scrollTop();
        if (scrollTop >= 600) {
            $('.swap-button__item').attr('style', 'display:flex');
        }
    });


    $('#scroll_top').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 600);
        $('#scroll_bottom').attr('style', 'display:block');

        $(window).bind('mousewheel', function(event) {
            if (event.originalEvent.wheelDelta <= 0) {
                $('#scroll_bottom').attr('style', 'display:none');
            }
        });
    });

    $(window).scroll(function() {

        const sb = $(window).scrollTop();

        $(window).bind('mousewheel', function(event) {
            if (event.originalEvent.wheelDelta >= 0) {} else {
                let sc = $(window).height();
                const st = sb + sc;

                $('#scroll_bottom').click(function() {
                    window.scrollBy(0, st);
                    $('#scroll_bottom').attr('style', 'display:none');
                });
            }
        });


        if ($(this).scrollTop() >= 810) {
            $('.swap-button').addClass('stickytop');
        } else {
            $('.swap-button').removeClass('stickytop');
        }

    });

});


document.getElementById("tahograf-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("tahograf-img").setAttribute("visibility", "visable");
    document.getElementById("tahograf-text").setAttribute("visibility", "visable");
    document.getElementById("tahograf-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("tahograf-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("tahograf-img").setAttribute("visibility", "hidden");
    document.getElementById("tahograf-text").setAttribute("visibility", "hidden");
    document.getElementById("tahograf-button").setAttribute("fill", "#3c96c8");
}

document.getElementById("psm-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("psm-img").setAttribute("visibility", "visable");
    document.getElementById("psm-text").setAttribute("visibility", "visable");
    document.getElementById("psm-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("psm-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("psm-img").setAttribute("visibility", "hidden");
    document.getElementById("psm-text").setAttribute("visibility", "hidden");
    document.getElementById("psm-button").setAttribute("fill", "#3c96c8");
}

document.getElementById("serv-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("serv-img").setAttribute("visibility", "visable");
    document.getElementById("serv-text").setAttribute("visibility", "visable");
    document.getElementById("serv-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("serv-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("serv-img").setAttribute("visibility", "hidden");
    document.getElementById("serv-text").setAttribute("visibility", "hidden");
    document.getElementById("serv-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("ourw-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("ourw-img").setAttribute("visibility", "visable");
    document.getElementById("ourw-text").setAttribute("visibility", "visable");
    document.getElementById("ourw-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("ourw-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("ourw-img").setAttribute("visibility", "hidden");
    document.getElementById("ourw-text").setAttribute("visibility", "hidden");
    document.getElementById("ourw-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("relw-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("relw-img").setAttribute("visibility", "visable");
    document.getElementById("relw-text").setAttribute("visibility", "visable");
    document.getElementById("relw-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("relw-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("relw-img").setAttribute("visibility", "hidden");
    document.getElementById("relw-text").setAttribute("visibility", "hidden");
    document.getElementById("relw-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("refl-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("refl-img").setAttribute("visibility", "visable");
    document.getElementById("refl-text").setAttribute("visibility", "visable");
    document.getElementById("refl-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("refl-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("refl-img").setAttribute("visibility", "hidden");
    document.getElementById("refl-text").setAttribute("visibility", "hidden");
    document.getElementById("refl-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("tozm-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("tozm-img").setAttribute("visibility", "visable");
    document.getElementById("tozm-text").setAttribute("visibility", "visable");
    document.getElementById("tozm-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("tozm-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("tozm-img").setAttribute("visibility", "hidden");
    document.getElementById("tozm-text").setAttribute("visibility", "hidden");
    document.getElementById("tozm-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("snno-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("snno-img").setAttribute("visibility", "visable");
    document.getElementById("snno-text").setAttribute("visibility", "visable");
    document.getElementById("snno-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("snno-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("snno-img").setAttribute("visibility", "hidden");
    document.getElementById("snno-text").setAttribute("visibility", "hidden");
    document.getElementById("snno-button").setAttribute("fill", "#3c96c8");
}

document.getElementById("odas-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("odas-img").setAttribute("visibility", "visable");
    document.getElementById("odas-text").setAttribute("visibility", "visable");
    document.getElementById("odas-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("odas-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("odas-img").setAttribute("visibility", "hidden");
    document.getElementById("odas-text").setAttribute("visibility", "hidden");
    document.getElementById("odas-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("otop-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("otop-img").setAttribute("visibility", "visable");
    document.getElementById("otop-text").setAttribute("visibility", "visable");
    document.getElementById("otop-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("otop-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("otop-img").setAttribute("visibility", "hidden");
    document.getElementById("otop-text").setAttribute("visibility", "hidden");
    document.getElementById("otop-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("sign-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("sign-img").setAttribute("visibility", "visable");
    document.getElementById("sign-text").setAttribute("visibility", "visable");
    document.getElementById("sign-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("sign-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("sign-img").setAttribute("visibility", "hidden");
    document.getElementById("sign-text").setAttribute("visibility", "hidden");
    document.getElementById("sign-button").setAttribute("fill", "#3c96c8");
}
document.getElementById("dutd-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("dutd-img").setAttribute("visibility", "visable");
    document.getElementById("dutd-text").setAttribute("visibility", "visable");
    document.getElementById("dutd-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("dutd-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("dutd-img").setAttribute("visibility", "hidden");
    document.getElementById("dutd-text").setAttribute("visibility", "hidden");
    document.getElementById("dutd-button").setAttribute("fill", "#3c96c8");
}

document.getElementById("tmar-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("tmar-img").setAttribute("visibility", "visable");
    document.getElementById("tmar-text").setAttribute("visibility", "visable");
    document.getElementById("tmar-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("tmar-button").onmouseleave = function() {
        let coreImg = document.getElementById("core-menu-img");
        coreImg.setAttribute("visibility", "visable");
        document.getElementById("tmar-img").setAttribute("visibility", "hidden");
        document.getElementById("tmar-text").setAttribute("visibility", "hidden");
        document.getElementById("tmar-button").setAttribute("fill", "#3c96c8");
    }
    //+
document.getElementById("vreg-button").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("visibility", "hidden");
    document.getElementById("vreg-img").setAttribute("visibility", "visable");
    document.getElementById("vreg-text").setAttribute("visibility", "visable");
    document.getElementById("vreg-button").setAttribute("fill", "#BBBDBE");

}
document.getElementById("vreg-button").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("visibility", "visable");
    document.getElementById("vreg-img").setAttribute("visibility", "hidden");
    document.getElementById("vreg-text").setAttribute("visibility", "hidden");
    document.getElementById("vreg-button").setAttribute("fill", "#3c96c8");
}
allMButton

//все пункты включить
document.getElementById("core-menu-img-area").onmouseover = function() {
    document.getElementById("core-menu-img").setAttribute("fill", "#3c96c8");
    document.getElementById("vreg-text").setAttribute("visibility", "visible");
    document.getElementById("tmar-text").setAttribute("visibility", "visible");
    document.getElementById("dutd-text").setAttribute("visibility", "visible");
    document.getElementById("sign-text").setAttribute("visibility", "visible");
    document.getElementById("otop-text").setAttribute("visibility", "visible");
    document.getElementById("odas-text").setAttribute("visibility", "visible");
    document.getElementById("snno-text").setAttribute("visibility", "visible");
    document.getElementById("tozm-text").setAttribute("visibility", "visible");
    document.getElementById("refl-text").setAttribute("visibility", "visible");
    document.getElementById("relw-text").setAttribute("visibility", "visible");
    document.getElementById("ourw-text").setAttribute("visibility", "visible");
    document.getElementById("serv-text").setAttribute("visibility", "visible");
    document.getElementById("psm-text").setAttribute("visibility", "visible");
    document.getElementById("tahograf-text").setAttribute("visibility", "visible");


}
document.getElementById("core-menu-img-area").onmouseleave = function() {
    let coreImg = document.getElementById("core-menu-img");
    coreImg.setAttribute("fill", "none");
    document.getElementById("vreg-text").setAttribute("visibility", "hidden");
    document.getElementById("tmar-text").setAttribute("visibility", "hidden");
    document.getElementById("dutd-text").setAttribute("visibility", "hidden");
    document.getElementById("sign-text").setAttribute("visibility", "hidden");
    document.getElementById("otop-text").setAttribute("visibility", "hidden");
    document.getElementById("odas-text").setAttribute("visibility", "hidden");
    document.getElementById("snno-text").setAttribute("visibility", "hidden");
    document.getElementById("tozm-text").setAttribute("visibility", "hidden");
    document.getElementById("refl-text").setAttribute("visibility", "hidden");
    document.getElementById("relw-text").setAttribute("visibility", "hidden");
    document.getElementById("ourw-text").setAttribute("visibility", "hidden");
    document.getElementById("serv-text").setAttribute("visibility", "hidden");
    document.getElementById("psm-text").setAttribute("visibility", "hidden");
    document.getElementById("tahograf-text").setAttribute("visibility", "hidden");

}



// Мобильное меню

$(document).ready(function() {
    $("#mc2mobil").click(function() {
        $('.mob-menu').addClass("mob-visible");
    });
    $(".mob-menu__close").click(function() {
        $('.mob-menu').removeClass("mob-visible");
    });

});