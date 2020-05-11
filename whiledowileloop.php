<?php 
        $title = "While Loops";
        include 'includes/header.php'
    ?>

    <h1>While Loop</h1>
    <?php
        $grade=0;
        //Pre-Condition Loop
        while ($grade < 10) {
           echo '<p> I AM LESS THAN 10';
           $grade++;
        }

        echo '<p>EXIT LOPP</p>';

    ?>
    <h1>Do While Loop</h1>
    <?php
        $grade=0;
        //Post-Condition Loop
        do {
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        } while ($grade < 10);
        echo '<p>EXIT LOPP</p>';

    ?>

<?php require 'includes/footer.php'?>
