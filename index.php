<html>
    <head>
        <meta charset="UTF-8">
        <title>no title</title>
    </head>
    <link rel="stylesheet" href="index.css"/>
    <body>
            <?php
            $msql = new mysqli('localhost', 'root', '', 'merchandise_2');
                
            $query_store =  "select distinct store    from  merchandise_2.test_1";
            $query_product= "select distinct product  from  merchandise_2.test_1";
            $query_category="select distinct category from  merchandise_2.test_1";
            $result = $msql->query($query_product);
            $arr_products = $result->fetch_all();
//            var_dump($arr_products,'<br>');
            $result = $msql->query($query_store);
                     $arr_store=$result->fetch_all();
            $result =$msql->query($query_category);
            $arr_category = $result->fetch_all();
                         
                     
          ?>
        
        <form method="post" action="process_input.php" enctype="multipart/form-data" />
        <input type="file" name="image"/>        
        <input type="submit" value="качи снимка" />    
              
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
            <p>
                <?php
                if(isset($_GET['empty_category'])){
                    ?>
                <a style="background-color: #ff3399">Empty Category</a>
                        <?php
                }
                ?>
                <label for="new_category">Insert Category:</label>
            <select name="select_category">
                <option></option>
                <?php
                
                foreach($arr_category as $category){
                 ?>
                
                <option value="<?=$category[0]?>"><?=$category[0]?></option>
                <?php
                    
                }
                ?>
            </select>
                <input name="new_category" type="text" />
                
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
            
        <button> <input type="submit" id="submit_" name="submit"/></button>
        </form>
      
            <?php
$msql->close();
?>        
        <p>  <a href="show_everything.php">
                 show everything
            </a></p>
    </body>
</html>
