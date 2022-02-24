<?php

include '../data_base/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
    
    <select name="category">

        
        <?php
         
        $stmt = "SELECT * FROM `category_table` WHERE `cat_id` = 0";
        $result = $conn->query($stmt);

        $rows = mysqli_num_rows($result);
        print_r($rows);

        while ($rows) {

            $result_fetch = mysqli_fetch_assoc($result);
            ?>
            <option><?php echo $result_fetch["category"] ?></option>
            <?php
            $rows--;
        }
         ?>

    </select>

    </body>