const initImageSelection = () => {
    const cards = document.querySelectorAll("[data-card]");
    const buttons = document.querySelectorAll("[data-select]");
    const inputs = document.querySelectorAll("[data-input]");
    const uploadInput = document.querySelector("[data-upload]");

    if (cards.length && buttons.length && inputs.length) {
        uploadInput.addEventListener("change", () => {
            cards.forEach((card) => {
                card.classList.remove("card-selected");
            });
            inputs.forEach((input) => {
                input.checked = false;
            });
        });

        cards.forEach((card, index) => {
            card.classList.remove("card-selected");
            if (inputs[index]?.checked) card.classList.add("card-selected");
        });

        buttons.forEach((button) => {
            button.addEventListener("click", (e) => {
                e.preventDefault();
                button.nextElementSibling.click();
                uploadInput.value = "";
            });
        });

        inputs.forEach((input, index) => {
            input.addEventListener("change", (e) => {
                cards.forEach((card) => {
                    card.classList.remove("card-selected");
                });

                cards[index].classList.toggle("card-selected");
            });
        });
    }
};
export default initImageSelection;
