<?php 
        $title = "PHP Functions";
        include 'includes/header.php'
    ?>


    <h1><?php echo $title ?></h1>

    <?php
        
        /* Defining Function */

        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";
        }

        /* Calling function */
        writeMessage(); 

        /* Defining function with parameters */
        function addNumbers($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }
        addNumbers(6,5);
        $num = 500;
        addNumbers(10,$num);
        addNumbers('10',"50");

        /* Passing by Reference*/

        function changeNum(&$num){
            //$num=$num=10
            $num+=10;
        }

        changeNum($num);
        echo $num . '</br>';

        /*Returning value function*/

        function returnProduct($num1,$num2){
            $prod= $num1 * $num2;
            return $prod;
        }
        $return_prod = returnProduct(10,200);
        echo $return_prod . '</br>';
          



    

    ?>

<?php require 'includes/footer.php'?>
