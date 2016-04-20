<?php
include('dbcon.php');
if (isset($_POST['delete_user'])){
$id=$_POST['selector'];
$N = count($id);
// print_r($id);
for($i=0; $i < $N; $i++)
{
	$result = mysql_query("DELETE FROM users where user_id='$id[$i]'");
	$result_1= mysql_query("DELETE FROM user_preference where usersId='$id[$i]'");
 }
 header("location: admin_user.php?user_type=admin");
}
?>