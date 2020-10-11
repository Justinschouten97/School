import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

// import {VierEvent} from "../model/VierEvent.js";

export class Controller {

    constructor() {
        this.vierOpEenRij = new VierModel();
        this.vierOpEenRijView = new VierView(this.vierOpEenRij);

        this.coin = this.vierOpEenRij.placeCoin();
        this.vierOpEenRijView = new VierView(this.coin);


        this.vierOpEenRijView.bindStartGame(this.handleStartGame);

    }

    handleStartGame = () => {
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