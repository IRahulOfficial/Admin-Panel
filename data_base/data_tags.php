<?php 
include 'connection.php';
$stmt = "INSERT INTO `tags_table`(`tags`, `author`) VALUES ('$_POST[tag]','$_SESSION[username]')";

if($conn->query($stmt)){
	echo "<script>alert('Category Submitted');
          location.href='../register/tags.php';
      </script>";
}
else{
    echo "Failed ";
}


?>