<?php
class CategoryManager {
	public $db;
    
    public function __construct($db){
        $this->db = $db;   
    }
    
    public function findAll(){
        $req = $this->db->prepare("SELECT * FROM Category");
        $req->setFetchMode( PDO::FETCH_CLASS, 'Category');
        $req->execute();
        return $req->fetchAll( PDO::FETCH_CLASS, "Category");
    }
    
}