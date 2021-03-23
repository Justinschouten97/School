import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

// import {VierEvent} from "../model/VierEvent.js";

export class Controller {

    constructor() {
        this.vierOpEenRij = new VierModel();
        this.vierOpEenRijView = new VierView(this.vierOpEenRij);

        this.vierOpEenRijView.bindStartGame(this.handleStartGame);
        this.vierOpEenRijView.showSpeelBord();

    }

    handleStartGame = (e) => {
        alert("De game word gestart");
        this.vierOpEenRij.prepareTheGame();
        this.vierOpEenRijView.showSpeelBord();
        // this.vierOpEenRij.updateScore();
    }


    // handlePlaceCoin = (id) => {
    //     alert(id);
    //
    // }


}