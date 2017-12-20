<?php
class Category {
	private  $id;
	private  $name;
	private  $image_url;


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

	public final  function setImage_url($image_url) {
		$this->image_url=$image_url;
	}
    public final function getImage_url() {
        return $this->image_url;
    }
    
 ?>