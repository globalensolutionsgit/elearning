<?php
require_once 'dbcon.php';
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$update_seats=$_POST['edit_seats'];
// echo $update_seats;

if(isset($_POST['class_schedule_id'])){
	$sche = $_POST['class_schedule_id'];
	mysql_query("delete from student_teacher_allocation where schedule_id='$sche'");
	mysql_query("update class_schedules set num_of_seats='$update_seats' where class_schedules_id='$sche'")or die(mysql_error());

	if(!empty($_POST['students'])) {
		foreach($_POST['students'] as $stu_id) {
			mysql_query("insert into student_teacher_allocation (student_id,schedule_id,allocation_status) values ('$stu_id','$sche','1') ")or die(mysql_error());
			
		}
	}
	header("Location:view_schedules.php");
}



 ?>
 
 
