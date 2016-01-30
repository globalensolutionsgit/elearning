<?php
include('dbcon.php');
if (isset($_POST['delete_branch'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM branch where branch_id='$id[$i]'");
}
header("location: branch.php");
}
?>