<?php

include 'connection.php';

if (isset($_POST['submit'])){
   if($_POST['email']!= "") {
        if($_POST['password']!= ""){ 
    
    $stmt = "SELECT * FROM `signup_table` WHERE `email`='$_POST[email]' AND `password`='$_POST[password]'";
    $result = $conn->query($stmt);
    if(mysqli_num_rows($result) == 1){

    $result_fetch=   mysqli_fetch_assoc($result);

    print_r($result_fetch['name']);
    $_SESSION['userid']= $result_fetch['sno'];
    $_SESSION['username']= $result_fetch['name'];

        echo "<script>alert('Login Succesfull');
                location.href='../register/index.php';
                </script>";

    }
    else{
        echo "Incorrect Details";
    }
}
else{
    echo "<script>alert('Password is Empty');
                location.href='../register/login.php';
                </script>";
}
}
else{
    echo "<script>alert('Email is Empty');
                location.href='../register/login.php';
                </script>";
}
}
else{

}

?>