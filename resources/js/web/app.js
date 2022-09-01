import.meta.glob("/resources/images/**/*");

import Swiper from "swiper/bundle";
import "swiper/css";
import "swiper/css/pagination";

new Swiper(".swiper-home", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

new Swiper(".swiper-talks", {
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 30,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
});
