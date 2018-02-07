<?php
class productController {

	private $productManager;
	private $product;

    public function __construct($db1) {
    
        require('./Model/Product.class.php');
	require_once('./Model/ProductManager.class.php');
	$this->productManager = new ProductManager($db1);

}

	public function display(){
		 $pdoBuilder = new Connexion();
		 $db = $pdoBuilder->get_connection();

		$page = "product";
		$prod = $this->productManager->findAll();
		require("./View/main.php");
	}

	public function displayOne($id){
		$page = "productOne";
		$prod = $this->productManager->findOne($id);
		require("./View/main.php");
	}

}