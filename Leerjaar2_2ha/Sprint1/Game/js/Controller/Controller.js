import {MemoryModel} from "../Module/";
import {MemoryView} from "../View/MemoryView.js";

export class Controller {

    constructor() {
        this.memory = new MemoryModel();
        this.memoryView = new MemoryView(this.memory);


        this.memoryView.bindStartGame(this.handleStartGame);
    }

    handleStartGame = () => {
        alert("De game word gestart");
        this.memory.prepareTheGame();
        this.memoryView.showCardset();
        this.memoryView.updateScore();
    }

    handlePlaceCoin = (id) => {
        alert(id);

    }
}