<?php
class cartController {
    
    private $lineOrder;
    private $item = [ ];
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
        $id_product = $id;
        $order = $this->id_order++;
        $this->item[$this->id_order] = $this->productManager->findOne($id_product);
        $item = $this->item[$this->id_order];
        $quantity = $quant;
        
        $_SESSION["panier"] = $item;
        $_SESSION["quantity"] = $quantity;
        $page = "panier";
        require("./View/main.php");
	}

	public function remove($item){
		
	}

}