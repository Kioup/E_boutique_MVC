<div class="conteneur">
<?php 
foreach($prod as $produit){
?>

<a href="index.php?ctrl=product&action=displayOne&id=<?=$produit->getId();?>">
<div class="produit">
	<img src="./Images/<?=$produit->getImage_url();?>" alt="">
	<div>
		<span><?=utf8_decode($produit->getName());?></span>
		<span><?=utf8_decode($produit->getPrice());?> €</span>
	</div>
</div>
</a>

<?php	
}
?>
</div>
<?php
