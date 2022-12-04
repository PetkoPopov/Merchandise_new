
<?php
echo "WELO COME IN PROCCESS EDIT";
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
<form action="process_edit.php" enctype="multipart/form-data" method="post">
    <input type="hidden" name="id" value="<?=$id_?>"/>
    <p>Product:<input type="text" name="product" value="<?=$product_?>"/></p>
    <p>Store:<input type="text" name="store" value="<?=$store_?>"/></p>
    <p>Price:<input type="text" name="price" value="<?=$price_?>"/></p>
    <p>Date:<input type="text" name="date" value="<?=$date_?>"/></p>
    <p>User: <input type="text" name="user" value="<?=$user_?>"/></p>
    <p>Image:<input type="file" name="image"/></p>
    <p><input type="submit" name="edit" value="edit"/></p>
      

    <?php
       $msql->close();
    ?>

</form>