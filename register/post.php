<?php include 'index.php' ;
      $art = $_REQUEST['articalid'];
      include '../data_base/connection.php';

      $query = "SELECT * FROM `category_table`";
      $result = $conn->query($query);

      $result_fetch=   mysqli_fetch_assoc($result);
      //print_r($result_fetch['sno']);

?>
<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
  <script>  
        $(document).ready (function () {  
        $("select.country").change (function () {  
        var selectedCountry = $(this).children("option:selected").val();  
        $(".a").hide();
        $(".sub"+selectedCountry).show();
        

        alert ("You have selected the country - " + selectedCountry);  
    });   
});  
</script>  
  </head>
  <body>
    
        <!-- partial -->
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
                  <!-- For Update Query -->
                    <?php if (isset($_REQUEST['articalid'])) { 
                      
                    $query1 = "SELECT * FROM `posts_table` WHERE `sno` = ".$_REQUEST['articalid'];
                    $result1 = $conn->query($query1);

                    $result_fetch1 =  mysqli_fetch_assoc($result1);
                    //print_r($result_fetch1['post_title']);

                      ?>
                      <form class="form-sample" method="post" action="../data_base/data_blog.php" enctype="multipart/form-data">
                      <input type="hidden" name = "arts" value="<?php echo $art ?>"></input>
                      <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Title" value="<?php echo $result_fetch1['post_title']; ?>" class="form-control" name="title" required  />
                                    </div>
                                </div>  
                            </div>
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Add Images</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Content</label>
                                  <div class="col-sm-9">
                                    <textarea name="content" required placeholder="Write Your Content Here... " id="" cols="25" rows="10" class="form-control"><?php echo $result_fetch1['post_des']; ?> </textarea>
                                  </div>
                          </div>
                        </div>
                           <div class="col-md-4">
                          <div class="form-group row">
                            
                            <div class="col-sm-8">

                            <?php 
                            
                            //echo $result_fetch1['post_category'];

                            ?>
                              <select class="form-control" name="category">

                                <option value="select gender" disabled selected >Category</option>
                                <?php 
                                 $stmt = "SELECT * FROM `category_table` WHERE `cat_id` = 0 ";
                                  $result = $conn->query($stmt);

                                  $rows = mysqli_num_rows($result);
                                  print_r($rows); 

                                  
                                  while ($rows) {

                                  $result_fetch = mysqli_fetch_assoc($result);

                                  //$list = ($result_fetch['category']); 
                                   
                                   ?>
                                    <option value="<?php echo $result_fetch['sno']  ?>" <?php echo ($result_fetch1['post_category'] == $result_fetch["sno"]) ? "selected" : "" ?> ><?php echo $result_fetch["category"] ?></option>

                                <?php  
                                  $rows--;
                                              }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12">
                              <select class="form-control country" name="sub_category">
                                  <?php $query_add_cate = "SELECT * FROM `category_table` WHERE `cat_id` !='0' ";
                                  $result =  $conn->query($query_add_cate);
                                  ?>

                                  <?php
                                  if ($result->num_rows > 0) {
                                      while ($categ_result = $result->fetch_assoc()) {
                                  ?>
                                          <?php if ($categ_result['cat_id'] != 0) ?>
                                          <option value="<?php echo $categ_result["sno"]; ?>" <?php echo ($result_fetch1['post_sub_category'] == $categ_result['sno']) ? "selected" : "" ?> ><?php  echo  $categ_result["category"]; ?></option>

                                          <?php
                                          ?>
                                  <?php
                                      }
                                  }
                                  ?>
                              </select>
                          </div>
                        </div>

                                                
                      </div>
                      <div class="col-md-8">
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Tags</label>
                                    <div class="col-sm-7">
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width: 300px;" >
                                    <?php
                                    
                                     $stmt4 = "SELECT * FROM `post_tags_table` ptt INNER JOIN `tags_table` tt ON ptt.tags_no = tt.sno WHERE ptt.post_sno = ".$_REQUEST['articalid'] ;
                                     $result4 = $conn->query($stmt4);
                                     $result_fetch4 = $result4->fetch_assoc();

                                     $stmt3 = "SELECT * FROM `tags_table`";
                                    $result3 = $conn->query($stmt3);
                                    print_r($result_fetch3);  
                                    while($result_fetch3 = $result3->fetch_assoc()) {
                                    print_r($result_fetch3);      
                                    ?>
                                    <option value="<?php echo $result_fetch3["sno"]  ?>"><?php echo $result_fetch3["tags"]  ?></option>
                                     <?php } ?>
                                  </select>

                                    </div>

                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="submit" value="Update" name="update" class="form-control btn  btn-gradient-primary" />
                                    </div>
                      </div>
                    </form>
                   <?php } 

                    else{ ?>
                    <!-- For Insert Form -->
                    <form class="form-sample" method="post" action="../data_base/data_blog.php" enctype="multipart/form-data">
                      
                      <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Title" class="form-control" name="title" required  />
                                    </div>
                                </div>  
                            </div>
                        <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Add Images</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control" name="image"/>
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Content</label>
                                  <div class="col-sm-9">
                                    <textarea name="content" required placeholder="Write Your Content Here... " id="" cols="25" rows="10" class="form-control"> </textarea>
                                  </div>
                          </div>
                        </div>
                          <div class="col-md-4">
                          <div class="form-group row">
                            
                            <div class="col-sm-8">
                              <select class="form-control country" name="category">
                          
                                <option value="select gender" disabled selected >Category</option>
                                <?php 
                                 $stmt = "SELECT * FROM `category_table` WHERE `cat_id` = 0 ";
                                  $result = $conn->query($stmt);

                                  $rows = mysqli_num_rows($result);
                                  print_r($rows); 

                                  while ($rows) {

                                  $result_fetch = mysqli_fetch_assoc($result);

                                  $list = ($result_fetch['category']); ?>
                                  <?php if ($result_fetch['cat_id'] == 0) {?>
                                  <option value="<?php echo $result_fetch["sno"]  ?>"><?php echo $result_fetch["category"] ?></option>
                                  
                                  
                                  <?php 
                                  $rows--;
                                  }
                                              }

                                ?>
                                <?php
                                echo $result_fetch["category"];
                                ?>
                              </select>
                            </div>
                            
                          </div>
                          <div class="form-group row">
                          
                            <div class="col-sm-7">
                                <select class="form-control country" name="sub_category">
                                    <?php $query_add_cate = "SELECT * FROM `category_table` WHERE `cat_id` !='0' ";

                                    $result =  $conn->query($query_add_cate);
                                    ?>

                                    <?php
                                    if ($result->num_rows > 0) {
                                        while ($categ_result = $result->fetch_assoc()) {
                                    ?>
                                            <?php if ($categ_result['cat_id'] != 0) ?>
                                            <option class ="a sub<?php echo $categ_result["cat_id"] ?>" value="<?php echo $categ_result["sno"]; echo $categ_result["cat_id"] ?>"><?php  echo  $categ_result["category"]; echo $categ_result["cat_id"]; ?></option>

                                            <?php
                                            ?>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                          </div>

                        </div>
                        </div>

                                                
                      </div>
                      <div class="col-md-8">
                             <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Tags</label>
                                    <div class="col-sm-7">
                                    <select class="js-example-basic-multiple" name="states[]" multiple="multiple" style="width: 300px;" >
                                    <?php
                                    
                                    $stmt3 = "SELECT * FROM `tags_table`" ;
                                    $result3 = $conn->query($stmt3);

                                    while($result_fetch3 = $result3->fetch_assoc()) {
                                    //print_r($result_fetch3);
                                    ?>
                                    <option value="<?php echo $result_fetch3["sno"]  ?>"><?php echo $result_fetch3["tags"]  ?></option>
                                     <?php } ?>
                                  </select>

                                    </div>

                                </div>
                            </div>
                            <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="submit" value="Post" name="submit" class="form-control btn  btn-gradient-primary" />
                                    </div>
                      </div>
                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
             
        <script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
	</script>
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
  </body>
</html>