<?php

include 'connection.php';
/*$stmt = "SELECT * FROM `signup_table` WHERE sno > (SELECT COUNT(*) FROM `signup_table`) - 10";
$result = $conn->query($stmt);

if(mysqli_num_rows($result) == true){

    $result_fetch =  mysqli_fetch_assoc($result);
    while ($result_fetch >= 5) {
        print_r($result_fetch) ;
        echo "ok";
    }
    
}
else{
    echo "Failed";
}
*/
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <select>
        <option>Choose </option>
<?php
$stmt = "SELECT * FROM `category_table` ";
$result = $conn->query($stmt);

$rows = mysqli_num_rows($result);
print_r($rows);

while ($rows) {

$result_fetch = mysqli_fetch_assoc($result);

$l = ($result_fetch['category']);
//echo $result_fetch['category'];
echo "<option>$l</option>" ;


$rows--;
}
?>
</select>
</body>
</html>

