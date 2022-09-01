import.meta.glob("/resources/images/**/*");
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

const swiper = new Swiper(".swiper-home", {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
