<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="index.css"/>
    <body>
         <div>
             <!--<img src="image/IMG_20180710_104642_HDR.jpg"/>-->
        <form>
           
            <?php
            $msql = new mysqli('localhost', 'root', '', 'merchandise_2');
                
            $query_store = "select distinct store from merchandise_2.test_1 ";
            $query_product="select distinct product from merchandise_2.test_1";
            $result = $msql->query($query_product);
            $arr_products = $result->fetch_all();
//            var_dump($arr_products,'<br>');
            $result = $msql->query($query_store);
                     $arr_store=$result->fetch_all();
            
                         
                     
          ?>
            <p>
            Insert Product:
            <select name="select_product">
                 <option></option>
        <?php
        foreach($arr_products as $k=>$v){
        ?>    
        <option value="<?=$v[0]?>"><?=$v[0]?></option>
          <?php
          }
          ?>
            </select>
            <label for="insert_new_product">Insert new product</label>
            <input type="text" name="insert_new_product"/><!-- comment -->
            </p>
            <p>
            Insert Store:<!-- comment -->
            <select name="select_store">
               
                <option></option>
                <?php
        foreach($arr_store as $k=>$v){
        ?>    
                
                <option value="<?=$v[0]?>"><?=$v[0]?></option>
          <?php
          }
          ?>
                
            </select>
            <label for="insert_new_store">Insert new store</label>
            <input type="text" name="insert_new_store"/>
            </p>
            Insert Price:<!-- comment -->
            <input type="text" name="price" id="price_"/>
            </div>
        <button> <input type="submit" id="submit_" name="submit"/></button>
        </form>
<?php
//  var_dump($_GET,'$_GET');die;
if((isset($_GET['select_store']) && !empty($_GET['select_store'])) && empty($_GET['insert_new_store'])){ $store = $_GET['select_store'];}
else if(isset($_GET['insert_new_store'])){
    $store = $_GET['insert_new_store'];
}
if(isset($_GET['select_product'])&&!empty($_GET['select_product']) && empty($_GET['insert_new_product'])){$product = $_GET['select_product'];}
else if(isset($_GET['insert_new_product'])){
    $product= $_GET['insert_new_product'];
}
$user='unknown';
if(isset( $_GET['price'])&&!empty( $_GET['price'])){$price = $_GET['price'];}
$date = date('y-m-d');
/////////////////////////////////////////////////////////////////////
 if((isset($product)&& isset($price)) && isset($store)&& !isset($_GET['edit'])){
   
$query = "Insert into merchandise_2.test_1 (`product`,`store`,`price`,`date`,`user`) values('$product','$store','$price','$date','$user')";
if($msql->query($query)==true){
    header("Location:show_everything.php");
}
}
    

$msql->close();
?>        
             <a href="show_everything.php">
                 show everything
             </a>
    </body>
</html>
