<?php
// This page for Products view
// for Image after putting it i found that u don't need it so i deleted from code
// getting all products fom data base and put it in view mode

$stmt = $db->query("
    select 
        products.*,
        products_types.name as type_name,
        products_types.unit as unit_text,
        products_types.key_text as unit_key
    from products
    left join products_types on products_types.id = products.product_type
");
// put all product from db into array []
$stmt->setFetchMode(PDO::FETCH_ASSOC);
// getting all products from Database
$products = $stmt->fetchAll();

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