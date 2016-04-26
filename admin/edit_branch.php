<?php include('header.php'); ?> 
<body>
<?php include('session.php'); 
$regions = array('NS'=>'North Singapore', 'NES'=>'North East Singapore', 'ES'=>'East Singapore', 'CS'=>'Central Singapore', 'WS'=>'West Singapore');
?>
<?php $get_id = $_GET['id']; ?>

   
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									 <a href="add_branch.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Branch</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Branch</div>
		                            </div>
		                            <div class="block-content collapse in">
									<!-- <a href="Branch.php"><i class="icon-arrow-left"></i> Back</a> --><br>
									
									<?php
									$query = mysql_query("select * from branch where branch_id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
                                                                        <form class="form-horizontal" method="post" action="" id="edit_branch_form">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Region</label>
											<div class="controls">
												<select name="region">
													<?php 
														foreach ($regions as $key => $value){
															if($key == $row['region']){
																echo "<option value=".$key." selected>".$value."</option>";
															}else{
																echo "<option value=".$key.">".$value."</option>";
															}
															
														}
													?>  
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch name</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['branch_name']; ?>" name="branch_name" id="firstname" placeholder="Branch Name">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Owner</label>
											<div class="controls">
												<input type="text" name="branch_owner" value="<?php echo $row['branch_owner']; ?>" id="lastname" placeholder="Branch Owner">
											</div>
										</div>
				
										<div class="control-group">
											<label class="control-label" for="inputPassword">Branch Address</label>
											<div class="controls">
													<textarea id="username" name="branch_address"><?php echo preg_replace('/\s+/', '', $row['branch_address']); ?></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Email</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['branch_email']; ?>" name="email" id="email" placeholder="Branch Email">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Phone No.</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['branch_phone_number']; ?>" name="phone_number" id="phone" maxlength="10" placeholder="Branch Phone">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Latitude</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['latitude']; ?>" name="latitude" id="latitude" placeholder="Latitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Longitude</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['longitude']; ?>" name="langitude" id="langitude" placeholder="Longitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Description</label>
											<div class="controls">
												<textarea name="branch_description" class="ckeditor_full"><?php echo $row['branch_description']; ?></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Status</label>
											<div class="controls">
                                                                                            <?php if($row['status']=='1'){ ?>
                                                                                            <input type="checkbox" name="status" value="1" checked required>
                                                                                            <!-- <input type="hidden" name="status" value="0" > -->
                                                                                            <?php } else{ ?>
                                                                                            <input type="checkbox" name="status" value="0" >
                                                                                            <!-- <input type="hidden" name="status" value="1" checked> -->
                                                                                            <?php } ?>
										
                                                   <!-- <input type="checkbox" name="status"  <?php 
                                                   // if($row['status']=='1') { echo 'checked'; echo "value='1'";} else echo "value='0'";?>>   -->



											</div>
										</div>		
																		
											
										<div class="control-group">
										<div class="controls">
										
										<button name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>

										</form>
										
										<?php
                                                                                
										if (isset($_POST['update'])){
										$region = $_POST['region'];
										$branch_name = $_POST['branch_name'];
										$branch_address = $_POST['branch_address'];
										$owner = $_POST['branch_owner'];
                                        $email =$_POST['email'];
                                    	$phone_number = $_POST['phone_number'];
                                        $latitude = $_POST['latitude'];
                                        $langitude = $_POST['langitude'];
                                        $branch_description = $_POST['branch_description'];
										$status = $_POST['status'];

										// echo $status;

										
										$query_branch = mysql_query("select * from branch where branch_id !='$get_id' and region='$region'")or die(mysql_error());
										// $count = mysql_num_rows($query);
									while($row_branch=mysql_fetch_array($query_branch)) {
										
										if ($branch_name==$row_branch['branch_name'])  {  
											?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}
										else{
										mysql_query("UPDATE branch SET region='$region',branch_name='$branch_name',branch_address='$branch_address',branch_phone_number='$phone_number',branch_email='$email',longitude='$langitude',latitude='$latitude',branch_owner='$owner',branch_description='$branch_description',status='$status' where branch_id = '$get_id' ")or die(mysql_error());
																	
										
										//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Branch $branch_name')")or die(mysql_error());
									}
										
										
										?>
										<script>
										window.location = "branch.php";
										</script>
										<?php
										}
										}
										?>
									
								
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>