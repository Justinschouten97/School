export class VierView {
    // Constructor
    images = [];
    vier;


    constructor(vier) {
        this.getElement();
        this.bindStartGame();
    }

    // functie om te elementen te selecteren uit de DOM (selector)
    getElement(selector) {
        let speelBoardComponent = new VierView();
        document.querySelector("speelBord").append(speelBoardComponent.getView());
    }

    // functie die de kleur van het muntje aan geeft (handler)


    // button om de game te starten
    bindStartGame(handler) {
        let startButton = this.getElement("#start");
        startButton.addEventListener('click', VierEvent => {
            handler();
        })
    }
}