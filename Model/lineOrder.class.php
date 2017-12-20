<?php
class lineOrder {
	private  $id;
	private  $id_product;
	private  $id_cart;
	private  $id_order;
    private  $quantity;

    // getters / setteurs
    
    public final function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    
    public final function getQuantity(){
        return $this->quantity;
    } 
    
 ?>