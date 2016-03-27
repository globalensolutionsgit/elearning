<?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');
$get_id = $_GET['id'];
$user_type = $_GET['user_type'];
?>   
<div class="row-fluid">
	<?php if($_GET['user_type']=='student'){ ?>
		<a href="admin_user.php?user_type=student" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
	<?php }else if($_GET['user_type']=='teacher'){?>
		<a href="admin_user.php?user_type=teacher" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
	<?php }else {?>
		<a href="admin_user.php?user_type=admin" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
	<?php } ?>
    <!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit User</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php
					$query = mysql_query("select * from users where user_id = '$get_id' and user_type = '$user_type'")or die(mysql_error());
					$row = mysql_fetch_array($query);
				?>
				<form method="post">
					<div class="control-group">
						<div class="controls">
							<?php if($_GET['user_type']=='student'){ ?>
								<select name='user_type'>
									<option value="student">Student</option>
								</select>
							<?php }else if($_GET['user_type']=='teacher'){?>
								<select name='user_type'>
									<option value="teacher">Teacher</option>
								</select>
							<?php }else {?>
								<select name='user_type'>
									<option value="admin">Admin</option>
								</select>
							<?php } ?>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="focusedInput" type="text" placeholder = "Username" required>
					    </div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="focusedInput" type="password" placeholder = "password" required>
					    </div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" value="<?php echo $row['phone_number']; ?>" name="phone_number" id="focusedInput" type="text" placeholder = "Phone number" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="text" placeholder = "Email" required>
					    </div>
					</div>
					<!-- newly added by siva -->
					<!-- region -->				
					<div class="control-group">
						<div class="controls">
							<select name='region' class="regions" >
								<?php
									foreach ($regions as $key => $value) {
									if($key == $row['region']){
										echo "<option value=" . $key . " selected>" . $value . "</option>";
									}else{
										echo "<option value=" . $key . ">" . $value . "</option>";
									}
									
								} ?>
							</select>
						</div>
					</div>
					<?php
						if ($user_type=="student") {?>
						<!-- branch -->   
							<div class="control-group">
								<div class="controls">
									<select class="branchs" name="branch">
										<?php
											$branch_selected=$row['city'];
											$res=mysql_query("SELECT b.branch_name,b.branch_id,u.city FROM branch AS b INNER JOIN users AS u ON b.branch_id=$branch_selected");
											$row1=mysql_fetch_array($res);
										?>										
										<option value="<?php echo $row1['branch_id']; ?>"><?php echo $row1['branch_name']; ?></option>
									</select>
							
								</div>
							</div>
							<!-- class -->
							<div class="control-group">
								<div class="controls">
									<select name="classes">
										<?php
											foreach ($classes as $key => $value) {
											echo "<option value=" . $key . ">" . $value . "</option>";
										} ?>
									</select>
								</div>
							</div>
					<?php } ?>
					<?php
                                if ($user_type=="teacher") {?>
									<div class="control-group">
										<div class="controls">
											<select class="branchs" name="branch">
												<option>Select branch</option>
											</select>
										</div>
									</div>
                              		<div class="control-group">
                                		<div class="controls">                                   
		                                    <?php
		                                    $query = mysql_query("SELECT
		                                                            cl.class_id,
		                                                            su.class_id,
		                                                            cl.class_name,
		                                                            su.subject_title,
		                                                            su.subject_id
		                                                            FROM
		                                                            class AS cl
		                                                            INNER JOIN `subject` AS su
		                                                            WHERE
		                                                            cl.class_id = su.class_id")or die(mysql_error());
	                                    	$count = mysql_num_rows($query);
	                                    	if ($count != '0') {
	                                    	?>
		                                    <select class="" name="preference_classsubject[]" id="teacher_class" multiple data-validation="required">
			                                    <option>Select class</option>
			                                    <?php while ($row = mysql_fetch_array($query)) { ?>
			                                	<option value="<?php echo $row['class_id'] . '-' . $row['subject_id']; ?>">
			        								<?php echo $row['class_name'] . '-' . $row['subject_title']; ?>
			                                    </option>
			    								<?php } ?>
		                                    </select>
											<?php } ?>
                                		</div>
                          			</div>
                              <?php
                                }
                              ?>
					<div class="control-group">
						<div class="controls">
							<textarea name="description"><?php echo $row['description']; ?></textarea>
						</div>
					</div>
							<div class="control-group">
								<div class="controls">
									<input type="radio" value="1" name="gender" <?php if($row['gender']==1) echo 'checked'; ?>>Male
									<input type="radio" value="2"  name="gender" <?php if($row['gender']==2) echo 'checked'; ?>>Female
								</div>
							</div>
									
							<!--	<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['city']; ?>" name="city"  id="focusedInput" type="text" placeholder = "City" required>
                                          </div>
							</div>  -->
							<div class="control-group">
								<div class="controls">
									<button name="update" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i></button>
								</div>
							</div>
				</form>
			</div>
		</div>
	</div> <!-- /block -->
</div>
<?php
	if (isset($_POST['update'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password=$_POST['password'];
		$phone_number = $_POST['phone_number'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$description = $_POST['description'];
		$region=$_POST['region'];
		if(isset($_POST['branch'])){
			$city = $_POST['branch'];
		}
		if(isset($_POST['classes'])){
			$classes=$_POST['classes'];
		}
		if($user_type == 'admin'){
			mysql_query("update users set username='$username', firstname = '$firstname' , lastname = '$lastname', password='$password',phone_number='$phone_number',email='$email',gender='$gender',description='$description',region='$region' where user_id = '$get_id' ")or die(mysql_error());
		}else if($user_type == 'teacher'){
			mysql_query("update users set username='$username',city='$city', firstname = '$firstname' , classes='$classes',lastname = '$lastname', password='$password',phone_number='$phone_number',email='$email',gender='$gender',description='$description',region='$region' where user_id = '$get_id' ")or die(mysql_error());
		}else if($user_type == 'student'){
			mysql_query("update users set username='$username',city='$city', firstname = '$firstname' , classes='$classes',lastname = '$lastname', password='$password',phone_number='$phone_number',email='$email',gender='$gender',description='$description',region='$region' where user_id = '$get_id' ")or die(mysql_error());
		}
		echo "<script>alert('Data Updated Successfully!');window.location = 'edit_user.php?user_type=".$user_type."&id=".$get_id."';</script>";
	
	}
?>
