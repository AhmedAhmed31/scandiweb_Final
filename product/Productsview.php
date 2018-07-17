<?php

require 'Products.php';

$new= new Products;
$db = new database($db);
$products=$new->AllProducts($db);
?>
<div class="products">
    <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                <div class="product-view">
                    <div class="thumbnail">
                        <h1><?php echo $product['Name']; ?></h1>
                        <!--                    <img src="--><?php //echo $product['image_path']; ?><!--" height="500"  alt="cd">-->
                        <div class="caption">
                            <p>Price : <?php echo $product['price'].' $'; ?></p>
                            <p>Type : <?php echo $product['type_name']; ?></p>
                            <p><?php echo $product['unit_key'] ?> : <?php echo $product['unit_value'].' '.$product['unit_text']; ?></p>
                            <p><a href="#" class="btn btn-primary" role="button">open</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>