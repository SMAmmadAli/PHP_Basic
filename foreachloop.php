<?php 
            $title = "For Loop";
            include'includes/header.php'?>
<h1><?php echo $title?></h1>    
    <?php
    
        $colors = array("red", "green", "blue", "yellow");
            foreach ($colors as $value) {
                echo "$value <br>";
            }


        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

            foreach($age as $x => $val) {
              echo "$x = $val<br>";
            }
             

        $name = array("Ammad","Anas","shaheer","Shariq");
        foreach($name as $all){
            echo "<h1>$all</h1>";
        }

        $name1 = array("Ammad" => "95", "Anas"=> "90", "Shaheer" => "89", "Shariq" => "88" );
        foreach($name1 as $A => $B){
            echo "<h2>$A = $B</h2>";
        }

    ?>
 <?php require 'footer.php' ?>