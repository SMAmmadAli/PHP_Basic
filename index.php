<?php 
        $title = "Home";
        include 'includes/header.php'?>

    <h1>Hello PHP!</h1>
     <h4>My First Program in PHP</h4>

      <?php
    echo 'Hello PHP!';

    echo '</br>';

    echo 'I am new in here';

    echo '</br>';

    ?> 

    <?php

    $name = "S M AMMAD ALI";
    $age = 20;

    echo $name;

    echo '<h1>My Name is '.$name.'</h1>';
    echo "<h1>My Age is $age </h1>";
    ?>

    <?php require 'footer.php' ?>