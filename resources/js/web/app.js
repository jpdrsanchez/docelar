import.meta.glob("/resources/images/**/*");
import "./modules/swipe";

import MobileMenu from "./modules/mobile-menu";
new MobileMenu('[data-menu="menu"]', '[data-menu="button"]', () => {
    document.body.classList.toggle("overflow");
}).init();
