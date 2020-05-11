    <?php 
        $title = "Index";
        include 'includes/header.php'
    ?>
    <!-- Basic HTML-->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
        /*
        Printing to HTML using echo
        */
        echo'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
       
    ?>

    <?php
        //declare variable
        $name = 'grumpypoles';
        $age = 99;
        //echo variable
        echo $name;
     
        //Inserting Variable to echo single quotes
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>';

        //Inserting Variable to echo double quotes
        echo "<h1>My Age is: $age </h1>";
    ?>
    
    <?php require 'includes/footer.php'?>
