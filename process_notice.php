<?php

$msql = new mysqli('localhost', 'root', '', 'merchandise_2');
$id_=(int)$_GET['id_id'];
              $notice = $_GET["notice_textarea"];
              $query  = "Update merchandise_2.test_1 set `notis`= '$notice'  where id = $id_";
              var_dump($query);
              if($msql->query($query) == true){
                  $msql->close();
                  header("Location:show_everything.php");
              }else{
                 echo "NO EDIT";
              }

