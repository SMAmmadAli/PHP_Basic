<?php 
            $title = "Condition-Statement";
            include'includes/header.php'?>
<h1><?php echo $title?></h1>
    <?php

    $grade = 90;

    if($grade >= 80){
        echo '<h2 style="color:green">Your grade is A+</h2>';
    }

    elseif($grade==70){
        echo '<h2 style="color:yellow">Your Grade is A</h2>';
    }

    else {
        echo '<h2 style="color:red" >Your are Failed</h2>';
    }
    ?>
 <?php require 'footer.php' ?>
