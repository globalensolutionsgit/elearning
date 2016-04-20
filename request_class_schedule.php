<?php

require_once 'dbcon.php';
$class_schedules_id=$_GET['id1'];
$request_class_date=$_GET['id2'];
$user_id=$_GET['id3'];

// echo $student_allocation_id;

$day=date('l',strtotime($request_class_date));
$array_day = array('sun'=> 'Sunday', 'mon' => 'Monday', 'tue' => 'Tuesday', 'wed' => 'Wednesday','thu' => 'Thursday', 'fri' => 'Friday', 'sat' => 'Saturday');
 $key_day = array_search($day, $array_day); 

// echo $key_day;
// number_of_seats
$query_seats=mysql_query("select * from class_schedules where class_schedules_id='$class_schedules_id'");
$row_seats=mysql_fetch_assoc($query_seats);
$request_teacher_id=$row_seats['teacher_id'];
$total_seats=$row_seats['num_of_seats'];
// echo $total_seats;
$query_seats=mysql_query("select * from student_teacher_allocation where schedule_id='$class_schedules_id'");
$count_row=mysql_num_rows($query_seats);
// echo $count_row;

$remaining_seats=$total_seats-$count_row;
// echo $remaining_seats;
$query_time=mysql_query("select * from class_schedules where class_schedules_id='$class_schedules_id'") or die(mysql_error());
$row_time=mysql_fetch_array($query_time);

$row_starttime=$row_time['start_time'];
$row_endtime=$row_time['end_time'];
$current_date_attenence=date('Y-m-d');

// $date_attenence=date('Y-m-d', strtotime('+6 day', strtotime($current_date_attenence)));            


$query=mysql_query("select * from student_teacher_allocation where schedule_id='$class_schedules_id' and student_id='$user_id' ") or die(mysql_error());

$row=mysql_fetch_array($query);

// $query=mysql_query("select * from request_student_teacher_allocation where schedule_id='$class_schedules_id' and student_id='$user_id' ") or die(mysql_error());


// if($date_attenence>=$row_request ['request_class_date'] && $current_date_attenence<=$row_request ['request_class_date']) {

// // $request_student_id=$row['student_id'];
//  $request_student_allocation_id=$row['student_teacher_id'];
// $request_schedule_id=$row['class_schedules_id'];
// echo $request_schedule_id;
// // echo $request_student_id;
// echo $request_student_allocation_id;
//  echo $user_id;
$query_count_allocation=mysql_query("select * from student_teacher_allocation where schedule_id='$class_schedules_id'") or die(mysql_error());
$row_count_allocation=mysql_num_rows($query_count_allocation);




if($remaining_seats>0) {

	if($row_count_allocation>0) {

mysql_query("delete from request_student_teacher_allocation where request_schedule_id='$class_schedules_id' and request_student_id='$user_id' and request_class_date='$request_class_date' and request_day='$key_day' and request_teacher_id='$request_teacher_id' and request_starttime='$row_starttime' and request_endtime='$row_endtime'");

mysql_query("insert into request_student_teacher_allocation (request_schedule_id,request_student_id,request_cancellation_status,request_class_date,request_day,request_teacher_id,request_starttime,request_endtime) VALUES ('$class_schedules_id','$user_id','1','$request_class_date','$key_day','$request_teacher_id','$row_starttime','$row_endtime')") or die(mysql_error());


$query_delete=mysql_query("select * from request_student_teacher_allocation where request_schedule_id='$class_schedules_id'") or die(mysql_error());

while ($row_delete=mysql_fetch_array($query_delete)) {
	$id_delete=$row_delete['request_class_date'];
	if($current_date_attenence>$id_delete) {
	mysql_query("delete from request_student_teacher_allocation where request_class_date='$id_delete'") or die(mysql_error());	
	}
}



echo '<script language="javascript">';
echo 'alert("Request sent successfully");';
echo 'window.location.href="courses.php";';
echo '</script>';









}

else { 
	echo '<script language="javascript">';
echo 'alert("This schedule is not available now.please choose another schedule");';
echo 'window.location.href="reschedule_week.php";';
echo '</script>';
}
} else { 
echo '<script language="javascript">';
echo 'alert("No seats available,please choose another schedule");';
echo 'window.location.href="reschedule_week.php";';
echo '</script>';

 }



// header("Location:courses.php");

 ?>