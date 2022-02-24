<?php
include 'index.php';


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
                    
                    <form class="form-sample" method="post" action="../data_base/data_tags.php">
                      
                      
                        

                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" style="font-size: 20px; font-family: CG Times;">Tags</label>
                                    <div class="col-sm-9">
                                        <input type="text" placeholder="Tags " class="form-control" name="tag" required />
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