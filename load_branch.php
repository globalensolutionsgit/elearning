<?php
include('dbcon.php');
$data = $_POST['code'];
$query = mysql_query("select branch_id,branch_name from branch where region = '$data' ")or die(mysql_error());

$count = mysql_num_rows($query);
if ($count > 0) {
	while($row=mysql_fetch_array($query)){
		echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
	}
} 
?>