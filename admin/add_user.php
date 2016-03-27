   <?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
//$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');
$user_type = $_GET['user_type'];
?>
<div class="row-fluid">
    <!-- block -->
    <div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add User</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" enctype="multipart/form-data">
					<div class="control-group">
					    <div class="controls">
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
							<input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" name="password" id="focusedInput" type="password" placeholder = "Password" required>
						</div>
					</div>
					<div class="control-group">
					    <div class="controls">
							<input class="input focused" name="phone_number" id="focusedInput" type="text" placeholder = "Phone number" required>
					    </div>
					</div>
					<div class="control-group">
						<div class="controls">
							<input class="input focused" name="email" id="focusedInput" type="email" placeholder = "Email" required>
						</div>
					</div>
					<!-- newly added by kalai -->
					<div class="control-group">
						<div class="controls">
							<select name='region' class="regions" >
								<option>Select Region</option>
								<?php
									foreach ($regions as $key => $value) {
										echo "<option value=" . $key . ">" . $value . "</option>";
										} ?>
							</select>
						</div>
					</div>
					<!-- student -->    
					<?php
						if ($user_type=="student") {?>
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
		                                    $query1 = mysql_query("SELECT * from class")or die(mysql_error());
	                                    	$count1 = mysql_num_rows($query1);
	                                    	if ($count1 != '0') {
	                                    	?>
									<select name="classes">
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
                              
										<!-- <div class="control-group">
                                          <div class="controls">
                                          <input class="input focused" name="photo" id="focusedInput" type="file" placeholder = "Photo">
                                          </div>
                                        </div> -->
							<div class="control-group">
                              	<div class="controls">
                                	<textarea name="description"></textarea>
                              	</div>
                            </div>
							<div class="control-group">
                          		<div class="controls">
                                	<input type="radio" value='1' name="gender" required>Male
									<input type="radio" value='2'  name="gender" required>Female
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
									<button type="submit" name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>
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
							$phone_number = $_POST['phone_number'];
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


$query = mysql_query("select * from users where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{










// mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,city,description,region,classes) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$location','$gender','$description','$region',$classes)")or die(mysql_error());
if ($user_type=="teacher") {
$city = $_POST['branch'];
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region,city) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region','$city')")or die(mysql_error());
	
	$lastuserId = mysql_insert_id();
foreach ($_POST['preference_classsubject'] as $key => $value) {
    $userIds = explode("-", $value);
    mysql_query("insert into user_preference (usersId, user_classId, user_subjectId) values('$lastuserId', '$userIds[0]', '$userIds[1]')")or die(mysql_error());
	
	}
}
else if($user_type=="student"){
$classes = $_POST['classes'];
$city = $_POST['branch'];
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region,classes,city) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region','$classes','$city')")or die(mysql_error());
}
else if($user_type=="admin"){
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,gender,description,region) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','$gender','$description','$region')")or die(mysql_error());
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