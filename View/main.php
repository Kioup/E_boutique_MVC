<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Online Store</title>
<link rel="stylesheet" href="./Online Store_files/pure-min.css">
<link rel="stylesheet" type="text/css" href="./CSS/style.css">
</head>
    
<body>

    <?php
        session_start();
        if(isset($_SESSION['user'])){                
            $user = $_SESSION["user"];
            var_dump($user);
        }
    
        echo $info;
        if(isset($page)){
            require("./View/".$page.".php");
        }
        else {        
        ?>
        <div class="Boite">
            <h2>Page Accueil</h2>
            <form>
            <p><a href=<?php if(isset($_SESSION['user'])){echo 'index.php?ctrl=user&action=doLogin';
        }else { echo 'index.php?ctrl=user&action=login';}?>>Connexion</a> ou <a href="#">Inscription</a></p>
                <p class="Home"><a href="index.php">Accueil</a></p>
            <p><strong>TP Authentification et réseaux</strong></p>
            <p><a href="#">Gestion des utilisateurs</a></p>
            <p class="Home">Message</p>
            </form> 
        </div>
    <?php
        }
    ?>
    
    
</body>
</html>