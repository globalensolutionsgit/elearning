<?php
include('dbcon.php');
if (isset($_POST['delete_schedule'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM class_schedules where class_schedules_id='$id[$i]'");
}
header("location: view_schedules.php");
}
?>