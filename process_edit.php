<?php

$msql = new mysqli('localhost', 'root', '', 'merchandise_2');

$id_ = (int) $_POST['id'];
$store_ = $_POST['store'];
$product_ = $_POST['product'];
$price_ = $_POST['price'];
$date_ = $_POST['date'];
$user55 = $_POST['user'];

$destination = 'image/'/* не забравяй слаш чертата след image */;
$destination .= $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"], $destination);
$query = "Update merchandise_2.test_1 "
        . "set `price`=$price_ ,`store`= '$store_' ,`date`= '$date_' ,`product`= '$product_', `user`= '$user55',`pic`='$destination' "
        . " where id = $id_";
//              var_dump($query);die;
if ($msql->query($query) == true) {
    $msql->close();
    header("Location:show_everything.php");
} else {
    echo "NO EDIT";
}