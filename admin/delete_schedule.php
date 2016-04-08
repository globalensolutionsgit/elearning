<?php
include('dbcon.php');
if (isset($_POST['delete_schedule'])){
$id=$_POST['schedule_id'];
echo $id;
mysql_query("DELETE FROM class_schedules where class_schedules_id='$id'");
header("location: view_schedules.php");
}
?>