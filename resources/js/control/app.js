import "./bootstrap";
import * as bootstrap from "bootstrap/dist/js/bootstrap";

import initImageSelection from "./modules/select-image";
initImageSelection();

import Quill from "quill";
const quillContainer = document.querySelector("[data-quill]");
if (quillContainer)
    new Quill(quillContainer, {
        theme: "snow",
    });
