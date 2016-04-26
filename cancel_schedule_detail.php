<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';    //include of db config file
$student_teacher_allocation_id_update=$_GET['id1'];
$student_teacher_allocation_date_update=$_GET['id2'];

?>
<!--BANNER START-->
<div class="page-heading">
    <div class="container">
        <h2>My class</h2>
    </div>
</div>
<!--BANNER END-->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <?php
            // if (isset($_GET['class']) and isset($_GET['subject'])){
                // $class=$_GET['class'];
                // $subject=$_GET['subject'];
                // $result = mysql_query("select * from student_teacher_allocation
                                        // JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                        // JOIN class ON class.class_id = student_teacher_allocation.class_id
                                        // JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                        // JOIN users ON users.user_id = student_teacher_allocation.teacher_id
                                        // where class.class_name = '$class' and subject.subject_title = '$subject' where NOT student_teacher_allocation.student_id = '$user_id' ");
            // }
            // else{


            mysql_query("update student_teacher_allocation set cancellation_status='1', cancel_class_date='$student_teacher_allocation_date_update'
            where student_teacher_allocation_id='$student_teacher_allocation_id_update'") or die(mysql_error());




            $course_day1 =  date("l");
            $array1 = array('sun'=> 'Sunday', 'mon' => 'Monday', 'tue' => 'Tuesday', 'wed' => 'Wednesday','thu' => 'Thursday', 'fri' => 'Friday', 'sat' => 'Saturday');
            $key_day1 = array_search($course_day1, $array1);
                $user_id = $_SESSION['user_id'];
                $result = mysql_query("select * from student_teacher_allocation
                                        JOIN class_schedules on class_schedules.class_schedules_id = student_teacher_allocation.schedule_id 
                                        JOIN branch ON branch.branch_id = class_schedules.branch_id
                                        JOIN class ON class.class_id = class_schedules.class_id
                                        JOIN subject ON subject.subject_id = class_schedules.subject_id
                                        JOIN users ON users.user_id = class_schedules.teacher_id where student_teacher_allocation.student_id ='$user_id' and class_schedules.day='$key_day1'");
        ?>
    </div>
    <div class="contant">
    <div class="container">
        <!-- added by siva -->
        <?php
        $date=date('Y-m-d');
        $result_class=mysql_query("select classes from users 
                                        where user_id='$user_id'");
        $rows_array=mysql_fetch_assoc($result_class);
        // echo $rows_array['classes'];
        $rows_string=implode(" ",$rows_array);
        ?>
 <div class="row">
            <div class="span12">
                <div class="featured-courses">
                    <h2>Alternative Classes</h2>
            <?php  
             // echo $user_id;
             $date=date('Y-m-d');
             // echo $date;
              
                   $result_student_branch=mysql_query("select * from users
                                                inner join branch on branch.branch_id=users.city
                                                inner join class on class.class_id=users.classes
                                                where users.user_id='$user_id'") or die(mysql_error());
            $result_student_branch_array=mysql_fetch_array($result_student_branch);
            $result_student_branch_name=$result_student_branch_array['branch_name'];
            $result_student_branch_id=$result_student_branch_array['branch_id'];
            $result_student_class_id=$result_student_branch_array['classes'];
            // echo $result_student_class_id;

            


             // while($row_schedule=mysql_fetch_array($result_schedule)) {

             //    $schedule_id=$row_schedule['class_schedules_id'];
             //    echo $schedule_id;
             // }

            // echo $result_student_branch_name;
            // echo $result_student_branch_id;
            // print_r($result_student_branch_name);
            // print_r($result_student_branch_id);
           
             $date=date('Y-m-d', strtotime('-1 day', strtotime($student_teacher_allocation_date_update)));
              // echo $date;
            for($i=1;$i<=7;$i++) {

            // $course_day =  date("l");
    
            $date=date('Y-m-d', strtotime('+1 day', strtotime($date)));
            // echo $date;
            $day_of_date=strtotime($date);
            // echo date('l',$day_of_date);
            $course_day = date('l',$day_of_date);  
            // echo   $course_day; 
            $array = array('sun'=> 'Sunday', 'mon' => 'Monday', 'tue' => 'Tuesday', 'wed' => 'Wednesday','thu' => 'Thursday', 'fri' => 'Friday', 'sat' => 'Saturday');
            $key_day = array_search($course_day, $array); 
            // echo $key_day;
            

           // $result1 = mysql_query("select * from student_teacher_allocation
           //                              JOIN class_schedules on class_schedules.class_schedules_id = student_teacher_allocation.schedule_id 
           //                              JOIN branch ON branch.branch_id = class_schedules.branch_id
           //                              JOIN class ON class.class_id = class_schedules.class_id
           //                              JOIN subject ON subject.subject_id = class_schedules.subject_id
           //                              JOIN users ON users.user_id = class_schedules.teacher_id 
           //                              where student_teacher_allocation.student_id ='$user_id' and class_schedules.day='$key_day'");
            // INNER JOIN student_teacher_allocation ON student_teacher_allocation.schedule_id=class_schedules.class_schedules_id 
 // $result_schedule = mysql_query("select * from class_schedules
 //                                    LEFT JOIN student_teacher_allocation ON student_teacher_allocation.schedule_id=class_schedules.class_schedules_id
 //                                        and student_teacher_allocation.student_id='$user_id'
 //                                        where student_teacher_allocation.schedule_id is null") or die(mysql_error());


       // while($row_schedule=mysql_fetch_array($result_schedule)) {

       //          $schedule_id=$row_schedule['class_schedules_id'];
                // echo $schedule_id;
             

             $result1 = mysql_query("select * from class_schedules
                                        LEFT JOIN student_teacher_allocation ON student_teacher_allocation.schedule_id=class_schedules.class_schedules_id  and student_teacher_allocation.student_id='$user_id'
                                       INNER JOIN branch ON branch.branch_id = class_schedules.branch_id
                                       INNER JOIN class ON class.class_id = class_schedules.class_id
                                       INNER JOIN subject ON subject.subject_id = class_schedules.subject_id
                                        INNER JOIN users ON users.user_id = class_schedules.teacher_id
                                        where class_schedules.day='$key_day' and class_schedules.branch_id='$result_student_branch_id' and class_schedules.class_id='$result_student_class_id' and student_teacher_allocation.schedule_id is null") or die(mysql_error());


             
 

        if ($result1) {
            while($row2 = mysql_fetch_array($result1)) {
            // $row2 = mysql_fetch_array($result1);
    ?> 
    <div class ="span3">
        <div class="course">
            <div class="thumb">
                <a href="courses-detail.php?id="></a>
            </div>
            <div class="text">
                <div class="header">
                    <h4><?php echo $row2['class_name']; ?></h4> 
                    <div class="rating">
                        <?php echo $row2['subject_title']; ?>
                    </div>
                </div>
                <div class="course-name">
                    <?php echo $course_day; ?>
                    <p class="float_right"><?php echo $date; ?></p>
                </div>
                <div class="time_branch">
                    <?php echo $row2['start_time']; ?>
                    <p class="float_right"> <?php echo $row2['branch_name']; ?> </p>
                </div>
                <div class="course-detail-btn">
                    <ul class="reschedule_holder">
                        <li class="reschedule_detail" disabled>
                            <a href="request_course_detail.php<?php echo '?id1='.$row2['class_schedules_id'].'&id2='.$date; ?>">Detail</a>
                        </li>
                        <li class="reschedule_cancel">
                            <!-- <a href="cancel_schedule_detail.php<?php 
                            // echo '?id1='.$row2['student_teacher_allocation_id'].'&id2='.$date; ?>">Cancel</a> -->
                            <a href="request_class_schedule.php<?php echo '?id1='.$row2['class_schedules_id'].'&id2='.$date.'&id3='.$user_id;?>" data-toggle="modal">Request</a>

                        </li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>
    <?php 
}
        }
        else {
            echo mysql_error();
        } }
    ?>
<!-- </div> -->





                </div>
            </div>
    
    
    
        <div class="row">
            <?php if(isset($_SESSION['user_id'])){ ?>
            
            <?php } ?>
        </div>              
        
            <div class="span3">

        
            </div>
        </div>
       
    </div>

























<!-- 

<script>
$(document).ready(function () {
      
    $("#close_schedule").click(function(){
         $('#myModal').modal('show');
    });
});
</script>
 -->







    
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
