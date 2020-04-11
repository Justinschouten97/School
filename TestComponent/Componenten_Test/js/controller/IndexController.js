window.addEventListener("load", (e) => {
    let index = new IndexController();
    index.init();
});

class IndexController {

    init() {

        let loginComponent = new LoginSection();
        document.querySelector("main").append(loginComponent.getView());

        this.correctUsername = "admin";
        this.correctPassword = "admin";

        let formEl = document.getElementById('loginForm');
        // Listen to the submit event
        formEl.addEventListener("submit", this.onSubmit)
    }

    onSubmit(event) {
        event.preventDefault(); // prevent the default request
        // Get the values from the form
        let username = document.getElementById("name").value;
        let password = document.getElementById("password").value;

        // Check whether the correct username and password are the same as the form values
        if (username === this.correctUsername && password === this.correctPassword) {
            document.getElementById("login").textContent = "Login succes!";
        } else {
            // Get all the input elements with the <input> tag
            let inputs = document.getElementsByTagName("input");
            for (const input of inputs) {
                // Add the class error which colors the borders red
                input.classList.add('error');
            }
            // Used textContent to prevent XSS
            document.getElementById("errorText").textContent = "Login mislukt!";
        }
    }
}
