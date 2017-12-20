<?php
class CategoryManager {
	public $db;
    
    public function __construct($db){
        $this->db = $db;   
    }
    
    public findAll(){
        $this->db->execute("SELECT * FROM Categorie");
        $req->setFetchMode( PDO::FETCH_CLASS, 'Categorie');

        $req->execute();

        return $req->fetchAll( PDO::FETCH_CLASS, "Categorie");
    }
    
}