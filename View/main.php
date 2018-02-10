<!DOCTYPE html>
<html>
<head lang="fr">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Online Store</title>
<link rel="stylesheet" href="./Online Store_files/pure-min.css">
<link rel="stylesheet" type="text/css" href="./CSS/style.css">
</head>
    
<header>
    <a href="index.php?ctrl=product&action=display"><h1>Welcome to home shop</h1></a>
    <div>
        <input type="search" placeholder="rechercher...">
        <a href="index.php?ctrl=cart&action=removeProduct" class="cart"><img src="Images/bg-hp-img02.png" alt=""></a>
        <a href="" class="button">Connexion</a>
        <a href="" class="button">Inscription</a>
    </div>
</header>
<?php
    if(isset($page) && $page == "product"){
        require_once('Controller/categoryController.class.php');
         $controlleri = new categoryController($db);
		 $controlleri->display();
        
    }
?><!--
-->    
<body>

    <?php
        session_start();
        if(isset($_SESSION['user'])){                
            $user = $_SESSION["user"];
            $_SESSION["panier"] = array();
            $_SESSION["nombre"];
        }
    
        echo $info;
        if(isset($page)){
            require("./View/".$page.".php");
        }
        else {        
        ?>
    
        
<!--
        <div class="Boite">
            <h2>Page Accueil</h2>
            <form>
            <p><a href=<? php // if(isset($_SESSION['user'])){ // echo 'index.php?ctrl=user&action=doLogin';
         // }else { echo 'index.php?ctrl=user&action=login';}?>>Connexion</a> ou <a href="#">Inscription</a></p>
                <p class="Home"><a href="index.php">Accueil</a></p>
            <p><strong>TP Authentification et réseaux</strong></p>
            <p><a href="#">Gestion des utilisateurs</a></p>
            <p class="Home">Message</p>
            </form> 
        </div>
-->
    <?php
        }
    ?>
    
    
</body>
</html>