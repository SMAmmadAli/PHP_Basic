<?php 
            $title = "Array & Printouts";
            include'includes/header.php'?>

<h1><?php echo $title?> </h1>
<?php

    $s1 = "I buy the ";
    $s2 = "Rs";

    $numbers = array(1,2,3,45,6,7,8,9,23,434,5345,6,476,547,564,745);
    echo $numbers[3] ;
    echo "</br>";

    $total = count($numbers);
    echo "The total no. of Array is: $total </br>";



    $furits = array("banana","Mango","Apple","Pineapple");
    
    echo $furits[2];
    echo "</br>";
    echo $s1.$furits[2].$numbers[3].$s2;

?>

<h1>Print all memder of array</h1>

<?php

    for($allmember = 0; $allmember < $total; $allmember++){
        echo "<p>$numbers[$allmember]</p>";
    }
?>

<h1>Print all memder of Second array</h1>
<?php

    $totalmem = count($furits);
    for($mem = 0; $mem < $totalmem; $mem++){
        echo "<p>$furits[$mem]</p>";
    }    

?>
 <?php require 'footer.php' ?>