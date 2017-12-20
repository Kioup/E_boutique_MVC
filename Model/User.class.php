<?php
class User {
	private  $id;
	private  $email;
	private  $password;
	private  $firstName;
	private  $lastName;
	private  $address;
	private  $postalCode;
	private  $city;


    // getters / setteurs
    
	public final  function setId($id) {
		$this->id=$id;
	}
    public final function getId() {
        return $this->id;
    }
    
	public final  function setEmail($email) {
		$this->email=$email;
	}
    public final function getEmail() {
        return $this->email;
    }

	public final  function setPassword($password) {
		$this->password=$password;
	}
    public final function getPassword() {
        return $this->password;
    }
    
	public final  function setFirstName($firstName) {
		$this->firstName=$firstName;
	}
    public final function getFirstName() {
        return $this->firstName;
    }
    
	public final  function setLastName($lastName) {
		$this->lastName=$lastName;
	}
    public final function getLastName() {
        return $this->lastName;
    }
    
	public final  function setAddress($address) {
		$this->address=$address;
	}
    public final function getAddress() {
        return $this->address;
    }
    
	public final  function setPostalCode($postalCode) {
		$this->postalCode=$postalCode;
	}
    public final function getPostalCode() {
        return $this->postalCode;
    }
    
	public final  function setCity($city) {
		$this->city=$city;
	}
    public final function getCity() {
        return $this->city;
    }
    
    public function hydrate(array $donnees){
            $this->setId($donnees["id"]);
            $this->setPassword($donnees['password']);
            $this->setEmail($donnees['email']);
            $this->setFirstName($donnees['firstName']);
            $this->setLastName($donnees['lastName']);
            $this->setAddress($donnees['address']);
            $this->setPostalCode($donnees['postalcode']);
            $this->setCity($donnees['city']);
        }
    }
    
 ?>