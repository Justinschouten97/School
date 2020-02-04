const express = require('express');
const router = express.Router();
const auth = require('../../middleware/auth');
const { check, validationResult } = require('express-validator');

// Models
const Product = require('../../models/Product');
const User = require('../../models/User');

// @route    GET api/products
// @desc     Get all products
// @access   Public
router.get('/', 
    async (req, res) => {
        console.log(req);
        try {
            const products = await Product.find().sort({ date: -1 });
            res.json(products);
        } 
        catch (err) {
            console.error(err.message);
            res.status(500).send('Server Error');
        }
    }
);

// @route    GET api/products/:id
// @desc     Get post by ID
// @access   Public
router.get('/:id', 
    async (req, res) => {
        try {
            // Check for ObjectId format
            let product;
            if(req.params.id.match(/^[0-9a-fA-F]{24}$/)){
                product = await Product.findById(req.params.id);
              
                if (product) {
                    return res.json(product);
                }
            }
            return res.status(404).json({ msg: 'product not found' });
        } 
        catch (err) {
            console.error(err.message);
            res.status(500).send('Server Error');
        }
    }
);

//post Product toevoegen          admin
// @route    POST api/products
// @desc     Create a post
// @access   Private
router.post('/', [
        auth, [
            check('name', 'Name is required').not().isEmpty(),
        ]
    ],
    async (req, res) => {
        const errors = validationResult(req);
        if (!errors.isEmpty()) {
            return res.status(400).json({ errors: errors.array() });
        }
        
        try {
            const user = await User.findById(req.user.id).select('-password');
            
            if(user.role !== 'admin') {
                res.status(403).send('Not authorized');
                return;
            }

            const { name, brand, images, description, price, quantityInStock } = req.body;


            const newProduct = new Product({ name, brand, images, description, price, quantityInStock });

            const product = await newProduct.save();

            res.json(product);
        } 
        catch (err) {
            console.error(err.message);
            res.status(500).send('Server Error');
        }
    }
);


module.exports = router;



//get searchbyname /products?cat=sport   all

//update product                admin

//delete product                admin
