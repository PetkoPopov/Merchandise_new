
<?php
echo "WELOCOME IN PROCCESS EDIT";
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
            
if(isset($_GET['edit'])){
              $edit= explode('_',$_GET['edit'])[1];
              
              $query_edit = "select * from merchandise_2.test_1 where id = $edit";
              $res = $msql->query($query_edit)->fetch_all();
              
//              var_dump($res[0][0],$res[0][1],$res[0][2],$res[0][3],$res[0][4],$res[0][5]);
              $id_=$res[0][0];
              $store_ = $res[0][3];
              $product_ =$res[0][1];
              $price_ =$res[0][2];
              $date_ = $res[0][5];
              $user_ = $res[0][4];
          }
          
          ?>
<form action="process_edit.php">
    <input type="text" name="product" value="<?=$product_?>"/>
    
    
</form>



<?php
//          
//if(isset($_GET['edit'])&&(isset($product)&& isset($price)) && isset($store)){
//$query = "update merchandise_2.test_1  set `product` = '$product',`store`='$store',`price`='$price',`date`='$date',`user`='$user'  where id = $id ";
//
//if($msql->query($query)==true){
//    
//    header("Location:show_everything.php");
//}
//}





//header("Location:show_everything.php");