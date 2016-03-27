<!-- block -->
<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
if(isset($_GET['id'],$_GET['branch_id'])){
    $get_id = $_GET['id'];
    $user_type = $_GET['branch_id'];
}else{
    header('Location:404.php');
}
?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Edit Schedule</h4></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
		<?php $query = mysql_query("select * from student_teacher_allocation where class_id = '$get_id' and branch_id = '$user_type'")or die(mysql_error());
		$row1 = mysql_fetch_array($query); 
		$branch_selected=$row1['branch_id'];
		$row2=mysql_query("SELECT b.branch_name FROM branch AS b INNER JOIN student_teacher_allocation AS u ON b.branch_id=$branch_selected");
		$row3=mysql_fetch_array($row2);
										?>
            <form method="post" id="add_class">
				<div>
                    <div class="control-group span6"> <!-- branch -->
                        <label>Branch</label>
                        <div class="controls">
						        <select name="branch"  class="branches_time" required>
                               <!-- <option>Select Branch</option> -->
								<option value="<?php echo $row1['branch_id']; ?>"><?php echo $row3['branch_name']; ?></option>
                                <?php
                                $query = mysql_query("select * from branch");
                                while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
                                <?php $v1=$value;} ?>
                            </select>
                        </div>
                    </div>
    				<div class="control-group span6"> <!-- teacher -->
                        <label>Teacher</label>
                        <div class="controls">
                            <select name="user"  class="teacher" required>
							<?php
									$name_selected=$row1['teacher_id'];
									$row4=mysql_query("SELECT u.firstname FROM users AS u INNER JOIN student_teacher_allocation AS s ON u.user_id=$name_selected");
									$row5=mysql_fetch_array($row4); 
							?>
                                <option value="<?php echo $row1['user_id']; ?>"><?php echo $row5['firstname']; ?></option>
                                <?php
                                $query = mysql_query("select * from users where user_type = 'teacher'");
                                while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div>  <!-- class and subject -->
                    <div class="control-group span6"> <!-- class -->
                        <label>Class :</label>
                        <div class="controls">
                            <select name = "classs" class="classs" required>
							<?php
									$class_selected=$row1['class_id'];
									$row6=mysql_query("SELECT u.class_name FROM class AS u INNER JOIN student_teacher_allocation AS s ON u.class_id=$class_selected");
									$row7=mysql_fetch_array($row6); 
							?>
							
                               <option value="<?php echo $row1['class_id']; ?>"><?php echo $row7['class_name']; ?></option>
                            
							</select>
                        </div>
                    </div>
                    <div class="control-group span6"> <!-- subject -->
                        <label>Subject :</label>
                        <div class="controls">
                            <select name ="subject" class="subjects" required>
							<?php
									$subject_selected=$row1['subject_id'];
									$row8=mysql_query("SELECT u.subject_title FROM subject AS u INNER JOIN student_teacher_allocation AS s ON u.subject_id=$subject_selected");
									$row9=mysql_fetch_array($row8); 
							?>
							
                               <option value="<?php echo $row1['subject_id']; ?>"><?php echo $row9['subject_title']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
				<!-- newly added by kalai -- >
				<!-- newly started by siva -->
				<div> <!-- startdate and sunday time -->
                    <div class="control-group span6"> <!-- startdate -->
                        <label>Start date :</label>
						
                        <div class="controls">
                            <input id="startdate" class="span6" type="text" class="" name="startdate" value="<?php echo $row1['start_date'] ?>" >
                        </div>
                    </div>
					<div class="control-group span6"> <!-- sunday time -->
						<div class="controls">
							<div class="input_schedule">
							
								<input type="checkbox" name="days[]" id="days" value="sun" <?php if($row1['days']=='sun') echo 'checked'; ?> >Sunday
							</div>
							<input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
							<!-- <label> to </label> -->
							<input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">	
						</div>    
					</div>
                </div>
				<div style="clear:both">
				</div>
				<div> <!-- monday and tuesday -->
					<div class="control-group span6"> <!-- monday -->
                        <div class="controls">
							<div class="input_schedule">
								<input type="checkbox" name="days[]" id="days" value="mon" <?php if($row1['days']=='mon') echo 'checked'; ?>>Monday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>"  placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>"  placeholder="End Time">
                        </div>
                    </div>
					<div class="control-group span6"> <!-- tuesday -->
                        <div class="controls">
							<div class="input_schedule">
							
						
								<input type="checkbox" name="days[]" id="days" value="tue" <?php if($row1['days']=='tue') echo 'checked'; ?>>Tuesday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">
                        </div>
						
                    </div> 
                </div>
				<div> <!-- wednesday and thursday -->
                    <div class="control-group span6"> <!-- wednesday -->
                       <div class="controls">
							<div class="input_schedule">
								<input type="checkbox" name="days[]" id="days" value="wed" <?php if($row1['days']=='wed') echo 'checked'; ?>>Wednesday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">
                        </div>
                    </div>
					<div class="control-group span6"> <!-- thursday -->
                        <div class="controls">
							<div class="input_schedule">
								<input type="checkbox" name="days[]" id="days" value="thu" <?php if($row1['days']=='thu') echo 'checked'; ?> >Thursday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">
                        </div>
                    </div>
                </div>
				<div> <!-- friday and saturday -->
                    <div class="control-group span6"> <!-- friday -->
                        <div class="controls">
							<div class="input_schedule">
								<input type="checkbox" name="days[]" id="days" value="fri" <?php if($row1['days']=='fri') echo 'checked'; ?>>Friday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">
                        </div>
                    </div>
					<div class="control-group span6"> <!-- saturday -->
                        <div class="controls">
							<div class="input_schedule">
								<input type="checkbox" name="days[]" id="days" value="sat" <?php if($row1['days']=='sat') echo 'checked'; ?>>Saturday
							</div>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row1['start_time'] ?>" placeholder="Start Time">
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row1['end_time'] ?>" placeholder="End Time">
                        </div>
                    </div>
                </div>
                
					
					
			
				
				<div>
                    <div class="control-group span6">
                       <div class="controls">
						<button name="get" class="btn btn-success" type="submit">submit</button>
							
                        </div>
                    </div>
					 <div class="control-group span6">
                       <div class="controls">
							 <!-- <button class="btn btn-success">Get</button> -->
							 
                          <!--  <span class="get_button">Get</span> -->
                           
                        </div>
                    </div>
                </div>
				
					
				
					
					
                   
			
				
					
					
					
                    
                    <!-- end -->
                    <!-- commented by kalai -->
    				<!-- <div class="control-group span5">
                        <label>End date :</label>
                        <div class="controls">
                            <input id="enddate" class="span6" type="text" class="" name="enddate" value="" >
                        </div>
                    </div> -->
                   
                    <div style="clear:both">
					</div>
                  
            </form>

            <script>
              //  jQuery(document).ready(function ($) {
               //     $("#add_class").submit(function (e) {
                //        e.preventDefault();
                //        var _this = $(e.target);
               //         var formData = $(this).serialize();
              //          $.ajax({
              //              type: "POST",
             //               url: "edit_class_action.php",
              //              data: formData,
            ////               success: function (html) {
              //                  if (html == "true")
             ////                   {
           //                        $.jGrowl("Class Already Exist", {header: 'Add Class Failed'});
            //                   } else {
            //                        $.jGrowl("Classs Successfully  Added", {header: 'Class Added'});
            //                        var delay = 500;
			//						//alert(html);
            //                        setTimeout(function () {
            //                            window.location = 'class_schedules.php'
           //                         }, delay);
           //                     }
          //                  }
          //              });
         //           });
         //       });
       //     </script>	

        </div>
    </div>
</div>
<!-- /block -->