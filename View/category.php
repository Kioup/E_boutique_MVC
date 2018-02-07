<aside>
    <div class="carte">
        <h2>Categorie</h2>
        <ul>
		<?php for($i=0; $i<count($cat);$i++){ ?>
            <li><? echo $cat[$i]->getName();?></li>
        <?php } ?>
        </ul>
    </div>
</aside>