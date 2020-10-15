import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

export class Controller {

    constructor() {
        this.vierOpEenRij = new VierModel();
        this.vierOpEenRijView = new VierView();

        this.vierOpEenRijView.bindStartGame(this.handleStartGame);
        this.vierOpEenRijView.bindRestartGame(this.handleStartGame);
        this.vierOpEenRijView.showSpeelBord();

    }

    handleStartGame = (e) => {
        alert("De game word gestart");
        this.vierOpEenRij.prepareTheGame();
        this.vierOpEenRijView.showSpeelBord();
    }
}