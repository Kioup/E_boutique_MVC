<?php
class UserManager {
	public $db;
    
    public function __construct($db){
        $this->db = $db;   
    }
    
    public function create(User $user){
        
    $req = $this->db->prepare(
            'INSERT INTO User ( lastName, firstName, email, address, postalCode, city, password, admin )
            VALUES ( :lastName, :firstName, :email, :address, :cp, :city, :password, 0 )'
            );

            $req->execute(
                array(
                    'lastName' => $user->getLastName(),
                    'firstName' => $user->getFirstName(),
                    'email' => $user->getEmail(),
                    'address' => $user->getAddress(),
                    'cp' => $user->getPostalCode(),
                    'city' => $user->getCity(),
                    'password' => $user->getPassword()
                )
        );       
    }
    
    public function findAll() {

        $req = $this->db->prepare(
            'SELECT *
            FROM User'
        );
        
        $req->setFetchMode( PDO::FETCH_CLASS, 'User');

        $req->execute();

        return $req->fetchAll( PDO::FETCH_CLASS, "User");
    }
    
    public function login($email, $password){
        if (isset($email) == $user->getEmail()) {
            if (isset($password) == $user->getPassword()) {
                echo "connexion réussi";
                return $user;
            }
            else {
                echo "mauvais mot de passe";
            }
        }
        else {
            echo "mauvaise adresse mail";
        }
    }
    
    public function update(User $user){
        
            $req = $this->db->prepare(
            'UPDATE User
            SET lastname = :lastName, firstname = :firstName, email = :email, address = :address, cp = :cp, city = :city, password = :password, admin = 0 WHERE id = :id
            ');

            $req->execute(
                array(
                    'lastName' => $user->getLastName(),
                    'firstName' => $user->getFirstName(),
                    'email' => $user->getEmail(),
                    'address' => $user->getAddress(),
                    'cp' => $user->getPostalCode(),
                    'city' => $user->getCity(),
                    'password' => $user->getPassword(),
                    'id' => $user->getId()
                )
            );
    
    }
    
    public function delete($user) {

    }
    
    public function findOne($id) {
        $req = $this->db->prepare(
            'SELECT *
            FROM User WHERE id = '.$id
        );
        $req->setFetchMode( PDO::FETCH_CLASS, 'User');

        $req->execute();

        return $req->fetch(PDO::FETCH_CLASS);
    }
    
    public function existUp($user){
        
    }
    
}
?>