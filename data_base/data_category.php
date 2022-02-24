<?php

include 'connection.php';

if(isset($_POST['sub'])){
$query = "INSERT INTO `category_table`(`category`, `description`,`author_name`) VALUES ('$_POST[cty]','$_POST[cty_des]','$_SESSION[username]')" ;

if($conn->query($query)){
	echo "<script>alert('Category Submitted');
                location.href='../register/category.php';
                </script>";
}
else{
    echo "Failed ";
}
}
else{
	echo "Empty Form";
}

?>