<?php
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
if((isset($_GET['select_store']) && !empty($_GET['select_store'])) && empty($_GET['insert_new_store'])){ $store = $_GET['select_store'];}
else if(isset($_GET['insert_new_store'])&& $_GET['select_category']!= null ){
   
   $store = $_GET['insert_new_store']; 
}
if(isset($_GET['select_product'])&&!empty($_GET['select_product']) && empty($_GET['insert_new_product'])){$product = $_GET['select_product'];}
else if(isset($_GET['insert_new_product'])){
    $product= $_GET['insert_new_product'];
}
$user='unknown';
if(isset( $_GET['price'])&&!empty( $_GET['price'])){$price = $_GET['price'];}
$date = date('y-m-d');

//////////////////////////////////////////
//die(var_dump($_GET));
if($_GET['select_category']=='' && $_GET['new_category'] == '' ){
// die('empty car');
    header("Location:index.php?empty_category=empty");
    exit;
}
 if( $_GET['new_category']!= '' && !empty($_GET['new_category'])){
    $category = $_GET['new_category'];
}else if($_GET['select_category']!=''){
    $category =$_GET['select_category'];
}

/////////////////////////////////////////////////////////////////////
 if((isset($date)&&(isset($product)&& isset($price))) && isset($store)&& !isset($_GET['edit'])){
   
$query = "Insert into merchandise_2.test_1 (`product`,`store`,`price`,`date`,`user`,`category`) values('$product','$store','$price','$date','$user','$category')";
if($msql->query($query)==true){
    
    $msql->close();
header("Location:show_everything.php");}
 }
