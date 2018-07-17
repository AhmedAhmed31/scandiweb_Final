<?php



class Products
{

public function __construct(){}

    public function AllProducts($db)
{
    $query=' select 
        products.*,
        products_types.name as type_name,
        products_types.unit as unit_text,
        products_types.key_text as unit_key
    from products
    left join products_types on products_types.id = products.product_type
';
    $products = $db->getProducts($query);
    return $products;
}

public function ProductType($db)
{
    $query='select * from products_types';
    $productType = $db->getProducttype($query);
    return $productType;

}

    public function AddProduct($db)
    {
        $Name = $_POST['Name1'];
        $SKU = $_POST['SKU'];
        $price = $_POST['price'];
        $unit = $_POST['unit_value'];
        $product_type = $_POST['type'];
        $query = "INSERT INTO products(`Name`,`sku`,`price`,`unit_value`,`product_type`)VALUES ('$Name','$SKU','$price','$unit','$product_type')";
        $InsertNewProduct = $db->InsertNewProduct($query);
        return $InsertNewProduct;

    }
}