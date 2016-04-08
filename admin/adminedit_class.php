<?php include('header.php'); ?>

<?php
if(isset($_GET['classid']) && isset($_GET['branch_id']) && isset($_GET['sche_id'])){
    $edit_class_id = $_GET['classid'];
    $edit_branch_id = $_GET['branch_id'];
    $edit_schedules_id = $_GET['sche_id'];
}else{
    header('Location:404.php');
}
// echo "<pre>";
// print_r(mysql_fetch_array($query2));
// echo "</pre>";
?>
<div class="container-fluid"> 
<div class="row-fluid"> 
<?php include('sidebar_dashboard.php'); ?>

<div class="span9"> 
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left">
            <h4><i class="icon-plus-sign"></i> Edit Schedule</h4>
        </div>
    </div>
    
    <div class="block-content collapse in">
        <div class="span12">
		<?php 
            $query = mysql_query("select * from class_schedules 
                                INNER JOIN branch ON branch.branch_id=class_schedules.branch_id
                                INNER JOIN class ON class.class_id=class_schedules.class_id
                                INNER JOIN subject ON subject.subject_id=class_schedules.subject_id
                                INNER JOIN users ON users.user_id=class_schedules.teacher_id
                                where class_schedules.class_id = '$edit_class_id' and class_schedules.branch_id = '$edit_branch_id' and class_schedules.class_schedules_id='$edit_schedules_id'")or die(mysql_error());
    		$row = mysql_fetch_array($query); 
    		// $branch_selected=$row1['branch_id'];
    		// $row2=mysql_query("SELECT b.branch_name FROM branch AS b 
      //           INNER JOIN student_teacher_allocation AS u ON b.branch_id=$branch_selected");
    		// $row3=mysql_fetch_array($row2);
	    ?>
        <form method="post" id="add_class">
			<div>
                <div class="control-group span6"> <!-- branch -->
                    <label>Branch</label>
                    <div class="controls">
		      	        <select name="branch"  class="branches_time" disabled>
                               	<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
                                <?php
                                $query1 = mysql_query("select * from branch");
                                while ($row1 = mysql_fetch_array($query1)) {
                                ?>
                                <option value="<?php echo $row1['branch_id']; ?>"><?php echo $row1['branch_name']; ?></option>
                                <?php $v1=$value;} ?>
                        </select>
                    </div>
                </div>
    			<div class="control-group span6"> <!-- teacher -->
                    <label>Teacher</label>
                    <div class="controls">
                        <select name="user"  class="teacher" disabled>
				            <option value="<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></option>
                            <?php
                            $query2 = mysql_query("select * from users 
                                                 where user_type = 'teacher'");
                            while ($row2 = mysql_fetch_array($query2)) {
                            ?>
                            <option value="<?php echo $row2['user_id']; ?>"><?php echo $row2['username']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div>  <!-- class and subject -->
                <div class="control-group span6"> <!-- subject -->
                    <label>Subject</label>
                    <div class="controls">
                        <select name ="subject" class="subjects" disabled>
                            <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_title']; ?></option>
    				    	<?php
    						$query3 = mysql_query("select * from subject");
                            while ($row3 = mysql_fetch_array($query3)) {
    		      			?>
    						<option value="<?php echo $row3['subject_id']; ?>"><?php echo $row3['subject_title']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="control-group span6"> <!-- sunday time -->
                        <div class="controls">
                            <label>Day</label>
                            <select name ="days" class="days" disabled>
                                <option value="sun" <?php if($row['day']=='sun') echo 'selected';?>> Sunday</option>
                                <option value="sun" <?php if($row['day']=='mon') echo 'selected';?>> Monday</option>
                                <option value="sun" <?php if($row['day']=='tue') echo 'selected';?>> Tuesday</option>
                                <option value="sun" <?php if($row['day']=='wed') echo 'selected';?>> Wednesday</option>
                                <option value="sun" <?php if($row['day']=='thu') echo 'selected';?>> Thursday</option>
                                <option value="sun" <?php if($row['day']=='fri') echo 'selected';?>> Friday</option>
                                <option value="sun" <?php if($row['day']=='sat') echo 'selected';?>> Saturday</option>
                                
                           </select>



                            <!-- <div class="input_schedule">
                                <input type="checkbox" name="days[]" id="days" value="sun" <?php if($row['days']=='sun') echo 'checked'; ?> >Sunday
                            </div> -->
                            
                        </div>    
                    </div>






                <!-- <div class="control-group span6"> <!-- class -->
                    <!-- <label>Class :</label>
                    <div class="controls">
                        <select name = "classs" class="classs" required> -->
                            <?php
                            // $class_selected=$row1['class_id'];
                            // $row6=mysql_query("SELECT u.class_name FROM class AS u INNER JOIN student_teacher_allocation AS s ON u.class_id=$class_selected");
                            // $row7=mysql_fetch_array($row6); 
                            ?>
                          <!--   <option value="<?php 
                          // echo $row1['class_id']; ?>"><?php 
                          // echo $row7['class_name']; ?></option>
                        </select>
                    </div>
                </div> --> 
            </div>

				<!-- newly added by kalai -- >
				<!-- newly started by siva -->
				<div> <!-- startdate and sunday time -->
                    <div class="control-group span6"> <!-- sunday time -->
                        <div class="controls">
                            <label>Time</label>
                            <input id="starttime" class="span6" type="text" class="" name="starttime[]" value="<?php echo $row['start_time'] ?>" placeholder="Start Time" disabled>
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime[]" value="<?php echo $row['end_time'] ?>" placeholder="End Time" disabled> 
                        </div>    
                    </div>
                    <div class="control-group span6"> <!-- sunday time -->
                        <div class="controls">
                           
                        </div>    
                    </div>




                </div>

<?php

$day_query=mysql_query("select * from class_schedules 
                        where class_schedules_id='$edit_schedules_id'") or die(mysql_error());

$row_day=mysql_fetch_array($day_query);

$edit_schedules_day=$row_day['day'];


?>
           




				<div style="clear:both">
				</div>
				
				
                
					
					
			
				
				<div>
                    <div class="control-group span6">
                       <div class="controls">

						<!-- <button name="get" class="btn btn-success" type="submit">submit</button> -->
							
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

             <div class="control-group span9">
               <form method="post" id="edit_class_allocate" action="insert_student.php">
                   <input type="hidden" name="class_schedule_id" value="<?php echo $_GET['sche_id']; ?>" />
                   <div id="student_list control-group span12">

               <div class="available_seats" >
                       
                        <?php 
 $num_of_seats_row=mysql_query("select num_of_seats from class_schedules where class_schedules_id='$edit_schedules_id'");
 $num_of_seats_array=mysql_fetch_assoc($num_of_seats_row);
 $edit_num_of_seats=implode("", $num_of_seats_array);
?>
NUMBER OF SEATS : <?php 
echo $edit_num_of_seats ?>
 <input type="hidden" id="edit_num_of_seats" name="seats" value="<?php echo $edit_num_of_seats; ?>" />
</div>  
                        <table class="schdule_student_list">
                            <tr><th><input type='checkbox' value='checkall' class="checkall" name='check_all'>all</th><th>Student Name</th><th>Phone number</th><th>Email</th></tr>
                            <?php
                                $query4 = mysql_query("select * from users 
                                    inner join branch on branch.branch_id = users.city 
                                    inner join class on class.class_id = users.classes
                                     inner join student_teacher_allocation on  student_teacher_allocation.student_id=users.user_id
                                     where users.user_type='student' and users.city='$branch_id' and users.classes='$class_id' and student_teacher_allocation.schedule_id='$edit_schedules_id'");
                                // echo $edit_schedules_day;
                                $count = mysql_num_rows($query4);
                                if ($count > 0) {

// $table_query=mysql_query("select student_id from student_teacher_allocation 
//             INNER JOIN class_schedules ON class_schedules.class_schedules_id=student_teacher_allocation.schedule_id where student_teacher_allocation.schedule_id='$edit_schedules_id'") or die(mysql_error());

// while ($table_row = mysql_fetch_array($table_query)) {
//     $table_student_id = $table_row['student_id'];
// };




                                    while($row4=mysql_fetch_array($query4)){
                                        $row4_clone=$row4['user_id'];
                                        echo "<tr><td><input type='checkbox' value='".$row4['user_id']."' class='student_list_checkbox' name='students[]' checked></td><td>".$row4['firstname']."</td><td>".$row4['phone_number']."</td><td>".$row4['email']."</td></tr>";
                                    
                                    // if( $row4_clone=='139') {
                                    //     echo "<script>$('.student_list_checkbox').css('checked','true');</script>";
                                    //     }

                                    }
                                }else{
                                    echo '';
                                }
                       

                                    


 


                                $query5 = mysql_query("select * from users 
                                    inner join branch on branch.branch_id = users.city 
                                    inner join class on class.class_id = users.classes
                                    left join student_teacher_allocation on users.user_id=student_teacher_allocation.student_id and student_teacher_allocation.schedule_id='$edit_schedules_id'
                                    where users.user_type='student' and users.city='$branch_id' and users.classes='$class_id' and student_teacher_allocation.student_id is null");
                                 $count1 = mysql_num_rows($query5);
                                if ($count1 > 0) {
                                    while($row5=mysql_fetch_array($query5)){
                                        $row5_clone=$row5['user_id'];
                                        echo "<tr><td><input type='checkbox' value='".$row5['user_id']."' class='student_list_checkbox' name='students[]'></td><td>".$row5['firstname']."</td><td>".$row5['phone_number']."</td><td>".$row5['email']."</td></tr>";
                                    
                                    // if( $row4_clone=='139') {
                                    //     echo "<script>$('.student_list_checkbox').css('checked','true');</script>";
                                    //     }

                                    }
                                }else{
                                    echo '';
                                }
                            ?>
                        </table>
                    </div>
                    <button name="get" class="btn btn-success" type="submit">submit</button>
                </form>
            </div> <!-- span -->


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

</div>
</div>
</div>