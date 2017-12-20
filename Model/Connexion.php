<?php
class Connexion{
	private $host;
	private $dbname;
	private $username;
	private $password;

    public function __construct(){
	// les identifiants de connexion sont stockées ici comme attributs de la classe connection
        $this->host = "localhost";
        $this->dbname = "Utilisateur";
        $this->username = "root";
        $this->password = "mysql";
    }
    public function get_connection(){
	// cette fonction établie une connexion à la BDD à l'aide de l'objet PDO
        $dsn = "mysql:dbname=" . $this->dbname . ";host=" . $localhost . ";";
        try {
            $db = new PDO($dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
	// elle retourne l'identifant de la connexion (pointeur)
        return $db;
    }

}