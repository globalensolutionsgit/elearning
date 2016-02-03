<?php
include('dbcon.php');
$data = $_POST['code'];
$class_and_user = explode('-', $data);
$user_id = $class_and_user[1];
$class_id = $class_and_user[0];
//commented by kalai
// $query = mysql_query("select * from subject left join user_preference on user_preference.user_subjectId = subject.subject_id where user_preference.usersId = '$user_id' and user_preference.user_classId = '$class_id'") or die(mysql_error());
$query = mysql_query("select * from subject where class_id = '$data'") or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0) {
	while($row=mysql_fetch_array($query)){
		echo '<option value="'.$row['subject_id'].'">'.$row['subject_title'].'</option>';
	}
}else{
    echo 'nil';
}
?>
