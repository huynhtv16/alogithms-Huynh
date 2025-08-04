<?php
$listProducts = [
    ['categoryid' => 1,'name' => 'huynhtv1', 'price' => 1500],
    ['categoryid' => 1,'name' => 'huynhtv2', 'price' => 1500],
    ['categoryid' => 1,'name' => 'huynhtv3', 'price' => 1500],
    ['categoryid' => 2,'name' => 'huynhtv4', 'price' => 1500],
    ['categoryid' => 2,'name' => 'huynhtv5', 'price' => 1500],
    ['categoryid' => 2,'name' => 'huynhtv6', 'price' => 1500],
    ['categoryid' => 3,'name' => 'huynhtv7', 'price' => 1500],
    ['categoryid' => 3,'name' => 'huynhtv8', 'price' => 1500],
    ['categoryid' => 3,'name' => 'huynhtv9', 'price' => 1500],
    ['categoryid' => 3,'name' => 'huynhtv10', 'price' => 1500]
];
function findCategoryID($listProducts, $categoryID){
    $result = [];
    foreach($listProducts as $product){
        if($product['categoryid'] == $categoryID){
            $result[] = $product;
        }
    }
    return $result;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $categoryID = $_POST['category_id'];
    $product = findCategoryID($listProducts, $categoryID);
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
            echo "Sản phẩm trong CategoryID " . $categoryID . ":<br>";
            foreach($product as $item){
                echo "Tên sản phẩm: " . $item['name'] . "<br>";
                echo "Giá: " . $item['price'] . " USD<br>";
                echo "---------------------<br>";
            }
        } else {
            echo "Không tìm thấy sản phẩm với CategoryID này.";
            header("Location: index.php");
        }
    } else {
        echo "Vui lòng nhập CategoryID để tìm kiếm.";
    }
    ?>
</body>
</html>