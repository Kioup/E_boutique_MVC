<?php
var_dump($_SESSION["panier"]);
if (!empty($_SESSION['panier'])) {
    $item = $_SESSION['panier'];

    foreach($item as $it) { ?>

        <div>
            <img src="./Images/<?=$it->getImage_url();?>" alt="">
            <span>Prix : <?=$it->getPrice() * $quantity;?></span>
            <form>
            <label for="quantite">Quantité : </label>
            <select id="quantite" name="quantite">
                <option value="1" <?php if($quantity == 1){ echo "selected";} ?> >1</option>
                <option value="2" <?php if($quantity == 2){ echo "selected";} ?>>2</option>
                <option value="3" <?php if($quantity == 3){ echo "selected";} ?>>3</option>
                <option value="4" <?php if($quantity == 4){ echo "selected";} ?>>4</option>
                <option value="5" <?php if($quantity == 5){ echo "selected";} ?>>5</option>
                <option value="6" <?php if($quantity == 6){ echo "selected";} ?>>6</option>
                <option value="7" <?php if($quantity == 7){ echo "selected";} ?>>7</option>
                <option value="8" <?php if($quantity == 8){ echo "selected";} ?>>8</option>
                <option value="9" <?php if($quantity == 9){ echo "selected";} ?>>9</option>
            </select>
            <input type="submit" value="modifier">
            </form>
        </div>

<?php 
      } 
}
else {
    $vide = "Votre panier est vide";
?>
    
    <h4><?=$vide;?></h4>

<?php 
    }
?>
