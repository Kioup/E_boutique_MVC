<?php
class UserManager {
	public $db;
    
    public function __construct($db){
        $this->db = $db;   
    }
    
    public function findOne($id){
        $req = $this->db->prepare("SELECT * FROM Product WHERE id_product = ?");
        $req->setFetchMode( PDO::FETCH_CLASS, 'Product');
        $req->execute(array($id));
        return $req->fetch(PDO::FETCH_CLASS);
    }
    
    public function findBycategory($categorie){
        $req = $this->db->prepare("SELECT * FROM Product WHERE id_categorie = ?");
        $req->setFetchMode( PDO::FETCH_CLASS, "Product");
        $req->execute(array($categorie));
        return $req->fetch(PDO::FETCH_CLASS);
    }
    
}