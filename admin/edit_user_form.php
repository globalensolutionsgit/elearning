


<?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');
$get_id = $_GET['id'];
$user_type = $_GET['user_type'];
// $get_class_id=$_GET['id3'];
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
			<div class="muted pull-left user_type_label">Edit User-
				<?php if($_GET['user_type']=='student'){ ?>
							<label>Student</label>
							<?php } else if($_GET['user_type']=='teacher'){?>
							<label>Teacher</label>
							<?php } else {?>
							<label>Admin</label>
							<?php } ?>
			</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<?php
					$query = mysql_query("select * from users where user_id = '$get_id' and user_type = '$user_type'")or die(mysql_error());
					$row = mysql_fetch_array($query);
					if($user_type=='student') {
					$get_class_id=$row['classes'];
				}
				?>
				<form method="post" id="edit_user_form">
					<div class="control-group">
						<div class="controls user_type_drop">
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
							<input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="firstname" type="text" placeholder="Enter firstname">
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="lastname" type="text" placeholder="Enter lastname">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['username']; ?>"  name="username" id="username" type="text" placeholder="Enter username">
					    </div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['password']; ?>"  name="password" id="password" type="password" placeholder="Enter password" maxlength="10">
					    </div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" value="<?php echo $row['phone_number']; ?>" name="phone" maxlength="10" id="phone" type="text" placeholder="Enter phonenumber">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="email" type="text" placeholder="Enter email">
					    </div>
					</div>
					<!-- newly added by siva -->
					<!-- region -->	
					<?php
						if ($user_type=="admin") {?>			
					<div class="control-group">
						<div class="controls">
							<select name='region' class="regions_admin" >
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
						} ?>

					<?php
						if ($user_type=="student") {?>
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
						<!-- branch -->   
							<div class="control-group">
								<div class="controls">
									<select class="branchs" name="branch" id="sel2">
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
									<!-- <select name="classes">
										<?php
											// foreach ($classes as $key => $value) {
											// echo "<option value=" . $key . ">" . $value . "</option>";
										// } 
										?>
									</select> -->
									<?php
		                                    $query1 = mysql_query("SELECT * from class")or die(mysql_error());
	                                    	$count1 = mysql_num_rows($query1);
	                                    	$query_class_name = mysql_query("SELECT * from class where class_id='$get_class_id'")or die(mysql_error());
	                                    	$row_class_name = mysql_fetch_array($query_class_name);
	                                    	$class_id2=$row_class_name['class_id'];
	                                    	if ($count1 != '0') {
	                                    	?>


									<select name="classes" value="select" id="sel3">
									<!--     <option>Select Class</option> -->
									     <?php while ($row1 = mysql_fetch_array($query1)) { 
									     $class_id1=$row1['class_id']; 


if($class_id1==$class_id2)  { ?>
	<option value="<?php echo $row1['class_id']; ?>" selected><?php echo $row1['class_name']; ?></option>
<?php }
else { ?>
	<option value="<?php echo $row1['class_id']; ?>"><?php echo $row1['class_name']; ?></option>

									     	
			                             <?php } }?>
									</select>
									<?php } ?>



								</div>
							</div>
					<?php } ?>
					<?php
                                if ($user_type=="teacher") {?>
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
									<div class="control-group">
								<div class="controls">
									<select class="branchs" name="branch" id="sel2">
										<?php
											$branch_selected=$row['city'];
											$res=mysql_query("SELECT b.branch_name,b.branch_id,u.city FROM branch AS b INNER JOIN users AS u ON b.branch_id=$branch_selected");
											$row1=mysql_fetch_array($res);
										?>										
										<option value="<?php echo $row1['branch_id']; ?>"><?php echo $row1['branch_name']; ?></option>
									</select>
							
								</div>
							</div>
                              		<!-- <div class="control-group">
                                		<div class="controls">                                   
		                                    <?php
		                                    // $query = mysql_query("SELECT
		                                    //                         cl.class_id,
		                                    //                         su.class_id,
		                                    //                         cl.class_name,
		                                    //                         su.subject_title,
		                                    //                         su.subject_id
		                                    //                         FROM
		                                    //                         class AS cl
		                                    //                         INNER JOIN `subject` AS su
		                                    //                         WHERE
		                                    //                         cl.class_id = su.class_id")or die(mysql_error());
	                                    	// $count = mysql_num_rows($query);
	                                    	// if ($count != '0')
	                                    	 // {
	                                    	?>
		                                    <select class="" name="preference_classsubject[]" id="teacher_class" multiple data-validation="required">
			                                    <option>Select class</option>
			                                    <?php 
			                                    // while ($row = mysql_fetch_array($query)) { ?>
			                                	<option value="<?php 
			                                	// echo $row['class_id'] . '-' . $row['subject_id']; ?>">
			        								<?php 
			        								// echo $row['class_name'] . '-' . $row['subject_title']; ?>
			                                    </option>
			    								<?php 
			    								// } ?>
		                                    </select>
											<?php 
											// } ?>
                                		</div>
                          			</div>
-->
<div class="control-group">
                                		<div class="controls" id="select5">                                   
		                                    <?php
		                                    $query_class = mysql_query("SELECT
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
	                                    	$count_class = mysql_num_rows($query_class);
	                                    	if ($count_class != '0') {
	                                    	?>
		                                    <select class="sel5" name="preference_classsubject[]" value="select" id="teacher_class" multiple data-validation="required">
			                                    <option selected>Select class</option>
			                                    <?php while ($row_class = mysql_fetch_array($query_class)) { ?>
			                                	<option value="<?php echo $row_class['class_id'] . '-' . $row_class['subject_id']; ?>">
			        								<?php echo $row_class['class_name'] . '-' . $row_class['subject_title']; ?>
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
									<input type="radio" value="1" name="gender" <?php if($row['gender']==1) echo 'checked'; ?> required>Male
									<input type="radio" value="2"  name="gender" <?php if($row['gender']==2) echo 'checked'; ?> required>Female
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
		$phone_number = $_POST['phone'];
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
		echo "<script>alert('Data Updated Successfully!');
		window.location = 'admin_user.php?user_type=".$user_type."';</script>";
	
	}
?>


