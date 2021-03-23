export class VierView {

    constructor(view) {
        this.view = view;
    }

    // restbutton
    resetButton() {
        this.resetButton.addEventListener('click', () => {
            for (const row of this.view.rows) {
                for (const cell of row) {
                    cell.classList.remove('red');
                    cell.classList.remove('yellow');
                    cell.classList.remove('win');
                }
            }
            this.view.gameIsLive = true;
            this.view.yellowIsNext = true;
            this.view.statusSpan.textContent = ' ';
        });
    }
}