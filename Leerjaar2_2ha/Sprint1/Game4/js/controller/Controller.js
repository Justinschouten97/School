import {VierModel} from "../model/VierModel.js";
import {VierView} from "../view/VierView.js";

export class Controller {

    constructor() {
        this.model = new VierModel();
        this.view = new VierView(this.model);

        this.view.prepareTheGame(this.handleStartGame);
        this.view.prepareTheGame(this.handleCellMouseOver(event));
        this.view.prepareTheGame(this.handleCellMouseOut(event));
        this.view.prepareTheGame(this.handleCellClick(event));
        this.eventListener();

    }

    handleStartGame = () => {
        alert("De game word gestart");
        this.view.prepareTheGame();
        this.handleCellMouseOver();
        this.handleCellMouseOut();
        this.handleCellClick();
    };

// Event Handlers
    handleCellMouseOver = (e) => {
        if (!this.view.gameIsLive) return;
        const cell = e.target;
        const [rowIndex, colIndex] = this.view.getCellLocation(cell);

        this.view.topCell = this.view.topCells[colIndex];
        this.view.topCell.classList.add(this.yellowIsNext ? 'yellow' : 'red');

    };

    handleCellMouseOut = (e) => {
        const cell = e.target;
        const [rowIndex, colIndex] = this.view.getCellLocation(cell);
        this.view.clearColorFromTop(colIndex);
    };

    handleCellClick = (e) => {
        if (!this.model.gameIsLive) return;
        const cell = e.target;
        const [rowIndex, colIndex] = this.view.getCellLocation(cell);

        const openCell = this.view.getFirstOpenCellForColumn(colIndex);

        if (!openCell) return;

        openCell.classList.add(this.view.yellowIsNext ? 'yellow' : 'red');
        this.view.checkStatusOfGame(openCell);

        this.yellowIsNext = !this.yellowIsNext;
        this.view.clearColorFromTop(colIndex);

        if (this.view.gameIsLive) {
            this.topCell = this.view.topCells[colIndex];
            this.topCell.classList.add(this.yellowIsNext ? 'yellow' : 'red');
        }
    };


// Adding Event Listeners
    eventListener() {
        for (let row of this.view.rows) {
            for (const cell of row) {
                cell.addEventListener('mouseover', this.handleCellMouseOver());
                cell.addEventListener('mouseout', this.handleCellMouseOut());
                cell.addEventListener('click', this.handleCellClick);
            }
        }
    }
}