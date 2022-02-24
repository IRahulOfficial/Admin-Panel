<?php

include  'connection.php';

if(isset($_POST['submit'])){
$query = "INSERT INTO `signup_table`(`name`, `email`, `phno`, `password`,`gender`) VALUES ('$_POST[name]','$_POST[email]','$_POST[mobileno]','$_POST[password]','$_POST[gender]')";
echo $query;
if ($conn->query($query)){
    echo "<script>alert('data Sumbited');
                location.href='../register/login.php';
                </script>";
}
else{
    echo "Failed ";
}
}
else{
    echo "";
}
?>