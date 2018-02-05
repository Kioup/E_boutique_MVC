<aside>
    <div class="carte">
        <h2>Categorie</h2>
        <ul>
		<?php foreach($cat as $categorie){ ?>
            <li><?=$categorie->getName()?></li>
        <?php } ?>
        </ul>
    </div>
</aside>