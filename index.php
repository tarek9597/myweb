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
    <body>


        <?php
        $numArray = array(38, 2, 9, 5, 49, 35, 20, 50, 25, 53);


        for ($i = 0; $i < count($numArray); $i++) {

            sort($numArray);
            echo($numArray [$i]) . " ";
        }

        echo "<p/>";
        ?>
        
    </body>
</html>
