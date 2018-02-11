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
        <a href="index.php?ctrl=cart&action=affiche" class="cart"><img src="Images/bg-hp-img02.png" alt=""></a>
        <?php if(!empty($_SESSION["user"])){ ?>
            <span>Bienvenu <?//=$_SESSION["user"]->getFirstName();?></span>
            <a href="index.php?ctrl=user&action=delog" class="button">Déconnexion</a>
        <?php } else { ?>
            <a href="index.php?ctrl=user&action=login" class="button">Connexion</a>
            <a href="" class="button">Inscription</a>
        <?php } ?>
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
        echo $info;
        if(isset($page)){
            require("./View/".$page.".php");
        }
        else {        
        }
    ?>
    
    
</body>
</html>