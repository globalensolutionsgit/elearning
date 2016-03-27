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
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Teacher Preferances</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                        <a data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
										<?php include('modal_delete.php'); ?>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Branch</th>
                                                <th>Teacher</th>
                                                <th>Subject</th>
                                                <th>Starttime</th>
                                                <th>Endtime</th>
                                                <th>Days</th>
												<th></th>
												<th></th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $subject_query = mysql_query("select * from class_schedules JOIN users JOIN branch JOIN subject where users.user_id = class_schedules.teacher_id and branch.branch_id = class_schedules.branch_id and subject.subject_id = class_schedules.subject_id") or die(mysql_error());
												while($row = mysql_fetch_array($subject_query)){
                                                    $classid = $row['class_id'];
												    $branch_id=$row['branch_id'];
                                                ?>
                                                <tr>
                                                    <td width="30">
                                                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                    </td>
                                                    <td><?php echo $row['branch_name'];  ?></td>
                                                    <td><?php echo $row['firstname'];  ?></td>
                                                    <td><?php echo $row['subject_title'];  ?></td>
                                                    <td><?php echo $row['start_time'];  ?></td>
                                                    <td><?php echo $row['end_time'];  ?></td>
													<td><?php echo $row['day'];  ?></td>
                                                    <td width="40"><a href="add_student.php<?php echo '?classid='.$classid.'&branch_id='.$branch_id.'&sche_id='.$row['class_schedules_id']; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-user"></i></a></td>
                                                    <td width="40">
                                                        <a href="edit_class_schedules.php<?php echo '?classid='. $classid.'&branch_id='.$branch_id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		    <?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>
