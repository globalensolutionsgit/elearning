<?php include('session.php'); ?>
<?php require_once 'header_innerpage.php'; ?>
<?php
// print_r($_POST['student']);
if(isset($_POST['submit'])){
    $branch_id = $_POST['branch'];
    $class_id = $_POST['classs'];
    $subject_id = $_POST['subject'];
    //commented by kalai
    // $region = $_POST['region'];
    $teacher_id = $_POST['teacher'];
    $start_date = date("Y-m-d");
    // $start_date=date('Y-m-d',  strtotime($_POST['start_d']));
    // $start_date = $_POST['class_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];



    if(!empty($_POST['student'])) {
        foreach($_POST['student'] as $stu_id) {
                //commented by kalai
                // mysql_query("insert into class_attend_students (region,branch_id,class_id,subject_id,student_id,teacher_id,class_date) values ('$region','$branch_id','$class_id','$subject_id','$stu_id','$teacher_id','$start_date') ")or die(mysql_error());
                mysql_query("insert into class_attend_students (branch_id,class_id,subject_id,student_id,teacher_id,class_date,class_starttime,class_endtime) values ('$branch_id','$class_id','$subject_id','$stu_id','$teacher_id','$start_date','$start_time','$end_time') ")or die(mysql_error());
                // mysql_query("update student_teacher_allocation set status = '1' where student_id='$stu_id' and start_date='$start_date' ")or die(mysql_error());                

        }
    }
    //commented by kalai
    // if(!empty($_POST['temp'])) {
    //     foreach($_POST['temp'] as $temp_id) {
    //         //commented by kalai
    //         // mysql_query("insert into temp_stu_attend_class (region,branch_id,class_id,subject_id,temp_stu_name,teacher_id,class_date) values ('$region','$branch_id','$class_id','$subject_id','$temp_id','$teacher_id','$start_date') ")or die(mysql_error());
    //         mysql_query("insert into temp_stu_attend_class (branch_id,class_id,subject_id,temp_stu_name,teacher_id,class_date,class_starttime,class_endtime) values ('$branch_id','$class_id','$subject_id','$temp_id','$teacher_id','$start_date','$start_time','$end_time') ")or die(mysql_error());
    //     }
    // }
    if(!empty($_POST['temp_student_final'])) {
        foreach($_POST['temp_student_final'] as $temp_id) {
            $tempdata = explode(",", $temp_id);
            $temp_branch=$tempdata[0];
            $temp_student=$tempdata[1];

            // $id3=$_POST['previousbranch']; 
            //  $id4=implode("",$id3);

            // print_r ($id3);          //commented by kalai
            // mysql_query("insert into temp_stu_attend_class (region,branch_id,class_id,subject_id,temp_stu_name,teacher_id,class_date) values ('$region','$branch_id','$class_id','$subject_id','$temp_id','$teacher_id','$start_date') ")or die(mysql_error());
            mysql_query("insert into temp_stu_attend_class (previous_branch_id,branch_id,class_id,subject_id,temp_stu_name,teacher_id,class_date,class_starttime,class_endtime) values ('$temp_branch','$branch_id','$class_id','$subject_id','$temp_student','$teacher_id','$start_date','$start_time','$end_time') ")or die(mysql_error());
        }
    }
}

 ?>
    <!--HEADER END-->
    <!--BANNER START-->
<div class="page-heading">
   	<div class="container">
        <h2> Today Class </h2>
        <p></p>
    </div>
</div>
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container" style="height: 39%;">
        <div class="event-page">
        <!--EVENT START-->
           <div class="row events">
                <?php
                    $user_id=$_SESSION['user_id'];
                    $today = substr(strtolower(date('l')),0,3);
                    $query = mysql_query("select * from class_schedules 
                                           INNER JOIN student_teacher_allocation ON  student_teacher_allocation.schedule_id = class_schedules.class_schedules_id
                                           where class_schedules.teacher_id = '$user_id' and class_schedules.day = '$today'
                                           group by student_teacher_allocation.schedule_id")or die(mysql_error());
                    $count = mysql_num_rows($query);
                    if ($count > 0) {
                    while ($row = mysql_fetch_array($query)) {
                            $id = $row['student_teacher_allocation_id'];
                ?>
                <div class="class_details">  
                    <div class="span12">
                        <div class="text">
                        <!--EVENT HEADER START-->
                        <!--EVENT VANUE START-->
                            <div class="event-vanue">
                                <form  method="post" name="submit_attendance">
                                <!-- <form method="post" name="submit_attendance" action="submit_attendance.php"> -->
                                <!-- <input type="hidden" name="region" value="<?php echo $row['region']; ?>"/> -->
                                    <input type="hidden" name="branch" value="<?php echo $row['branch_id']; ?>"/>
                                    <input type="hidden" name="classs" value="<?php echo $row['class_id']; ?>"/>
                                    <input type="hidden" name="subject" value="<?php echo $row['subject_id']; ?>"/>
                                    <input type="hidden" name="teacher" value="<?php echo $user_id; ?>"/>
                                    <!-- <input type="hidden" name="class_date" value="<?php //echo $row['start_date']; ?>"/> -->
                                    <!-- newly added by kalai -->
                                    <input type="hidden" name="start_time" value="<?php echo $row['start_time']; ?>"/>
                                    <input type="hidden" name="end_time" value="<?php echo $row['end_time']; ?>"/>
                                    <table>
                                        <tr>
                                            <td><p class="color">Class</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i> <?php
                                            $class_idd = $row['class_id'];
                                            $class_query = mysql_query("select * from class where class_id ='$class_idd'")or die(mysql_error());
                                            $class_row = mysql_fetch_assoc($class_query);
                                            echo $class_row['class_name'];
                                            ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Subject</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i> <?php

                                            $subject_idd = $row['subject_id'];
                                            $subject_query = mysql_query("select * from subject where subject_id ='$subject_idd'")or die(mysql_error());
                                            $subject_row = mysql_fetch_assoc($subject_query);
                                            echo $subject_row['subject_title'];
                                            ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Venue:</p></td>
                                            <td><a><?php
                                            $branch_idd = $row['branch_id'];
                                            $branch_query = mysql_query("select * from branch where branch_id ='$branch_idd'")or die(mysql_error());
                                            $branch_row = mysql_fetch_assoc($branch_query);
                                            echo $branch_row['branch_name'].'  -  '.$branch_row['branch_address'].'  - Phone number :'.$branch_row['branch_phone_number'];
                                            ?></a></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span class="view_student_list green_button">View Student List</span></td>
                                        </tr>
                                    </table>
                                    <table class="student_list_front" style="display:none">
                                        <tr>
                                            <td>S.No</td><td>Name</td><td>Attendance</td>
                                        </tr>
                                        <?php
                                        $sche_id = $row['class_schedules_id'];
                                        $query_list = mysql_query("select * from student_teacher_allocation JOIN users ON users.user_id = student_teacher_allocation.student_id where schedule_id = '$sche_id'")or die(mysql_error());
                                        $count1 = mysql_num_rows($query_list);
                                        $counter = 0;
                                        if ($count1 > 0) {
                                        while ($row_1 = mysql_fetch_array($query_list)) {
                                                $id = $row_1 ['student_teacher_allocation_id'];
                                        ?>
                                        <tr>
                                            <td><?php echo ++$counter; ?><input type='hidden' id="student_count" value="<?php echo $counter; ?>"></td>
                                            <td><?php echo $row_1 ['firstname'];  ?></td>
                                            <td><input type="checkbox" name="student[]" value="<?php echo $row_1 ['student_id'];  ?>" /></td>
                                        </tr>
                                        <tr class="add_temp">
                                        <td>
                                        </td>
                                        </tr>
                                        <?php
                                            }
                                            }
                                        ?>
                                    </table>
                                    <div class="menus" style="display:none">
                        <span class="add_student green_button">Add student</span><span class="student_remove green_button">remove</span>
                        <input type="submit" name="submit" value="submit" class="green_button click_submit" >
                    </div>
                    
                                </form>
                            </div>
                        </div> 
                    </div>   
                    <div class="clearfix"></div>
                     <div class="tempstudent_field">
                        <select name="previousbranch[]"  class="previousbranch" required>
                            <option value="0">Select Branch</option>
                            <option value="0">None</option>
                             <?php
                            $query_branch = mysql_query("select * from branch");
                            while ($row_branch = mysql_fetch_array($query_branch)) {
                                ?>
                                <option value="<?php echo $row_branch['branch_id']; ?>"><?php echo $row_branch['branch_name']; ?></option>
                            <?php } ?>

                        </select>
                        <input type="text" name="temp[]" value="" class="temp_text" placeholder="enter name">
                    </div>
                        
                    <div class="tempstudent_data">
                        <ul>

                            <?php
                                $query_temp = mysql_query("select * from users where user_type = 'student'");
                                while ($row_temp = mysql_fetch_array($query_temp)) {
                            ?>
                            <li><?php echo $row_temp['firstname']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                    
      
                    <div class="clearfix"></div>
                </div>
                <?php
                    }
                    } 
                    else {
                        echo "<div><h2 class='text-center'>You dont have class for today<h2></div>";
                    }
                ?>
            </div>
        <!--EVENT END-->
        </div>
        <div class="clearfix"></div>
    </div>





                <!--FOLLOW US SECTION START-->
        <section class="follow-us">
        	<div class="container">
            	<div class="row">
                	<div class="span4">
                    	<div class="follow">
                        	<a href="#">
                                <i class="fa fa-facebook"></i>
                                <div class="text">
                                    <h4>Follow us on Facebook</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="span4">
                    	<div class="follow">
                        	<a href="#">
                                <i class="fa fa-google"></i>
                                <div class="text">
                                    <h4>Follow us on Google Plus</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="span4">
                    	<div class="follow">
                        	<a href="#">
                                <i class="fa fa-linkedin"></i>
                                <div class="text">
                                    <h4>Follow us on Linkedin</h4>
                                    <p>Faucibus toroot menuts</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FOLLOW US SECTION END-->
    </div>
  <?php require_once 'footer.php'; ?>
