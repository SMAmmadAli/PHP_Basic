<?php 
            $title = "Function";
            include'includes/header.php'?>
    <h1><?php echo $title?></h1>
    <hr/>
    <hr/>
    <?php
    
    function writemessage(){
        echo "This is User Defined Function <br/>";
    }
    writemessage();
    writemessage();
    echo "<hr/>";

    echo "<h1>Function with Parameter</h1>";

    function addnumber($num1, $num2){
        $add = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $add <br/>";
    }
    addnumber(14, 15);
    
    $num3 = 500;

    addnumber(10,$num3);

    addnumber("1","400");

    echo "<hr/> <h3>Change the Value of global varaible in function parameter using the keyword '&'</h3>";

    //  Change the Value of global varaible in function parameter using the keyword "&"

    function changenum(&$num3){
        $num3 = $num3 +50;
    }
    changenum($num3);
    echo $num3.'<br/>';


    //Return Keyword in Function
    echo "<hr/> <h3>Return Keyword in Function <br/></h3>";
    function returnproduct($num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
    }

    $return_value = returnproduct(10,200);
    echo $return_value . "<br/>";
    ?>
     <?php require 'footer.php' ?>