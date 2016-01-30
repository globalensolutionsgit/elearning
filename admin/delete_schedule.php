<?php
include('dbcon.php');
if (isset($_POST['delete_schedule'])){
$id=$_POST['schedule_id'];
echo $id;
mysql_query("DELETE FROM teacher_class_subject_branch where teacher_class_subject_branch_id='$id'");
header("location: class_schedules.php");
}
?>