<div class="Boite">
        
        <h2>Page Login</h2>
        <form action="index.php?ctrl=user&action=doLogin" method="post">
            <div><label for="email">Adresse mail : </label><input type="text" id="email" name="email"></div>
            <div><label for="password">Mot de passe : </label><input type="passwd" id="password" name="password"></div>
            <input type="submit" value="Valider">
         	<div><?php if(isset($info)) {
         		echo $info;
         	}?></div>
        </form>

</div>