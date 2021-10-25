<?php 
            $title = "Switch Statement";
            include'includes/header.php'?>
<h1><?php echo $title?></h1>
    <?php
    
    $grade = 'B';

    switch($grade){

        case 'A':
            echo '<h2 style ="color:green">You are Superstar</h2>';
            break;
        case 'B':
            echo '<h2 style ="color:blue">You did Well</h2>';
            break;
        default:
            echo '<h2 style ="color:red">You have Failed</h2>';
            break;


    }
    ?>
 <?php require 'footer.php' ?>