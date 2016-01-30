<?php include('header.php'); ?>
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
		                                <div class="muted pull-left">Add Subject</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php"><i class="icon-arrow-left"></i> Back</a>
									    <form class="form-horizontal" method="post">
										<div class="control-group">
											<label class="control-label" for="inputPassword">Subject Title</label>
											<div class="controls">
											<input type="text" class="span8" name="title" id="inputPassword" placeholder="Subject Title" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Class</label>
											<div class="controls">
												<select name="class" required>
													<?php
														$cys_query = mysql_query("select * from class order by class_name");
														while($cys_row = mysql_fetch_array($cys_query)){
													?>
													<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">Short Description</label>
											<div class="controls">
													<textarea name="s_description" id="ckeditor_full" required></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Long Description</label>
											<div class="controls">
													<textarea name="l_description" id="ckeditor_full" required></textarea>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Subject Code</label>
											<div class="controls">
											<input type="text" class="span8" name="s_code" id="inputPassword" placeholder="Subject Code" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Academic Year</label>
											<div class="controls">
											<input type="text" class="span8" name="a_year" id="inputPassword" placeholder="Academic year" required>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Allowed Student</label>
											<div class="controls">
											<input type="text" class="span8" name="a_students" id="inputPassword" placeholder="Allowed student" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Status</label>
											<div class="controls">
											<input type="checkbox" value="1" name="status">
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

										$title = $_POST['title'];
										$s_description = $_POST['s_description'];
										$class_id = $_POST['class'];
										$l_description = $_POST['l_description'];
										$s_code = $_POST['s_code'];
										$a_year = $_POST['a_year'];
										$status = $_POST['status'];
                                        $a_student =$_POST['a_students'];


										$query = mysql_query("select * from subject where subject_title = '$title' and class_id = '$class_id' ")or die(mysql_error());
										$count = mysql_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}else{
										mysql_query("insert into subject (subject_title,short_description,class_id,long_description,subject_code,acedemic_year,allowed_student,status) values('$title','$description','$class_id','$l_description','$s_code','$a_year','$a_student
                                        ','$status')")or die(mysql_error());


										//mysql_query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Subject $subject_code')")or die(mysql_error());


										?>
										<script>
										window.location = "subjects.php";
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
