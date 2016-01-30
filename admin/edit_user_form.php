   <div class="row-fluid">
   <a href="admin_user.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add user</a>
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
                                            <select name="user_type">
												<option value="<?php echo $row['user_type']; ?>"><?php echo $row['user_type']; ?></option>
												<option value="admin">Admin</option>
												<option value="teacher">Teacher</option>
												<option value="student">Student</option>
											</select>
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
                                            <input class="input focused" value="<?php echo $row['phone_number']; ?>" name="phone_number" id="focusedInput" type="text" placeholder = "Phone number" required>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['email']; ?>" name="email" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>

					<div class="control-group">
                                          <div class="controls">
                                            <textarea name="description"><?php echo $row['description']; ?></textarea>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">

                                            <?php

                                            if($row['gender']=='1'){
                                            ?>
                                              <input type="radio" value="1" name="gender" checked>Male
                                              <input type="radio" value="2"  name="gender">Female
                                            <?php
                                            }else{
                                                ?>
                                                <input type="radio" value="1" name="gender" >Male
                                               <input type="radio" value="2"  name="gender" checked>Female
                                            <?php } ?>
                                          </div>
                                        </div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['city']; ?>" name="city"  id="focusedInput" type="text" placeholder = "City" required>
                                          </div>
                                        </div>




											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php
if (isset($_POST['update'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$description = $_POST['description'];

mysql_query("update users set username = '$username'  , firstname = '$firstname' , lastname = '$lastname', password='$password',phone_number='$phone_number',email='$email',gender='$gender',city='$city',description='$description' where user_id = '$get_id' ")or die(mysql_error());


?>
<script>
  window.location = "admin_user.php";
</script>
<?php
}
?>
