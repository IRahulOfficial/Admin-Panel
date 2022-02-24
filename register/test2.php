<?php 
include '../data_base/connection.php';

    //print_r($_REQUEST);
    $query1 = "INSERT INTO `category_table`(`category`,`cat_id`,`author_name`) VALUES ('$_POST[sub_cty]','$_POST[category]','$_SESSION[username]')";
    //echo $query1;
                    if($conn->query($query1)){
                        echo "<script>
                        location.href='../register/sub_category.php';
                        </script>";
                    }
                    else{
                        echo "Failed";
                    }


?>