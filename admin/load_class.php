<?php
include('dbcon.php');
$data = $_POST['code'];
$query = mysql_query("select * from user_preference JOIN class ON class.class_id = user_preference.user_classId  where user_preference.usersId = '$data'  group by class_id ") or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0) {
	while($row=mysql_fetch_array($query)){
		echo '<option value="'.$row['class_id'].'-'.$data.'">'.$row['class_name'].'</option>';
	}
}else{
	echo 'nil';
}
?>
