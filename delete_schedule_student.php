<?php
require_once 'dbcon.php';
$student_id=$_GET['id'];
$schedule_id=$_GET['id2'];

// mysql_query("delete from student_teacher_allocation where schedule_id='$schedule_id' and student_id='$student_id'");



echo "<script> alert('Your schedule was deleted successfully')</script>";
header("Location:courses.php");
 ?>
 
 
 
