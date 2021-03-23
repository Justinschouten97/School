export class VierModel extends EventTarget {

    constructor() {
        super();

        this.prepareTheGame();
    }


    prepareTheGame() {

// DOM Elements
        this.allCells = document.querySelectorAll('.cell:not(.row-top)');
        this.topCells = document.querySelectorAll('.cell.row-top');
        this.resetButton = document.querySelector('.reset');
        this.statusSpan = document.querySelector('.status');

// columns
        this.column0 = [this.allCells[35], this.allCells[28], this.allCells[21], this.allCells[14], this.allCells[7], this.allCells[0], this.topCells[0]];
        this.column1 = [this.allCells[36], this.allCells[29], this.allCells[22], this.allCells[15], this.allCells[8], this.allCells[1], this.topCells[1]];
        this.column2 = [this.allCells[37], this.allCells[30], this.allCells[23], this.allCells[16], this.allCells[9], this.allCells[2], this.topCells[2]];
        this.column3 = [this.allCells[38], this.allCells[31], this.allCells[24], this.allCells[17], this.allCells[10], this.allCells[3], this.topCells[3]];
        this.column4 = [this.allCells[39], this.allCells[32], this.allCells[25], this.allCells[18], this.allCells[11], this.allCells[4], this.topCells[4]];
        this.column5 = [this.allCells[40], this.allCells[33], this.allCells[26], this.allCells[19], this.allCells[12], this.allCells[5], this.topCells[5]];
        this.column6 = [this.allCells[41], this.allCells[34], this.allCells[27], this.allCells[20], this.allCells[13], this.allCells[6], this.topCells[6]];
        this.columns = [this.column0, this.column1, this.column2, this.column3, this.column4, this.column5, this.column6];

// rows
        this.topRow = [this.topCells[0], this.topCells[1], this.topCells[2], this.topCells[3], this.topCells[4], this.topCells[5], this.topCells[6]];
        this.row0 = [this.allCells[0], this.allCells[1], this.allCells[2], this.allCells[3], this.allCells[4], this.allCells[5], this.allCells[6]];
        this.row1 = [this.allCells[7], this.allCells[8], this.allCells[9], this.allCells[10], this.allCells[11], this.allCells[12], this.allCells[13]];
        this.row2 = [this.allCells[14], this.allCells[15], this.allCells[16], this.allCells[17], this.allCells[18], this.allCells[19], this.allCells[20]];
        this.row3 = [this.allCells[21], this.allCells[22], this.allCells[23], this.allCells[24], this.allCells[25], this.allCells[26], this.allCells[27]];
        this.row4 = [this.allCells[28], this.allCells[29], this.allCells[30], this.allCells[31], this.allCells[32], this.allCells[33], this.allCells[34]];
        this.row5 = [this.allCells[35], this.allCells[36], this.allCells[37], this.allCells[38], this.allCells[39], this.allCells[40], this.allCells[41]];
        this.rows = [this.row0, this.row1, this.row2, this.row3, this.row4, this.row5, this.topRow];

// variables
        this.gameIsLive = true;
        this.yellowIsNext = true;

// Functions
        const getClassListArray = (cell) => {
            this.classList = cell.classList;
             return Array.from(this.classList);
             console.log(this.classList);
            // return [this.classList];
        };

        this.getCellLocation = (cell) => {
            const classList = getClassListArray(cell);

            const rowClass = classList.find(className => className.includes('row'));
            const colClass = classList.find(className => className.includes('col'));
            const rowIndex = rowClass[4];
            const colIndex = colClass[4];
            const rowNumber = parseInt(rowIndex, 10);
            const colNumber = parseInt(colIndex, 10);

            return [rowNumber, colNumber];
        };

        this.getFirstOpenCellForColumn = (colIndex) => {
            const column = this.columns[colIndex];
            const columnWithoutTop = column.slice(0, 6);

            for (const cell of columnWithoutTop) {
                const classList = this.getClassListArray(cell);
                if (!classList.includes('yellow') && !classList.includes('red')) {
                    return cell;
                }
            }
            return null; // als er geen open cellen meer zijn
        };

        this.clearColorFromTop = (colIndex) => {
            this.topCell = this.topCells[colIndex];
            this.topCell.classList.remove('yellow');
            this.topCell.classList.remove('red');
        };

        this.getColorOfCell = (cell) => {
            this.classList = this.getClassListArray(cell);
            if (this.classList.includes('yellow')) return 'yellow';
            if (this.classList.includes('red')) return 'red';
            return null;
        };

        this.checkWinningCells = (cells) => {
            if (cells.length < 4) return false;

            this.gameIsLive = false;
            for (const cell of cells) {
                cell.classList.add('win');
            }
            this.statusSpan.textContent = `${this.yellowIsNext ? 'Yellow' : 'Red'} has won!`;
            return true;
        };

        this.checkStatusOfGame = (cell) => {
            this.color = this.getColorOfCell(cell);
            if (!this.color) return;
            [this.rowIndex, this.colIndex] = this.getCellLocation(cell);


            // ************************ Check horizontally *******************
            let winningCells = [cell];
            let rowToCheck = this.rowIndex;
            let colToCheck = this.colIndex - 1;
            while (colToCheck >= 0) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    colToCheck--;
                } else {
                    break;
                }
            }
            colToCheck = this.colIndex + 1;
            while (colToCheck <= 6) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    colToCheck++;
                } else {
                    break;
                }
            }
            let isWinningCombo = this.checkWinningCells(winningCells);
            if (isWinningCombo) return;


            // ************************ Check vertically *******************
            winningCells = [cell];
            rowToCheck = this.rowIndex - 1;
            colToCheck = this.colIndex;
            while (rowToCheck >= 0) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck--;
                } else {
                    break;
                }
            }
            rowToCheck = this.rowIndex + 1;
            while (rowToCheck <= 5) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck++;
                } else {
                    break;
                }
            }
            isWinningCombo = this.checkWinningCells(winningCells);
            if (isWinningCombo) return;


            // ************************ Check diagonally /from left to up right *******************
            winningCells = [cell];
            rowToCheck = this.rowIndex + 1;
            colToCheck = this.colIndex - 1;
            while (colToCheck >= 0 && rowToCheck <= 5) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck++;
                    colToCheck--;
                } else {
                    break;
                }
            }
            rowToCheck = this.rowIndex - 1;
            colToCheck = this.colIndex + 1;
            while (colToCheck <= 6 && rowToCheck >= 0) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck--;
                    colToCheck++;
                } else {
                    break;
                }
            }
            isWinningCombo = this.checkWinningCells(winningCells);
            if (isWinningCombo) return;


            // ************************ Check diagonally /from right to up left *******************
            winningCells = [cell];
            rowToCheck = this.rowIndex - 1;
            colToCheck = this.colIndex - 1;
            while (colToCheck >= 0 && rowToCheck >= 0) {
                this.cellToCheck = this.rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck--;
                    colToCheck--;
                } else {
                    break;
                }
            }
            rowToCheck = this.rowIndex + 1;
            colToCheck = this.colIndex + 1;
            while (colToCheck <= 6 && rowToCheck <= 5) {
                this.cellToCheck = rows[rowToCheck][colToCheck];
                if (this.getColorOfCell(this.cellToCheck) === this.color) {
                    winningCells.push(this.cellToCheck);
                    rowToCheck++;
                    colToCheck++;
                } else {
                    break;
                }
            }
            isWinningCombo = this.checkWinningCells(winningCells);
            if (isWinningCombo) return;


            // Check tot see if we have a tie
            this.rowsWithoutTop = this.rows.slice(0, 6);
            for (const row of this.rowsWithoutTop) {
                for (this.cell of row) {
                    this.classList = this.getClassListArray(cell);
                    if (!this.classList.includes('yellow') && !this.classList.includes('red')) {
                        return;
                    }
                }
            }

            this.gameIsLive = false;
            this.statusSpan.textContent = "Game is a tie!";
        };
    }
}