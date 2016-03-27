<?php include('header.php'); 
$regions = array('NS'=>'North Singapore', 'NES'=>'North East Singapore', 'ES'=>'East Singapore', 'CS'=>'Central Singapore', 'WS'=>'West Singapore');
?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Add Branch</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="branch.php"><i class="icon-arrow-left"></i> Back</a>
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Region</label>
											<div class="controls">
												<select  name="region" class="" required>
													<?php 
														foreach ($regions as $key => $value){
															echo "<option value=".$key.">".$value."</option>";
														}
													?>  
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Name</label>
											<div class="controls">
												<input type="text" name="branch_name" id="inputEmail" placeholder="Branch Name" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Owner</label>
											<div class="controls">
												<input type="text" name="branch_owner" id="inputEmail" placeholder="Branch Owner" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Branch Address</label>
											<div class="controls">
												<textarea name="branch_address" required></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Email</label>
											<div class="controls">
												<input type="text" name="email" id="inputEmail" placeholder="Branch Email" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Phone No.</label>
											<div class="controls">
												<input type="text" name="phone_number" id="inputEmail" placeholder="Branch Phone" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Latitude</label>
											<div class="controls">
												<input type="text" name="latitude" id="inputEmail" placeholder="Latitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Longitude</label>
											<div class="controls">
												<input type="text" name="langitude" id="inputEmail" placeholder="Longitude">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail">Branch Description</label>
											<div class="controls">
												<textarea name="branch_description" id="ckeditor_full" required></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputEmail" >Status</label>
											<div class="controls">
												<input type="checkbox" name="status" value="1">
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
											</div>
										</div>
										</form>
										
										<?php
										if (isset($_POST['save'])){
										$branch_region = $_POST['region'];
										$branch_name = $_POST['branch_name'];
										$branch_owner = $_POST['branch_owner'];
										$branch_address = preg_replace('/\s+/', '', $_POST['branch_address']);
										$phone = $_POST['phone_number'];
										$latitude = $_POST['latitude'];
										$email = $_POST['email'];
										$langitude = $_POST['langitude'];
										$branch_description = $_POST['branch_description'];
										$status = $_POST['status'];
										echo $branch_address;
										
										$query = mysql_query("select * from branch where branch_name = '$branch_name' ")or die(mysql_error());
										$count = mysql_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}else{
										mysql_query("insert into branch (region,branch_name,branch_address,phone_number,email,longitude,latitude,branch_owner,branch_description,status) values('$branch_region','$branch_name','$branch_address','$phone','$email','$langitude','$latitude','$branch_owner','$branch_description','$status')")or die(mysql_error());
										
										
										//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Branch $branch_name')")or die(mysql_error());
										
										
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