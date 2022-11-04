<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="index.css"/>
    <body>
         <div>
             <!--<img src="image/IMG_20180710_104642_HDR.jpg"/>-->
        <form>
           
            Insert Product:
            <input type="text" name="product" id="product" value="" placeholder="coffee"/>
            <?php
            $msql = new mysqli('localhost', 'root', '', 'testform');
            
            $query = "select * from testform.test_1 ";
            
            $result = $msql->query($query);
            var_dump($result->fetch_all());
            
            ?>
            Insert Store:<!-- comment -->
            <input type="text" name="store" id="store_"/><!-- comment -->
            Insert Price:<!-- comment -->
            <input type="text" name="price" id="price_"/>
            </div>
            <input type="submit" id="submit_" name="submit"  />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
