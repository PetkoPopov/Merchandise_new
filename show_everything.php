<head>
    <link rel="stylesheet" href="index.css"/>
</head>
<?php
            $msql = new mysqli('localhost', 'root', '', 'merchandise_2');
        
    
            $query = "select * from merchandise_2.test_1 ";
           
            $result = $msql->query($query);
            $arr_for_select= $result->fetch_all();         
            
            
                ?>
    <a href="show_everything.php">return to show everythhing </a>
                    <?php
            
                $count = 0 ;
            foreach ($arr_for_select as $k=>$value){
                $count++;
                if($count%10 == 0){
                    ?>
    <p>
    <a href="index.php">return to index</a>
    </p>
        <?php
                  
                }
       ?>
    <form action="show_all_for_store.php">
    <input type="submit" class="beauty" value="<?=$value[1]?>" name="product"/>
    <input type="submit" class="beauty" value="<?=$value[2]?>" name="price"/>
    <input type="submit" class="beauty" value="<?=$value[3]?>" name="store"/>
    <input type="submit" class="beauty" value="<?=$value[4]?>" name="user"/>
    <input type="submit" class="beauty" value="<?=$value[5]?>" name="date"/></form>
    <div>
    <form action="process.php" ><input type="submit" class="green"  value="delete_<?=$value[0]?>" name="delete_" disabled/></form>
    <form action="form_edit.php"><input type="submit" class="orange" value="edit_<?=$value[0]?>" name="edit" disabled/></form>
    </div>
    <p></p>
    <?php
                }            
           $msql->close();             
          ?>

<a href="index.php">return to index</a>