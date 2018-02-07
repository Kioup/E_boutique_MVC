<div class="fiche">
    <img src="./Images/<?=$prod->getImage_url();?>" alt="">
    <div>
        <h3><?=$prod->getName();?></h3>
        <p><?=$prod->getDescription();?></p><br>
        <h3><?=$prod->getPrice();?> €</h3>
    </div>
    <a href="index.php?ctrl=cart&action=update&id=<?=$prod->getId();?>">Ajouter au panier</a>
</div>