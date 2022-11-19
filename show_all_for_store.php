<head>
    <link rel="stylesheet" href="index.css"/>
</head>
<?php
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
                foreach($_GET as $k=>$val){
                    $key_for_query = $k;
                    $value_for_query =$val;
                    break;
                }
                $query = "Select * from merchandise_2.test_1 where $key_for_query = '$val' order by(price) ";
                
                $show_result = $msql->query($query);
//                var_dump($show_result->fetch_all());
                echo "<br/>";
                $result = $show_result->fetch_all();
                foreach ($result as $k=>$arr_result){
                    
                                   ?>
<div>

    
       <a <?php 
if($k==0){
echo 'style="background-color: #00cc33"';    
}else if($k == (count($result)-1)){
echo 'style="background-color: #cc0000"'  ;  
}
?> ><?=$arr_result[2]?></a>
    
        <?=$arr_result[3]?>
        
        <?=$arr_result[1]?>
    
</div>              
                    <?php

                    
                }   
           $msql->close();
           ?>
<a href="show_everything.php">show everything</a>
<a href="index.php">return to index</a>