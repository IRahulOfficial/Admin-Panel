<?php 
include '../data_base/connection.php';
?>


<! DOCTYPE html>  
<html>  

<meta name="viewport" content="width=device-width, initial-scale=1">  
<head>   
    <title>   
         Get Selected Value in drop-down using jQuery  
    </title>   
    <!-- <style>   
        h1 {   
            color: green;  
        }   
        h5 {   
            color: green;   
        }   
        h4 {   
            color: green;   
        }   
        p {  
        color: red;   
        }  
        .select {  
        margin: 40px;  
        width: 60%;   
        height: 300px;   
        padding: 30px;   
        border: 2px solid green;   
        }     
body {  
        background-color: pink;  
        }  
</style>   -->
 
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>


</head>  
<body>  

<div class ="select">  
<center>  

  <script>  
$(document).ready (function () { 
    
    $("select.country").change (function () {  
        var selectedCountry = $(this).val(); 
        var ok = selectedCountry;
        alert ("You have selected the country - " + ok); 
        document.getElementById("myHiddenField").innerHTML = ok;
        
    });
    
});  

</script>
<h1>
  </script>
<h1> Example 1 </h1>  
<p> <b> Get Selected Value in drop-down using jQuery </b> </p>  
<form action="#" method ="post" >  
    <label> <h4> Select Country from drop-down list: </h4> <br> </label>  
    <select class="country">  
         <option value="usa"> United States </option>  
         <option value="1"> India </option>  
         <option value="2"> United Kingdom </option>  
         <option value ="brazil"> Brazil </option>  
         <option value ="germany"> Germany </option> 
             
</select>  
<p id="myHiddenField" name="myHiddenField" > </p>


<input  id="myHiddenField" name="myHiddenField" value="" />

<?php 

//print_r($_POST['myHiddenField'])
//$stmt = "SELECT * FROM `category_table` WHERE `cat_id` = .$_POST[myHiddenField] ";
//$result = $conn->query($stmt);

//$result_fetch = mysqli_fetch_assoc($result);
//print_r($result_fetch);


?>
</form>  
</center>  
</div>  
</body>  
</html>