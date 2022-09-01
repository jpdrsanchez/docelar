export default class MobileMenu {
    constructor(menuSelector, buttonSelector, callback) {
        this.menuSelector = document.querySelector(menuSelector);
        this.buttonSelector = document.querySelector(buttonSelector);
        this.callback = callback;
        this.handleClick = this.handleClick.bind(this);
    }

    handleClick(event) {
        event.preventDefault();
        this.menuSelector.classList.toggle("active");
        this.buttonSelector.classList.toggle("active");
        this.callback?.();
    }

    addClickEventListenerToElement(element) {
        element.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.buttonSelector && this.buttonSelector)
            this.addClickEventListenerToElement(this.buttonSelector);
    }
}
