<head>
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<?php

$msql_= new mysqli('localhost', 'root', '');
if(isset($_GET['delete_table']) && $_GET['delete_table'] == "delete databases"){
    foreach($_GET as $k=>$v){
        if($k != "delete_table"){
$query = "drop database $v;";
$result = $msql_->query($query); 
if($result === true){
    echo '<br/>DELETED '.$v;
}      
}
    }


    
}else{
//$unique = uniqid();
    $unique = 'merchandise_2';
$query = "Create database $unique";
if($msql_->query($query) === true){
    echo "Database ";
    ?>
    <div id="unique"><?=$unique?></div>
    <?php
    echo"Created Successfuly";    
}
$table_name = $unique.".test_1";
$query = "create table $table_name("
        . "`id` int not null auto_increment, "
        ."`product` varchar(100) not null ,"
        . " `price` decimal(7,2) not null "
        . ",`store` varchar(100) not null ,"
        . " `user` varchar(100) not null "
        . ", `date` date ,primary key(id))";
if($msql_->query($query) == true){
    echo "</br>table test_1 has created";
}else{
    echo "</br>table has not created";
}
    ?><form>
        <?php
$query= "show databases;";
$res = $msql_->query($query);
$arr_databese = ($res->fetch_all());
foreach ($arr_databese as $key => $value) {
       ?>  
       <input type='checkbox' name="<?=$key?>" value= "<?=$value[0]?>"  />
<?php
echo "$value[0]<br/>";
}
?>                
        <input type="submit" name="delete_table" value="delete databases"/>
        <input type="submit" name="seed_table" value="seed"/><!-- comment -->
    </form>
    <?php
}
    ?>
</body>

