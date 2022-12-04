<?php 

if(isset($_POST['img_id'])){
    
$msql = new mysqli('localhost', 'root', '', 'merchandise_2');

    $id = (int)$_POST['img_id'];
    $destination = 'image/'/*не забравяй слаш чертата след image*/;
$destination .= $_FILES['image']['name'];
move_uploaded_file($_FILES["image"]["tmp_name"],$destination );
$query = "update merchandise_2.test_1  set `pic` ='$destination' where ìd= $id ";
if($msql->query($query)){
    header("Location: show_everything.php");
}else{
    echo "no updte <br/> ";
    ?><a href="index.php">return to index</a><?php
    
}
}