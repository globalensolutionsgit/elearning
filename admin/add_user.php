   <?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');
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
                                            <select name='user_type'>
												<option value="admin">Admin</option>
												<option value="teacher">Teacher</option>
												<option value="student">Student</option>
											</select>
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
                                            <input class="input focused" name="email" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>
                              <!-- newly added by kalai -->
                              <div class="control-group">
                                  <div class="controls">
                                        <select name='region' class="regions">
                                            <option>Select Region</option>
                                            <?php
                                            foreach ($regions as $key => $value) {
                                                echo "<option value=" . $key . ">" . $value . "</option>";
                                            }
                                            ?>
                                        </select>
                                  </div>
                              </div>
                              <?php
                                if ($user_type=="student") {?>
                                 <div class="control-group">
                                    <div class="controls">
                                        <select name="classes">
                                          <option>Select Class</option>
                                            <?php
                                            foreach ($classes as $key => $value) {
                                                echo "<option value=" . $key . ">" . $value . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                              </div>
                              <?php
                                }
                              ?>
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
                                            <!-- <input class="input focused" name="photo" id="focusedInput" type="file" placeholder = "Photo" required> -->
                                          <input class="input focused" name="photo" id="focusedInput" type="file" placeholder = "Photo">
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <textarea name="description"></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input type="radio" value="male" name="gender" required>Male
					    <input type="radio" value="female"  name="gender" required>Female
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
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

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
$username = $_POST['username'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
if($_FILES['photo']['tmp_name']){
$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
$image_name = addslashes($_FILES['photo']['name']);
$image_size = getimagesize($_FILES['photo']['tmp_name']);

move_uploaded_file($_FILES["photo"]["tmp_name"], "admin/uploads/" . $_FILES["image"]["name"]);
$location = "uploads/" . $_FILES["photo"]["name"];
}
$gender = $_POST['gender'];
// $city = $_POST['city'];
$description = $_POST['description'];
$region = $_POST['region'];



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
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,description,region,city) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','','$gender','$description','$region','$city')")or die(mysql_error());
$lastuserId = mysql_insert_id();
foreach ($_POST['preference_classsubject'] as $key => $value) {
    $userIds = explode("-", $value);
    mysql_query("insert into user_preference (usersId, user_classId, user_subjectId) values('$lastuserId', '$userIds[0]', '$userIds[1]')")or die(mysql_error());
}
}
else if($user_type=="student"){
  $classes = $_POST['classes'];
  mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,description,region,classes) values('$user_type','$username','$password','$firstname','$lastname','$phone_number','$email','','$gender','$description','$region','$classes')")or die(mysql_error());
}
?>
<script>
window.location = "admin_user.php/?user_type="<?php echo $user_type ?>";"
</script>
<?php
}
}
?>