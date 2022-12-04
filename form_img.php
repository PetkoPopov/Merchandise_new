<?php
$id = $_GET['id'];
?>        
<form method="post" action="process_image.php" enctype="multipart/form-data" />
<input type="hidden" name="img_id" value="<?=$id?>"/>
<input type="file" name="image" />        
        <input type="submit" value="качи снимка" />    
       
        </form>
