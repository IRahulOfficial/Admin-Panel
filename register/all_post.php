<?php
include 'index.php';
include '../data_base/connection.php';
//print_r($_SESSION['userid']);
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Posts</h4>
                            
            
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> S.No </th>
                          <th> Title </th>
                          <th> Description </th>
                          <th> Like </th>
                          <th> Dislike </th>
                          <th> Date </th>
                          <th> View Or Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $stmt = "SELECT * FROM `posts_table` WHERE `post_author` = ".$_SESSION['userid'];
                          $result = $conn->query($stmt);
                          
                          while($result_fetch = $result->fetch_assoc()){ 
                              $i++ ?>
                          <tr >
                          <td><?php echo $i ?></td>
                          <td><?php echo substr($result_fetch['post_title'],0,20) . "...";  ?></td>
                          <td><?php echo substr($result_fetch['post_des'],0,20) . "..."; ?></td>
                          <td><?php echo $result_fetch['post_like'] ?></td>
                          <td><?php echo $result_fetch['post_dislike'] ?> </td>
                          <td><?php echo $result_fetch['post_date'] ?></td>
                          <td><a href="<?php echo "../mundana/article.php?articalid=" . $result_fetch['sno']; ?>">View / </a><a href="<?php echo "../register/post.php?articalid=" . $result_fetch['sno']; ?>">Edit</a> </td>
                        </tr>

                        <?php  } ?>
                        
                        
                        
                      </tbody>
                    </table>
                        </div>
                    </div>            
                </div>
            </div>
        </div>            
    </div>
</body>
</html>