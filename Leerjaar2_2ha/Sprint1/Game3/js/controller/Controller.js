import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

export class Controller {

    constructor() {
        this.view = new VierView(this);
        this.model = new VierModel(this.view);

        this.model.prepareTheGame(this.handleStartGame);
        this.eventListener();

    }

    handleStartGame = (e) => {
        alert("De game word gestart");
        this.model.prepareTheGame();
    };

// Event Handlers
    handleCellMouseOver = (e) => {
        if (!this.model.gameIsLive) return;
        this.model.cell = e.target;
        const [rowIndex, colIndex] = this.model.getCellLocation(this.cell);

        this.topCell = this.model.topCells[colIndex];
        this.topCell.classList.add(this.yellowIsNext ? 'yellow' : 'red');

    };

    handleCellMouseOut = (e) => {
        this.cell = e.target;
        const [rowIndex, colIndex] = this.model.getCellLocation(this.cell);
        this.model.clearColorFromTop(colIndex);
    };

    handleCellClick = (e) => {
        if (!this.model.gameIsLive) return;
        this.cell = e.target;
        const [rowIndex, colIndex] = this.model.getCellLocation(this.cell);

        this.openCell = this.model.getFirstOpenCellForColumn(colIndex);

        if (!this.model.openCell) return;

        this.openCell.classList.add(this.model.yellowIsNext ? 'yellow' : 'red');
        this.model.checkStatusOfGame(this.openCell);

        this.yellowIsNext = !this.yellowIsNext;
        this.model.clearColorFromTop(colIndex);

        if (this.model.gameIsLive) {
            this.topCell = this.model.topCells[colIndex];
            this.topCell.classList.add(this.yellowIsNext ? 'yellow' : 'red');
        }
    };


// Adding Event Listeners
    eventListener() {
        for (let row of this.model.rows) {
            for (this.cell of row) {
                this.cell.addEventListener('mouseover', this.handleCellMouseOver());
                this.cell.addEventListener('mouseout', this.handleCellMouseOut());
                this.cell.addEventListener('click', this.handleCellClick);
            }
        }
    }
}