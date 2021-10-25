<?php 
            $title = "Date & Time";
            include'includes/header.php'?>
        <h1><?php echo $title?></h1>
        <hr/>
        <hr/>
    <?php
    
    $datenow = getdate();
    echo "<h5>Today's Date: </h5>";
    echo $datenow['mday']."<br/>"; 
    echo "<h5>Month: </h5>";
    echo $datenow['mon']."<br/>"; 
    echo "<h5>Year: </h5>";
    echo $datenow['year']."<br/>"; 

    echo "<br/> <h2>Today's date: ". $datenow['mday']."/".$datenow['mon'].
    "/".$datenow['year']."</h2>"."<br/>";

    echo "<h1>TIME</h1>";
    echo time().'<br/>';

    print date("d/m/y G.i:s <br/>", time()).'<br/>';
    print "Today is ";
    print date("j of F Y, \a\\t g.i a", time());

    ?>
 <?php require 'footer.php' ?>