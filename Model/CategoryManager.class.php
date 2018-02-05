<?php
class CategoryManager {
	public $db;
    
    public function __construct($db){
        $this->db = $db;   
    }
    
    public function findAll(){
        $req = $this->db->prepare("SELECT * FROM Categorie");
        $req->setFetchMode( PDO::FETCH_CLASS, 'Categorie');
        $req->execute();
        return $req->fetchAll( PDO::FETCH_CLASS, "Categorie");
    }
    
}