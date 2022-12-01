<?php
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
if((isset($_POST['select_store']) && !empty($_POST['select_store'])) && empty($_POST['insert_new_store'])){ $store = $_POST['select_store'];}
else if(isset($_POST['insert_new_store'])&& $_POST['select_category']!= null ){
   
   $store = $_POST['insert_new_store']; 
}
if(isset($_POST['select_product'])&&!empty($_POST['select_product']) && empty($_POST['insert_new_product'])){$product = $_POST['select_product'];}
else if(isset($_POST['insert_new_product'])){
    $product= $_POST['insert_new_product'];
}
$user='unknown';
if(isset( $_POST['price'])&&!empty( $_POST['price'])){$price = $_POST['price'];}
$date = date('y-m-d');

//////////////////////////////////////////
//die(var_dump($_POST));
if($_POST['select_category']=='' && $_POST['new_category'] == '' ){
// die('empty car');
    header("Location:index.php?empty_category=empty");
    exit;
}
 if( $_POST['new_category']!= '' && !empty($_POST['new_category'])){
    $category = $_POST['new_category'];
}else if($_POST['select_category']!=''){
    $category =$_POST['select_category'];
}
$destination = 'image/'/*не забравяй слаш чертата след image*/;
$destination .= $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],$destination );
/////////////////////////////////////////////////////////////////////
 if((isset($date)&&(isset($product)&& isset($price))) && isset($store)&& !isset($_POST['edit'])){
   
$query = "Insert into merchandise_2.test_1 (`product`,`store`,`price`,`date`,`user`,`category`,`pic`) "
        . "values('$product','$store','$price','$date','$user','$category','$destination')";
if($msql->query($query)==true){
    
    $msql->close();
header("Location:show_everything.php");}
 }
