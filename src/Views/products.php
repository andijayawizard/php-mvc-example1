<?php
require_once 'navbar.php';
?>
<h1>Our Products</h1>
<ul>
    <?php foreach ($products as $product) : ?>
        <li><?= $product->name ?> - <?=$product->price?> - <?=$product->quantity?></li>
    <?php endforeach; ?>
</ul>

