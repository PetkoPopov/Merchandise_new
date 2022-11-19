<?php

$msql = new mysqli('localhost', 'root', '', 'merchandise_2');

              $id_      =(int)$_GET['id'];
              $store_   =$_GET['store']; 
              $product_ =$_GET['product'];
              $price_   =$_GET['price'];
              $date_    = $_GET['date'];
              $user55   = $_GET['user'];
//              var_dump($_GET);die;
              $query  = "Update merchandise_2.test_1 set `price`=$price_ ,`store`= '$store_' ,`date`= '$date_' ,`product`= '$product_', `user`= '$user55'  where id = $id_";
//              var_dump($query);die;
              if($msql->query($query) == true){
                  $msql->close();
                  header("Location:show_everything.php");
              }else{
                 echo "NO EDIT";
              }