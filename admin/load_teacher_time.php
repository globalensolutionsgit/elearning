<?php
include('dbcon.php');
$data = $_POST['code'];
$query = mysql_query("select user_id,firstname from users where city = '$data' and user_type = 'teacher' ")or die(mysql_error());

$count = mysql_num_rows($query);
if ($count > 0) {
	while($row=mysql_fetch_array($query)){
		echo '<option value="'.$row['user_id'].'">'.$row['firstname'].'</option>';
	}
}
else{
	echo 'nil';
}
?>
