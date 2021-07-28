<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart']= array( );
} 


use Product\Product;
spl_autoload_register(function ($className) {

    $exploded = explode('\\',$className);

    $namespace = $exploded[0];
    if (count($exploded) === 1){
        $class = $exploded[0];
    } else {
        $class = $exploded[1];
    }

    if ($namespace === 'App'){
        include $class.'.php';
    } elseif ($namespace === 'Product' ){
        include 'Product' . DIRECTORY_SEPARATOR .$class.'.php';
    } elseif ($namespace=== 'Cart' ){
        include 'Cart' . DIRECTORY_SEPARATOR . $class.'.php';
    } else {
        include $class . '.php';
    }
});

$app = new App\EcommerceApp();

$rawProducts = $app->product->getProductList();

$products = [];
foreach($rawProducts as $product){
    $product = (object)$product;
    $products[] =    new Product($product);

}
session_start();

$cartProduct=new \Cart\CartManager();
if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
        case "add":
            $cartProduct->add($_POST["productid"],	$_POST["quantity"]);

            header('location: /');
            break;

        case "remove":
            $cartProduct->remove($_POST["productid"]);

            header('location:/ ');
            break;
        case "empty":
            $cartProduct->clear();

            header('location: /' );


            break;
    }
}

include('template/header.php');
include('template/products.php');
include('template/cart.php');
include('template/footer.php');

?>
