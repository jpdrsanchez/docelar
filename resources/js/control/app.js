import "./bootstrap";
import * as bootstrap from "bootstrap/dist/js/bootstrap";
import "@fontsource/raleway/100.css";
import "@fontsource/raleway/200.css";
import "@fontsource/raleway/300.css";
import "@fontsource/raleway/400.css";
import "@fontsource/raleway/500.css";
import "@fontsource/raleway/600.css";
import "@fontsource/raleway/700.css";
import "@fontsource/raleway/800.css";
import "@fontsource/raleway/900.css";
import "@fontsource/raleway/100-italic.css";
import "@fontsource/raleway/200-italic.css";
import "@fontsource/raleway/300-italic.css";
import "@fontsource/raleway/400-italic.css";
import "@fontsource/raleway/500-italic.css";
import "@fontsource/raleway/600-italic.css";
import "@fontsource/raleway/700-italic.css";
import "@fontsource/raleway/800-italic.css";
import "@fontsource/raleway/900-italic.css";

import initImageSelection from "./modules/select-image";
initImageSelection();

import Quill from "quill";

const quillContainer = document.querySelectorAll("[data-quill]");

if (quillContainer.length) {
    quillContainer.forEach((quill) => {
        const quillInstance = new Quill(quill, {
            theme: "snow",
        });

        quillInstance.on("text-change", (delta, oldDelta, source) => {
            if (quill.nextElementSibling)
                quill.nextElementSibling.value =
                    quill.firstElementChild.innerHTML;
        });
    });
}

import Dropzone from "dropzone";

const dropzone = new Dropzone(".dropzone", {
    dictDefaultMessage: "Clique ou arraste as imagens que deseja subir",
});

const alertWrapper = document.querySelector("[data-alert]");

dropzone.on("success", (e) => {
    alertWrapper.classList.add("active");
});
