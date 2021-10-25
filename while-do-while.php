<?php 
            $title = "While-Do-While Loop";
            include'includes/header.php'?>
    <h1><?php echo $title?></h1>
    <?php
    echo "<h2>While Loop</h2>";

    $number = 0;

    while($number < 10){
        echo "<p>This is while loop</p>";
        $number++;
    }
    
    echo "<h1>While Loop is end</h1>";

    ?>

    <h1>Do While loop</h1>
    <?php

    $number1 = 1;
    do{
        echo "<p>This is Do while Loop</p>";
        $number1++;
    }
    while($number1 < 10);

    echo "<h1>The Do While Loop is end</h1>";
    ?>
 <?php require 'footer.php' ?>