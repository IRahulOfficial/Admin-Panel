<?php 

include 'connection.php';

$stmt = "SELECT * FROM `posts_table` ORDER BY sno DESC LIMIT 5";
$result = $conn->query($stmt);
$rows = mysqli_num_rows($result);
//print_r($rows);
$data = [];
for ($i=0; $i < $rows ; $i++) { 
    $result_fetch =  mysqli_fetch_assoc($result);
     //print_r($result_fetch);
     $data[$i] = $result_fetch;
}

//print_r($data[3]['post_title']);
 
// echo ($data[3]['post_title']);


?>