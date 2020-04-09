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
    }
}