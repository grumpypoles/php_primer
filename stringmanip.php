<?php 
        $title = "String Manipulation";
        include 'includes/header.php'
    ?>


    <h1><?php echo $title ?></h1>

    <?php

        //Concatenation of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "grumpy poles";
        echo $phrase1 . " " . $phrase2;
        echo '<br/>';
        echo '<hr/>';
       
        //Tranformation of string
        echo 'Uppercase first letter ' . ucfirst($name) . '<br/>';
        echo 'Uppercase first letter of each word ' . ucwords($name) . '<br/>';
        echo 'Upper Case ' . strtoupper($name) . '<br/>';
        echo 'Lower Case ' . strtolower("THIS WAS ALL UPPER CASE") . '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get a Substring: ' . substr($name, 5,10). '<br/>';
        echo 'Get the position of the String: '. strpos($name,'l'). '<br/>';
        echo 'Find character "p": '. strchr($name,'p'). '<br/>';
        echo 'Find character "P": '. strchr($name,'P'). '<br/>';
        echo 'Find character "l": '. strchr($name,'l'). '<br/>';
        echo 'Find Length of String: '. strlen($name). '<br/>';
        echo 'Replace String: '. str_replace("stand","sit",$phrase2). '<br/>';

    ?>
    <?php require 'includes/footer.php'?>
