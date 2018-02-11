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

	public function removeProduct($id){
        unset($_SESSION["panier"][$id]);
        $array = array_values($_SESSION["panier"]);
        $page = "panier";
        require("./View/main.php");
	}

	public function update($id){
        if (!empty($_POST["quantite"])){
            $quantity = $_POST["quantite"];
        }
        else {
            $quantity = 1;
        }

        if (empty($_SESSION["panier"])){
            $_SESSION["panier"] = array();
        }

        if (in_array($id, $_SESSION["panier"])){
            $quantity++;
        }
        else {
            array_push($_SESSION["panier"], $id);
        }
        $page = "panier";
        require("./View/main.php");
	}

	public function remove($item){
		
	}

    public function affiche() {
        $page = "panier";
        require("./View/main.php");
    }


}