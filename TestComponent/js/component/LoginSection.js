class LoginSection extends Component {

    constructor() {
        super("section");
        this.rootElement.id = "login";
        this.rootElement.classList.add("loginSection");
        this.initView();
    }

    initView() {
        this.rootElement.innerHTML = `
        <h1>Login Component</h1>
            <form id="loginForm">
                <input type="text" name="name" id="name" placeholder="username">
                <input type="password" name="password" id="password" placeholder="password">
                <button class="button">Login</button>
            </form>
            <p id="errorText"></p> `;
        let formEl = this.getElementbyId("loginForm");
        // Listen to the submit event // is een door geef luik geworden (event) => {this...(event); });
        formEl.addEventListener("submit", (event) => { // <-- Arrow function so this stay this
            this.onSubmit(event);
        });
    }

    onSubmit(event) {
        event.preventDefault(); // prevent the default request
        // Get the values from the form
        let username = this.getElementbyId("name").value;
        let password = this.getElementbyId("password").value;

        // Check whether the correct username and password are the same as the form values
        if (username === this.correctUsername && password === this.correctPassword) {
            this.getElementbyId("login").textContent = "Login succes!";
        } else {
            // Get all the input elements with the <input> tag
            let inputs = this.rootElement.getElementsByTagName("input");
            for (const input of inputs) {
                // Add the class error which colors the borders red
                input.classList.add('error');
            }
            // Used textContent to prevent XSS
            this.getElementbyId("errorText").textContent = "Login mislukt!";
        }
    }
}