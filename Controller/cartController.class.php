<?php
class cartController {
    
    private $lineOrder;
    private $id_order = 0;

//    private $productManager;
    
    public function __construct($db){
        require("./Model/lineOrder.class.php");
        require('./Model/Product.class.php');
        require_once('./Model/ProductManager.class.php');
        $this->productManager = new ProductManager($db);
    }

	public function removeProduct(){
        $page = "panier";
        require("./View/main.php");
	}

	public function update($id, $quant = 1){
        $_SESSION["nombre"]++;
        $nb = $_SESSION["nombre"];
        $panier = $_SESSION["panier"];
        $panier[$nb] = $id;
        $_SESSION["panier"] = $panier;
        $page = "panier";
        require("./View/main.php");
	}

	public function remove($item){
		
	}

}