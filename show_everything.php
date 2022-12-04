<head>
    <link rel="stylesheet" href="index.css"/>
</head>
<?php
            $msql = new mysqli('localhost', 'root', '', 'merchandise_2');
        
    
            $query = "select * from merchandise_2.test_1 order by(`id`) desc";
           
            $result = $msql->query($query);
            $arr_for_select= $result->fetch_all();         
            
            
                ?>
    <a href="show_everything.php">return to show everythhing </a>
                    <?php
            
            foreach ($arr_for_select as $k=>$value){      
                if($k%6 == 0){
                    ?>
    <p>
    <a href="index.php">return to index</a>
    </p>
        <?php  }   ?>
    <sp>
    <form action="show_all_for_store.php">
    <input type="submit" class="beauty" value="<?=$value[1]?>" name="product" />
    <input type="submit" class="beauty" value="<?=$value[2]?>" name="price"/>
    <input type="submit" class="beauty" value="<?=$value[3]?>" name="store"/>
    <input type="submit" class="beauty" value="<?=$value[7]?>" name="user"/>
    
    <input type="submit" class="beauty" value="<?=$value[6]?>" name="category"/>
    <input type="submit" class="beauty" value="<?=$value[8]?>" name="date"/>
    </form><!-- comment -->
    
    <form action="show_image.php" method="post" >
        <input type="image" src="<?=$value[5]?>" width="40px" height="30px" />
        <input type="hidden" name="image" value="<?=$value[5]?>"/>
    
    </form>
    
    <form action="process.php" ><input type="submit" class="green"  value="delete_<?=$value[0]?>" name="delete_" /></form>
    
    <form action="form_edit.php" ><input type="submit"  class="orange" value="edit_<?=$value[0]?>" name="edit" /></form>
    </sp>
    
    <form action="form_notice.php" class="button_"> <input type="submit"  value="<?=$value[4]?>" name="notice"/>
        <input   type="hidden" name="hidden_id" value="<?=$value[0]?>"      />
    </form>
    <p></p>
    <div class="delete">
    </div>
    <p></p>
    <?php
                }            
           $msql->close();             
          ?>
    <p>
<a href="index.php">return to index</a>
    </p>