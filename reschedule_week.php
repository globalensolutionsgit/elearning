<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';
$user_id = $_SESSION['user_id'];
?>

<div class="page-heading">
    <div class="container">
        <h2>Reschedule</h2>
    </div>
</div>
<div class="reschedule contant">
<div class="container">
<div class="row">
            <div class="span12">
                <div class="featured-courses">
                    <h2>Week Classes</h2>
            <?php  
             // echo $user_id;
             $date=date('Y-m-d');
             // echo $date;
              $date=date('Y-m-d', strtotime('-1 day', strtotime($date)));
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
            

           $result1 = mysql_query("select * from student_teacher_allocation
                                        JOIN class_schedules on class_schedules.class_schedules_id = student_teacher_allocation.schedule_id 
                                        JOIN branch ON branch.branch_id = class_schedules.branch_id
                                        JOIN class ON class.class_id = class_schedules.class_id
                                        JOIN subject ON subject.subject_id = class_schedules.subject_id
                                        JOIN users ON users.user_id = class_schedules.teacher_id 
                                        where student_teacher_allocation.student_id ='$user_id' and class_schedules.day='$key_day' and student_teacher_allocation.allocation_status='1'");
            // INNER JOIN student_teacher_allocation ON student_teacher_allocation.schedule_id=class_schedules.class_schedules_id

            


              ?>


       

<?php 
// $date=date('Y-m-d');

// for($i=1;$i<=14;$i++) {
    
//    $date=date('Y-m-d', strtotime('+1 day', strtotime($date)));
// echo $date;
// $day_of_date=strtotime($date);
// echo date('l',$day_of_date);        
// }
 ?>

<!-- <div class="row" > -->
    <?php
        if ($result1) {
            while($row2 = mysql_fetch_array($result1)) {
    ?>
    <div class ="span3">
        <div class="course">
            <div class="thumb">
                <a href="courses-detail.php?id="></a>
            </div>
            <div class="text">
                <div class="header">
                                                     <?php               
                                         $class_id=$row2['class_id'];
 $query_class_name=mysql_query("select * from class where class_id='$class_id'"); 
$rows_class_name=mysql_fetch_array($query_class_name);

 ?>
                    <h4><?php echo $rows_class_name['class_name']; ?></h4> 
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
                 <div class="course-detail-btn" value="<?php echo '?id1='.$row2['student_teacher_allocation_id'].'&id2='.$date; ?>">
                    <ul class="reschedule_holder">
                        <li class="reschedule_detail">
                            <a href="alternate_course_detail.php<?php echo '?id1='.$row2['student_teacher_allocation_id'].'&id2='.$date; ?>">Detail</a>
                        </li>
                        <li class="reschedule_cancel">
                            <a href="#reschedule_week_class" value="<?php echo '?id1='.$row2['student_teacher_allocation_id'].'&id2='.$date; ?>" data-toggle="modal" class="pop_up_values">Cancel</a>
                            <!-- <a href="cancel_schedule_detail.php<?php 
                            // echo '?id1='.$row2['student_teacher_allocation_id'].'&id2='.$date; ?>"data-toggle="modal">Cancel</a> -->
                            <!-- <a href="#reschedule_week_class" data-toggle="modal">Cancel</a> -->
<!-- <input type="hidden" id="hidden_value_cancel1" value="<?php
 // echo '?id1='.$row2['student_teacher_allocation_id']; ?>">
<input type="hidden" id="hidden_value_cancel2" value="<?php 
// echo '&id2='.$date; ?>">
 -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php }
        }
        else {
            echo mysql_error();
        } }
    ?>
<!-- </div> -->
<script>
// $('.pop_up_values').click(function(){
//     alert("test");
// var qd = {};
// location.search.substr(1).split("&").forEach(function(item) {(item.split("=")[0] in qd) ? qd[item.split("=")[0]].push(item.split("=")[1]) : qd[item.split("=")[0]] = [item.split("=")[1]]})
// alert(qd);

// });
// </script>



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


<!-- popup for delete -->
<div class="modal fade" id="reschedule_week_class" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">Are you really want to cancel this schedule</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a href="cancel_schedule_detail.php" id="pop_up_querystring"> 
                <button type="button" class="btn btn-primary">Yes</button> 
            </a>
            </div>
        </div>
    </div>
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
    <!--FOLLOW US SECTION END-->

<?php require_once 'footer.php'; ?>
