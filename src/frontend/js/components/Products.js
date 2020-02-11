class Products extends Component{
  constructor(){
    super("section");
    this.initView();
  }

  async initView(){
    try {
      // Get de products van de server. Dit is een call naar een resource waarop we moeten wachten.
      let products = await api.getProducts();
      this.rootElement.innerHTML = `
      <h2>Products</h2>
      ${JSON.stringify(products)} <br>
      `;
      
    
      for(let p of products.products){
          let product = new Product(p);
        //  this.rootElement.innerHTML += product.getView();
        this.rootElement.append(product.getView());
       }
      
    }
    catch (err) {
        console.error(err);
    }
  }
}