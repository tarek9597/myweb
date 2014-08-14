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
        
        <form>
            
            Number 1: <input type="text" name="number1"><br/> <p/>
            Number 2: <input type="text" name="number2"><br/>
            <p/>
            <input type="submit" name="add" value="Add">
            <input type="submit" name="substruct" value="Substruct">
            <input type="submit" name="multiply" value="Multiply">
            <input type="submit" name="divide" value="Divide"><br/> <p/>
                
        </form>
        
        <?php
        echo "Result :"  ;
        $num1=$_GET["number1"];
        $num2=$_GET["number2"];
      //  $submitAdd=$_GET["add"]; 
        //$submitSubstruct=$_GET["substruct"]; 
        //$submitMultiply=$_GET["multiply"];
        //$submitDivide=$_GET["divide"];
        
         if (isset($num1) && isset($num2)&& isset($_GET["add"]))
            {
            $add=$num1+$num2;
            echo " $add";
            }
        
    else if (isset($num1) && isset($num2)&& isset($_GET["substruct"]))
            {
            $substruct=$num1-$num2;
            echo " $substruct";
            }
           
    else if (isset($num1) && isset($num2)&& isset($_GET["multiply"]))
            {
            $multiply=$num1*$num2;
            echo " $multiply";
            }
            
    else if (isset($num1) && isset($num2)&& isset($_GET["divide"]))
            {
            $divide=$num1/$num2;
            echo " $divide";
            }  
        ?>
    </body>
</html>
