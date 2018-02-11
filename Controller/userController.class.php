<?php
class userController {

	private $userManager;
	private $user;
    private $db;

    public function __construct($db1) {

        require('./Model/User.class.php');
	require_once('./Model/UserManager.class.php');
	$this->userManager = new UserManager($db1);

        $this->db = $db1 ;
    }
    
    public function main() {
        
//        $page = "main";
//        
        require("./View/main.php");
        
    }

    public function login() {

        $page = 'login';

        require('./View/main.php');
    }

    public function delog(){
        if(!empty($_SESSION["user"])){
            unset($_SESSION['user']);
        }
        $page = "product";
        $ctrl = new productController($this->db);
        require('./View/main.php');
    }


    public function doLogin() {

            $this->user = new User();

	// Cette action teste l'existence d'un utilisateur de email $_POST['email'] et de password $_POST['password']
    // Le user extrait par le UserManager est renvoyé dans $result
    // A vous d'écrire les 3 lignes correspondantes
  
        $req = $this->db->prepare("SELECT * FROM User WHERE email = :email AND password = :password");
        $req->bindParam(":email", $_POST['email']);
        $req->bindParam(":password", $_POST['password']);
        $req->execute();

        // echo "email : ".$_POST['email']." et mdp : ".$_POST['password'];
        
        if($req->rowCount() > 0){
            
            $row = $req->fetch();
            $user = $this->userManager->findOne($row['id']);
			$result = $user  ;
        }
        else {
            $result = null;
        }
        

    	if ( $result ) :
			$info = "Connexion reussie";
			$_SESSION['user'] = $user;
            $page = "product";
    	else :
    		$info = "Identifiants incorrects.";
            $page = "login";
    	endif;
        var_dump($result);
   		require('./View/main.php');

    }
    
}