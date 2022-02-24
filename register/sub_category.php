<?php
include 'index.php';
include '../data_base/connection.php';
print_r($_SESSION['username']);
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
              
              <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Post </h3>
              
            </div>
            <div class="row">

              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="form-sample" method="post" action="test2.php">
                      
                      
                        <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" style="font-size: 20px; font-family: CG Times;">Category Name</label>
                                    <div class="col-sm-9">
                                       <select class="form-control" name="category">
                                       <option value="select gender" disabled selected >Category</option>
                                       <?php 
                                            $stmt = "SELECT * FROM `category_table` "; 
                                            $result = $conn->query($stmt);
                                            $rows = mysqli_num_rows($result);
                                            //print_r($rows);

                                            while ($rows) {
                                        
                                                $result_fetch = mysqli_fetch_assoc($result);
                                                print_r($result_fetch);

                                        ?>
                                         <option value="<?php echo $result_fetch['sno']; ?>" style="text-align: center;"><?php echo  $result_fetch['category']; ?></option>
                             
                                        <?php $rows--;  } ?>
                                        
                                       </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" style="font-size: 20px; font-family: CG Times;">Sub Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Sub Category Name" class="form-control" name="sub_cty" required />
                                    </div>
                                </div>
                            </div>
                     
                      
                        	
                                    <div class="col-md-12">
                                    	<div class="form-group row">
                                    		<div class="col-sm-3"></div>
                                    		<div class="col-sm-9">
                                        <input type="submit" value="Add Category" name="sub" class="form-control btn  btn-gradient-primary" />
                                    		</div>
                                    	</div>
                                    </div>	

                     
                      
                        
                        
                        
                      </div>
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
              
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
</body>
</html> 