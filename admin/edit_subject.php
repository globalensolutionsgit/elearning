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
									 <a href="add_subject.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Subject</a>
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Subject</div>
		                            </div>
		                            <div class="block-content collapse in">
									<a href="subjects.php"><i class="icon-arrow-left"></i> Back</a>

									<?php
										$query = mysql_query("select * from subject JOIN class ON class.class_id = subject.class_id where subject_id = '$get_id'")or die(mysql_error());
										$row = mysql_fetch_array($query);
									?>
									    <form class="form-horizontal" method="post">
											<div class="control-group">
												<label class="control-label" for="inputPassword">Subject Title</label>
												<div class="controls">
												<input type="text" value="<?php echo $row['subject_title']; ?>" class="span8" name="title" id="inputPassword" placeholder="Subject Title" required>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputPassword">Class</label>
												<div class="controls">
												<select name="class">
													<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
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
														<textarea name="s_description" id="ckeditor_full">
														<?php echo $row['short_description']; ?>
														</textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputPassword">Long Description</label>
												<div class="controls">
														<textarea name="l_description" id="ckeditor_full">
														<?php echo $row['long_description']; ?>
														</textarea>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputEmail">Subject Code</label>
												<div class="controls">
												<input type="text" value="<?php echo $row['subject_code']; ?>" name="s_code" id="inputEmail" placeholder="Subject Code">
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputEmail">Status</label>
												<div class="controls">
												<input type="checkbox" id="inputEmail" <?php if($row['status']){ echo 'checked value="1"';} else { echo 'value="0"'; } ?> >
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
												$title = $_POST['title'];
												$s_description = $_POST['s_description'];
												$class_id = $_POST['class'];
												$l_description = $_POST['l_description'];
												$s_code = $_POST['s_code'];
												$status = $_POST['status'];
												mysql_query("update subject set subject_code = '$s_code',subject_title = '$title',short_description = '$s_description',long_description = '$l_description',class_id = '$class_id',status = '$status' where subject_id = '$get_id' ")or die(mysql_error());
										?>
											<script>
											window.location = "subjects.php";
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
