<?php
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
if(isset($_GET['delete_'])){
        $for_del = $_GET['delete_'];
        $split_for_del = explode("_", $for_del);
        
        $id=(int)$split_for_del[1];
        
        $query  = "delete from merchandise_2.test_1 where id =$id";
         $msql->query($query);
        
     }  
  
$msql->close();   
header("Location:show_everything.php");