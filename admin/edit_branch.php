<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
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
									<a href="Branch.php"><i class="icon-arrow-left"></i> Back</a>
									
									<?php
									$query = mysql_query("select * from branch where branch_id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
									?>
									
                                                                        <form class="form-horizontal" method="post" action="">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Region</label>
											<div class="controls">
												<select name="region">
													<option value="<?php echo $row['region']; ?>"><?php echo $row['region']; ?></option>
													<option value="North">North</option>
													<option value="East">East</option>
													<option value="West">West</option>
													<option value="South">South</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch name</label>
											<div class="controls">
											<input type="text" value="<?php echo $row['branch_name']; ?>" name="branch_name" id="inputEmail" placeholder="Branch Name">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Owner</label>
											<div class="controls">
												<input type="text" name="branch_owner" value="<?php echo $row['branch_owner']; ?>" id="inputEmail" placeholder="Branch Owner">
											</div>
										</div>
				
										<div class="control-group">
											<label class="control-label" for="inputPassword">Branch Address</label>
											<div class="controls">
													<textarea name="branch_address">
													<?php echo $row['branch_address']; ?>
													</textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Email</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['email']; ?>" name="email" id="inputEmail" placeholder="Branch Email">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Phone No.</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['phone_number']; ?>" name="phone_number" id="inputEmail" placeholder="Branch Phone">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Latitude</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['latitude']; ?>" name="latitude" id="inputEmail" placeholder="Latitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Longitude</label>
											<div class="controls">
												<input type="text" value="<?php echo $row['longitude']; ?>" name="langitude" id="inputEmail" placeholder="Longitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Description</label>
											<div class="controls">
												<textarea name="branch_description" id="ckeditor_full"><?php echo $row['branch_description']; ?></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Status</label>
											<div class="controls">
                                                                                            <?php if($row['status']=='1'){ ?>
                                                                                            <input type="checkbox" name="status" value="1" checked>
                                                                                            <?php } else{ ?>
                                                                                            <input type="checkbox" name="status" value="0" >
                                                                                            <?php } ?>
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
										
									
										mysql_query("UPDATE branch SET region='$region',branch_name='$branch_name',branch_address='$branch_address',phone_number='$phone_number',email='$email',longitude='$langitude',latitude='$latitude',branch_owner='$owner',branch_description='$branch_description',status='$status' where branch_id = '$get_id' ")or die(mysql_error());
																		
										//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit Branch $branch_name')")or die(mysql_error());
										
										?>
										<script>
										window.location = "branch.php";
										</script>
										<?php
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