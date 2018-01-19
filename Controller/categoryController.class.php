<?php
class categoryController{

	private $category;
	private $categoryManager;
	private $db;

    public function __construct($db1) {

        require('./Model/Category.class.php');
	require_once('./Model/CategoryManager.class.php');
	$this->categoryManager = new CategoryManager($db1);

        $this->db = $db1 ;
    }
    

	public function display(){

		require('./View/main.php');
	}

}