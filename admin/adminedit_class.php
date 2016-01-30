<!-- block -->
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Edit Schedule</h4></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" id="add_class">
			<?php
				$query = mysql_query("select * from teacher_class_subject_branch
                LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id
                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id
				LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id
				LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
                 where teacher_class_subject_branch_id = '$get_id'")or die(mysql_error());
				$rows = mysql_fetch_array($query);
			?>
				<div class="control-group">
                    <label>User</label>
                    <div class="controls">                        
             
                        <select name="user"  class="" required>
                            <option value="<?php echo $rows['user_id']; ?>"><?php echo $rows['username']; ?></option>
                            <?php
                            $query = mysql_query("select * from users where user_type = 'teacher'");
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
			    <div class="control-group">
                    <label>Branch</label>
                    <div class="controls">                        
             
                        <select name="branch"  class="" required>
                            <option value="<?php echo $rows['branch_id']; ?>"><?php echo $rows['region']; ?>-<?php echo $rows['branch_name']; ?></option>
                            <?php
                            $query = mysql_query("select * from branch");
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['region']; ?>-<?php echo $row['branch_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label>Class Name:</label>
                    <div class="controls">                        
                    
                        <select name="class"  class="" required>
                            <option value="<?php echo $rows['class_id']; ?>"><?php echo $rows['class_name']; ?></option>
                            <?php
                            $query = mysql_query("select * from class order by class_name");
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label>Subject:</label>
                    <div class="controls">
                        <select name="subject"  class="" required>
                            <option value="<?php echo $rows['subject_id']; ?>"><?php echo $rows['subject_title']; ?>-<?php echo $rows['subject_code']; ?></option>
                            <?php
                            $query = mysql_query("select * from subject order by subject_code");
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_title']; ?>-<?php echo $row['subject_code']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label>Start date :</label>
                    <div class="controls">
                        
                        <input id="startdate" class="span5" type="text" class="" name="startdate" value="<?php echo $rows['start_date']; ?>" >
                    </div>
                </div>
				<div class="control-group">
                    <label>End date :</label>
                    <div class="controls">
                        
                        <input id="enddate" class="span5" type="text" class="" name="enddate" value="<?php echo $rows['end_date']; ?>" >
                    </div>
                </div>
				<div class="control-group">
                    <label>Short description :</label>
                    <div class="controls">
                        
                       <textarea name="short_desc"><?php echo $rows['short_desc']; ?></textarea>
                    </div>
                </div>
				<div class="control-group">
                    <label>Allowed student :</label>
                    <div class="controls">
                        
                        <input class="span5" type="text" class="" name="allowed" value="<?php echo $rows['allowed_student']; ?>" >
						<input class="span5" type="text" class="" name="count" value="<?php echo $rows['current_student_count']; ?>" >
                    </div>
                </div>
				<div class="control-group">
                    <label>Status :</label>
                    <div class="controls">
                        <input class="span5" type="hidden" class="" name="get_id" value="<?php echo $get_id ; ?>" >
                        <input class="span5" type="checkbox" class="" name="status" value="">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button name="save" class="btn btn-success"><i class="icon-save"></i> Save</button>
                    </div>
                </div>
            </form>

            <script>
                jQuery(document).ready(function ($) {
                    $("#add_class").submit(function (e) {
                        e.preventDefault();
                        var _this = $(e.target);
                        var formData = $(this).serialize();
                        $.ajax({
                            type: "POST",
                            url: "edit_class_action.php",
                            data: formData,
                            success: function (html) {
                                if (html == "true")
                                {
                                    $.jGrowl("Class Already Exist", {header: 'Add Class Failed'});
                                } else {
                                    $.jGrowl("Classs Successfully  Added", {header: 'Class Added'});
                                    var delay = 500;
									//alert(html);
                                    setTimeout(function () {
                                        window.location = 'class_schedules.php'
                                    }, delay);
                                }
                            }
                        });
                    });
                });
            </script>		

        </div>
    </div>
</div>
<!-- /block -->

