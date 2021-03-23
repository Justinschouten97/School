import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

export class Controller {

    constructor() {
        this.model = new VierModel();
        this.view = new VierView(this.model);


    }

    handleStartGame = () =>{
        alert("The game will be prepared, good luck");
    }

    handleCellMouseOver = (e) => {
        if (!gameIsLive) return;
        const cell = e.target;
        const [rowIndex, colIndex] = getCellLocation(cell);

        const topCell = topCells[colIndex];
        topCell.classList.add(yellowIsNext ? 'yellow' : 'red');

    };

    handleCellMouseOut = (e) => {
        const cell = e.target;
        const [rowIndex, colIndex] = getCellLocation(cell);
        clearColorFromTop(colIndex);
    };
}