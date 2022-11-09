<head>
    <link rel="stylesheet" href="index.css"/>
</head>
<?php
            $msql = new mysqli('localhost', 'root', '', 'merchandise_2');
        
    
            $query = "select * from merchandise_2.test_1 ";
           
            $result = $msql->query($query);
            $arr_for_select= $result->fetch_all();         
            
            if(!empty($_GET) ){
                foreach($_GET as $k=>$val){
                    $key_for_query = $k;
                    $value_for_query =$val;
                    break;
                }
                $query = "Select * from merchandise_2.test_1 where $key_for_query = '$val' ";
                
                $show_result = $msql->query($query);
//                var_dump($show_result->fetch_all());
                echo "<br/>";
                
                foreach ($show_result->fetch_all() as $arr_result){
                    
                    echo $arr_result[1].'==='.$arr_result[2].'===='.$arr_result[3]."====<br>";
                    
                }
                ?>
    <a href="show_everything.php">return to show everythhing </a>
                    <?php
            }else{
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
    <form>
    <input type="submit" class="beauty" value="<?=$value[1]?>" name="product"/>
    <input type="submit" class="beauty" value="<?=$value[2]?>" name="price"/>
    <input type="submit" class="beauty" value="<?=$value[3]?>" name="store"/>
    <input type="submit" class="beauty" value="<?=$value[4]?>" name="user"/>
    <input type="submit" class="beauty" value="<?=$value[5]?>" name="date"/></form>
    <form action="process.php"> <input type="submit" class="green"  value="delete_<?=$value[0]?>" name="delete_"/></form>
    <form action="form_edit.php">  <input type="submit" class="orange" value="edit_<?=$value[0]?>" name="edit"/></form>
    <p></p>
    <?php
           
    
                }            
            }       
                     
          ?>

<a href="index.php">return to index</a>