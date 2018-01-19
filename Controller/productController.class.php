<?php
class productController {

	private $productManager;
	private $product;

    public function __construct($db1) {

        require('./Model/Product.class.php');
	require_once('./Model/ProductManager.class.php');
	$this->userManager = new UserManager($db1);


	public function addToCart(){

	}

	public function display(){
		
	}

}