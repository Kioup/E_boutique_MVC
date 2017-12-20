<?php
class Product {
	private  $id;
	private  $name;
	private  $description;
	private  $price;
	private  $image_url;
	private  $id_categorie;

    // getters / setteurs
    
	public final  function setId($id) {
		$this->id=$id;
	}
    public final function getId() {
        return $this->id;
    }
    
	public final  function setName($name) {
		$this->name=$name;
	}
    public final function getName() {
        return $this->name;
    }

	public final  function setDescription($description) {
		$this->description=$description;
	}
    public final function getDescription() {
        return $this->description;
    }
    
	public final  function setFirstName($firstName) {
		$this->firstName=$firstName;
	}
    public final function getFirstName() {
        return $this->firstName;
    }
    
	public final  function setPrice($price) {
		$this->price=$price;
	}
    public final function getPrice() {
        return $this->price;
    }
    
	public final  function setImage_url($image_url) {
		$this->image_url=$image_url;
	}
    public final function getImage_url() {
        return $this->image_url;
    }
    
	public final  function setIdCategorie($id_categorie) {
		$this->id_categorie=$id_categorie;
	}
    public final function getIdCategorie() {
        return $this->id_categorie;
    }
    
 ?>