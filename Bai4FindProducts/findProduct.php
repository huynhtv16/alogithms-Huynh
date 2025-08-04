<?php
$listProducts = [
    ['categoryid' => 1,'name' => 'huynhtv1', 'price' => 1500],
    ['categoryid' => 2,'name' => 'huynhtv2', 'price' => 1500],
    ['categoryid' => 3,'name' => 'huynhtv3', 'price' => 1500],
    ['categoryid' => 4,'name' => 'huynhtv4', 'price' => 1500],
    ['categoryid' => 5,'name' => 'huynhtv5', 'price' => 1500],
    ['categoryid' => 6,'name' => 'huynhtv6', 'price' => 1500],
    ['categoryid' => 7,'name' => 'huynhtv7', 'price' => 1500],
    ['categoryid' => 8,'name' => 'huynhtv8', 'price' => 1500],
    ['categoryid' => 9,'name' => 'huynhtv9', 'price' => 1500],
    ['categoryid' => 10,'name' => 'huynhtv10', 'price' => 1500],
    ['categoryid' => 11,'name' => 'huynhtv11', 'price' => 1500],
    ['categoryid' => 12,'name' => 'huynhtv12', 'price' => 1500]
];
function findProduct($listProducts,$productName){
    foreach($listProducts as $product){
        if(strtolower(($product['name']) == strtolower($productName))){
            return $product;
        }
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $productName = $_POST['product_name'];
    $product = findProduct($listProducts, $productName);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($product)){
        if($product){
            echo "Sản phẩm: " . $product['name'] . "<br>";
            echo "Giá: " . $product['price'] . " USD";
        } else {
            echo "Không tìm thấy sản phẩm.";
            header("Location: index.php");
        }
    } else {
        echo "Vui lòng nhập tên sản phẩm để tìm kiếm.";
    }
    ?>
</body>
</html>