<?php
include 'connection.php';
#For Insert Post
if(isset($_POST['submit'])){
	if($_POST['title']!= ""){
		if($_POST['content']!= ""){
			if($_POST['category']!= ""){
				if(isset($_FILES['image'])==true){
					$file_name= $_FILES['image']['name'];
    				$file_type= $_FILES['image']['type'];
    				$file_tmp= $_FILES['image']['tmp_name'];
    				$file_size= $_FILES['image']['size'];
  
  move_uploaded_file($file_tmp,"C:/xampp/htdocs/Blog/images/faces/".$file_name);
  session_reset();
    
				$query = "INSERT INTO `posts_table`( `post_title`, `post_des`,`post_category`,`post_author`,`post_img`,`post_sub_category`) VALUES ('$_POST[title]','$_POST[content]','$_POST[category]','$_SESSION[userid]','$file_name',$_POST[sub_category])";

	if ($conn->query($query)){
    echo "<script>alert('data Sumbited');
				location.href='../register/post.php'
                </script>";
				$last_id = $conn->insert_id;
				echo $last_id;
				$var_new =$_REQUEST;
				$arrayLength = count($var_new['states']);
				print_r($arrayLength);
				$i = 0;
				
				
echo "<br>" ;



while ($i < $arrayLength) {

	$tags = ($var_new['states'][$i]);
	$query1 = "INSERT INTO `post_tags_table` (`post_sno`, `tags_no`) VALUES ('$last_id','$tags')";
	$conn->query($query1);
	$i++;	

}


}
	else{
    	echo "Failed ";
}
		}
			else{
				echo "<script>alert('Upload Image');
		location.href='../register/post.php'
		</script>";
			}
			}
			else{
		echo "<script>alert('Enter Category');
		location.href='../register/post.php'
		</script>";
	}
		}
		else{
		echo "<script>alert('Enter Content');
		location.href='../register/post.php'
		</script>";
	}

	}
	else{
		echo "<script>alert('Enter Title');
		location.href='../register/post.php'
		</script>";
	}

}
else{
	echo "";
}

#For Update Post 

if(isset($_POST['update'])){
	if($_POST['title']!= ""){
		if($_POST['content']!= "") {
			if($_POST['category']!= "") {
				if(isset($_FILES['image'])==true){
					$file_name= $_FILES['image']['name'];
    				$file_type= $_FILES['image']['type'];
    				$file_tmp= $_FILES['image']['tmp_name'];
    				$file_size= $_FILES['image']['size'];
  
  move_uploaded_file($file_tmp,"C:/xampp/htdocs/Blog/images/faces/".$file_name);
  session_reset();

				$query1 = "DELETE FROM `post_tags_table` WHERE `post_sno` = ".$_REQUEST['arts'];
				$conn->query($query1);
				
    
				$query = "UPDATE `posts_table` SET `post_title`='$_POST[title]',`post_des`='$_POST[content]',`post_img`='$file_name',`post_category`='$_POST[category]' WHERE `sno` = ".$_REQUEST['arts'];
						//print_r($query);
	if ($conn->query($query)){

   
				$last_id = $conn->insert_id;
				//echo $last_id;
				$var_new =$_REQUEST;
				$arrayLength = count($var_new['states']);
				//print_r($arrayLength);
				$i = 0;
				
				
echo "<br>" ;



while ($i < $arrayLength) {

	$tags = ($var_new['states'][$i]);
	$query1 = "INSERT INTO `post_tags_table` (`post_sno`, `tags_no`) VALUES ('$_REQUEST[arts]','$tags')";
	$conn->query($query1);
	$i++;	
	echo "<script>alert('Update Succesfully');
	location.href='../register/all_post.php'	
		</script>";
}

}
	else{
    	echo "Failed ";
}
		}
			else{
				echo "<script>alert('Upload Image');
		location.href='../register/post.php'
		</script>";
			}
			}
			else{
		echo "<script>alert('Enter Category');
		location.href='../register/post.php'
		</script>";
	}
		}
		else{
		echo "<script>alert('Enter Content');
		location.href='../register/post.php'
		</script>";
	}

	}
	else{
		echo "<script>alert('Enter Title');
		location.href='../register/post.php'
		</script>";
	}

}
else{
	echo "";
}
?>