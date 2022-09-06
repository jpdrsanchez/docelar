import "./bootstrap";
import * as bootstrap from "bootstrap/dist/js/bootstrap";

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
