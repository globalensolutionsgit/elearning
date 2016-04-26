
	 <?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
//$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');
$user_type = $_GET['user_type'];
?>

<div class="row-fluid">
    <!-- block -->
    <div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left user_type_label">Add User -
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
				<form method="post" enctype="multipart/form-data" name="consult_form" class="consult_form" id="consult_form">
					<div class="control-group">
					    <div class="controls user_type_drop">
							<?php if($_GET['user_type']=='student'){ ?>
								<select name='user_type'>
									<option value="student">Student</option>
								</select>
							<?php } else if($_GET['user_type']=='teacher'){?>
								<select name='user_type'>
									<option value="teacher">Teacher</option>
								</select>
							<?php } else {?>
								<select name='user_type'>
									<option value="admin">Admin</option>
								</select>
							<?php } ?>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input_field" name="firstname" id="firstname" type="text" value=""  placeholder="Firstname">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							                	
                            	
                            <input class="input focused input_field" name="lastname" id="lastname" type="text" value=""  placeholder="Lastname">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused input_field" name="username" id="username" type="text" value=""  placeholder="Username">
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused input_field" name="password" id="password" type="password" value=""  placeholder="Password" maxlength="10" >
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
					    	
							<input class="input focused input_field" name="phone" id="phone" type="text" value="" maxlength="10"  placeholder="Phonenumber">
					    </div>
					</div>
					<div class="control-group">
						<div class="controls">
							
							<input class="input focused input_field" name="email" id="email" type="text" value=""  placeholder="Email">
						</div>
					</div>
					<!-- newly added by kalai -->
					<?php
						if ($user_type=="admin") {?>
					<div class="control-group">
						<div class="controls" id="select1">
							<select name='region' class="regions_admin" id="sel1" value="Select Region" >
								<option>Select Region</option>
								<option value="NS">North Singapore</option>
								<option value="NES">North East Singapore</option>
								<option value="ES">East Singapore</option>
								<option value="CS">Central Singapore</option>
								<option value="WS">West Singapore</option>

								<?php
									// foreach ($regions as $key => $value) {
									// 	echo "<option value=" . $key . ">" . $value . "</option>";
									// 	} ?>
							</select>
						</div>
					</div>
					<?php
						}  ?>
					<!-- student -->    
					<?php
						if ($user_type=="student") {?>
						<div class="control-group">
						<div class="controls" id="select1">
							<select name='region' class="regions" id="sel1" value="Select Region" >
								<option>Select Region</option>
								<option value="NS">North Singapore</option>
								<option value="NES">North East Singapore</option>
								<option value="ES">East Singapore</option>
								<option value="CS">Central Singapore</option>
								<option value="WS">West Singapore</option>

								<?php
									// foreach ($regions as $key => $value) {
									// 	echo "<option value=" . $key . ">" . $value . "</option>";
									// 	} ?>
							</select>
						</div>
					</div>
						    <div class="control-group">
								<div class="controls" id="select2">
									<select class="branchs" name="branch" id="sel2" value="Select Branch">
										<option>Select branch</option>
									</select>
                                </div>
                            </div>
							<div class="control-group">
								<div class="controls" id="select3">
									 <?php
		                                    $query1 = mysql_query("SELECT * from class")or die(mysql_error());
	                                    	$count1 = mysql_num_rows($query1);
	                                    	if ($count1 != '0') {
	                                    	?>
									<select name="classes" value="select" id="sel3">
									    <option>Select Class</option>
									     <?php while ($row1 = mysql_fetch_array($query1)) { ?>
									     	<option value="<?php echo $row1['class_id']; ?>"><?php echo $row1['class_name']; ?></option>
			                             <?php } ?>
									</select>
									<?php } ?>
								</div>
						    </div>
						    <?php } ?>
							<?php
                                if ($user_type=="teacher") {?>
                                <div class="control-group">
						<div class="controls" id="select1">
							<select name='region' class="regions" id="sel1" value="Select Region" >
								<option>Select Region</option>
								<option value="NS">North Singapore</option>
								<option value="NES">North East Singapore</option>
								<option value="ES">East Singapore</option>
								<option value="CS">Central Singapore</option>
								<option value="WS">West Singapore</option>

								<?php
									// foreach ($regions as $key => $value) {
									// 	echo "<option value=" . $key . ">" . $value . "</option>";
									// 	} ?>
							</select>
						</div>
					</div>
									<div class="control-group">
										<div class="controls" id="select4">
											<select class="branchs" name="branch" value="select" id="sel4">
												<option>Select branch</option>
											</select>
										</div>
									</div>
                              		<div class="control-group">
                                		<div class="controls" id="select5">                                   
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
		                                    <select class="sel5" name="preference_classsubject[]" value="select" id="teacher_class" multiple data-validation="required">
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
                              
										<!-- <div class="control-group">
                                          <div class="controls">
                                          <input class="input focused" name="photo" id="focusedInput" type="file" placeholder = "Photo">
                                          </div>
                                        </div> -->
							<div class="control-group">
                              	<div class="controls">
                                	<textarea name="description" placeholder="comments"></textarea>
                              	</div>
                            </div>
							<div class="control-group">
                          		<div class="controls gender_holder">
                          			<label>Gender:- </label>
                                	<input type="radio" value='1' name="gender" class="gender" checked>Male
									<input type="radio" value='2'  name="gender" class="gender" >Female
                              	</div>
                            </div>
                            <!-- commented by kalai -->
							                    <!-- <div class="control-group">
                              <div class="controls">
                                <input class="input focused" name="city" id="focusedInput" type="text" placeholder = "City" required>
                              </div>
                            </div> -->
										
							<div class="control-group">
								<div class="controls">
									<button type="submit" name="save" class="btn btn-info" title="Add"><i class="icon-plus-sign icon-large"></i></button>
								</div>
                            </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					<?php

						if (isset($_POST['save'])){
							$user_type = $_POST['user_type'];
							$firstname = $_POST['firstname'];
							$lastname = $_POST['lastname'];
							$gender = $_POST['gender'];
							$username = $_POST['username'];
							$password = $_POST['password'];
							$phone_number = $_POST['phone'];
							$email = $_POST['email'];
							$description = $_POST['description'];
							$region = $_POST['region'];
// if($_FILES['photo']['tmp_name']){
// $image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
// $image_name = addslashes($_FILES['photo']['name']);
// $image_size = getimagesize($_FILES['photo']['tmp_name']);
// move_uploaded_file($_FILES["photo"]["tmp_name"], "admin/uploads/" . $_FILES["image"]["name"]);
// $location = "uploads/" . $_FILES["photo"]["name"];
// }
// 
 // $city = $_POST['city'];
// 
   // $target_dir = "uploads/";
     // $target_file = $target_dir . basename($_FILES["photo"]["name"]);
     // $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
     // // Check if image file is a actual image or fake image
    // if (isset($_POST["submit"])) {
        // $check = getimagesize($_FILES["photo"]["tmp_name"]);
        // if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
        // } else {
            // echo "File is not an image.";
        // }
    // }
    // if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // }
    // move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);


$query = mysql_query("select * from users where username = '$username' or email='$email'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Username or Mail id Already Exist');

</script>
<?php
}else{










// mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,city,description,region,classes) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$location','$gender','$description','$region',$classes)")or die(mysql_error());
if ($user_type=="teacher") {
$city = $_POST['branch'];
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region,city,status) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region','$city','1')")or die(mysql_error());
	
	$lastuserId = mysql_insert_id();
foreach ($_POST['preference_classsubject'] as $key => $value) {
    $userIds = explode("-", $value);
    mysql_query("insert into user_preference (usersId, user_classId, user_subjectId) values('$lastuserId', '$userIds[0]', '$userIds[1]')")or die(mysql_error());
	
	}
}
else if($user_type=="student"){
$classes = $_POST['classes'];
$city = $_POST['branch'];
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region,classes,city,status) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region','$classes','$city','1')")or die(mysql_error());
}
else if($user_type=="admin"){
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region,status) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region','1')")or die(mysql_error());
}
?>
<script>
window.location = "admin_user.php/?user_type="<?php echo $user_type ?>";"
alert('Data Inserted Successfully!');
</script>
<?php
}
}
?>
