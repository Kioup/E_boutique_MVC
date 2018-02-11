
<?php
if (!empty($_SESSION['panier'])) {
    $item = $_SESSION['panier'];
    $_SESSION["qte"] = $quantity;
?>

<table class="bark">
    <tr>
        <th></th>
        <th>nom du produit : </th>
        <th>Quantité : </th>
        <th>Prix : </th>
        <th>Actions</th>
    </tr>

<?php

    foreach($item as $nb => $it) { 
    $obj = $this->productManager->findOne($it);
        ?>

            <form method="post" action="index.php?ctrl=cart&action=update&id=<?=$obj->getId();?>">
        <tr>
            <td width="15%">
                <img src="./Images/<?=$obj->getImage_url();?>" alt="">
            </td>
            <td width="10%">
                <span><?=$obj->getName();?></span>
            </td>
            <td width="15%">
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
            </td>
            <td width="10%">
                <span>Prix : <?=$obj->getPrice() * $quantity;?> €</span>
            </td>
            <td width="10%">
                <input type="submit" value="modifier">
                <a href="index.php?ctrl=cart&action=removeProduct&id=<?=$nb;?>">Supprimer</a>
            </td>
            </form>
        </tr>

<?php 
      } 

?>

</table>

<?php

}
else {
    $vide = "Votre panier est vide";
?>

    <h4><?=$vide;?></h4>

<?php 
    }
?>
