<div class="fiche">
    <img src="./Images/<?=$prod->getImage_url();?>" alt="">
    <div>
        <h3><?=$prod->getName();?></h3>
        <p><?=$prod->getDescription();?></p><br>
        <h3><?=$prod->getPrice();?> €</h3>
    </div>
    <button>Ajouter au panier</button>
</div>