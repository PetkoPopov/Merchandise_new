<?php
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
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
                    
                    echo $arr_result[1].'==='.$arr_result[2].'===='.$arr_result[3]." ==== <br>";
                    
                }   
           $msql->close();
           ?>
<a href="show_everything.php">show everything</a>
<a href="index.php">return to index</a>