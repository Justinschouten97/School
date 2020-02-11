const api = new API();

window.addEventListener('load', () => {
    let index = new Index();
    index.init();
});

class Index {
    constructor(){
        this.loginComponent = new Login(api.isAuthenticated);
        this.productsComponent = new Products();
    }
    
    async init(){
        document.getElementById("header").append(this.loginComponent.getView());
        document.querySelector("main").append(this.productsComponent.getView());
                
        // Check with the api if there is already al auth token.
        if(api.isAuthenticated) {
            // Get the logged in user
            try{
                let userData = await api.getUser()
                let userElements = document.getElementsByClassName('current-user');
                // If succeded render name at all the current-user locations by class
                for (let element of userElements) {
                    element.innerText = userData.name;
                }
            }
            catch(err){
                api.logoutUser();
                console.log(err)
                window.location = '/';
            }
        }

        this.loadProducts();
    }

    async loadProducts() {
        try {
            let products = await api.getProducts();
            document.getElementById("productSection").innerHTML = JSON.stringify(products);
        }
        catch (err) {
            console.error(err);
        }
    }
}