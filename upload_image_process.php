
<?php
//var_dump($_FILES);
$destination = 'image/'/*не забравяй слаш чертата след image*/;
$destination .= $_FILES['image']['name'];
if(move_uploaded_file($_FILES["image"]["tmp_name"],$destination )){
?>
<img src="<?=$destination?>" style="height: 100px ; width: 200px"/>
<?php
echo "Success";
}