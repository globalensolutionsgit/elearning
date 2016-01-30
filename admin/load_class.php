<?php
include('dbcon.php');
$data = $_POST['code'];
$query = mysql_query("select * from class where class_id = (select DISTINCT user_classId from user_preference where usersId = '$data')") or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0) {
	while($row=mysql_fetch_array($query)){
		echo '<option value="'.$row['class_id'].'-'.$data.'">'.$row['class_name'].'</option>';
	}
}else{
	echo 'nil';
}
?>
