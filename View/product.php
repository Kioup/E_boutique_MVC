<div class="conteneur">
<?php 
foreach($prod as $produit){
?>

<a href="index.php?ctrl=product&action=displayOne&id=<?=$produit->getId();?>">
<div class="produit">
	<img src="./Images/<?=$produit->getImage_url();?>" alt="">
	<div>
		<span><?=$produit->getName();?></span>
		<span><?=$produit->getPrice();?> €</span>
	</div></div></a>

<?php	
}
?>
</div>
<?php
