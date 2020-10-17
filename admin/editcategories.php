
<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('config.php');?>
<?php

if (isset($_POST['submit'])) { 
    $category = isset($_POST['category'])?$_POST['category']:'';
    $id = isset($_POST['id'])?$_POST['id']:'';
    
    $sql = "UPDATE category set `name`='".$category."' where `id`='".$id."'";
    if ($conn->query($sql) === true) {
     
    } else {
            echo "Failed";
    }
}
 ?>
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome John</h2>
			<p id="page-intro">What would you like to do?</p>
			
		
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
				
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				<div class="tab-content" id="tab2">
					
						<form action="#" method="post">
							
                        <?php 
                           
                            $id=$_REQUEST['id'];

                            $sql = "SELECT * FROM category WHERE `id`=  '" . $id."'";
                            $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              
                                echo'<td><input type="hidden" value="'.$row['id'].'" name="id"></td>';
                                echo'<td><input type="text" value="'.$row['name'].'" name="category"></td>';
                            }

                        }
                            ?>								
								<p>
									<input class="button" type="submit" name="submit" value="Update Category" />
								</p>
								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->        
					
				      
					
				</div> <!-- End .content-box-content -->
				<?php include('footer.php');?>
			</div> <!-- End .content-box -->
			
			
			
			
			<div class="clear"></div> 
			
			