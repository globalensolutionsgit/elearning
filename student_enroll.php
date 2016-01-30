<?php
include('dbcon.php');
$data = $_POST['code'];
$user_id = $_POST['user_id'];
mysql_query("update teacher_class_subject_branch set current_student_count = current_student_count+1 where teacher_class_subject_branch_id = '$data' ")or die(mysql_error());
mysql_query("insert into student_class_subject_branch (teacher_class_subject_branch_id,user_id)values('$data','$user_id')");
echo 'added';
//$count = mysql_num_rows($query);
//if ($count > 0) {
	//while($row=mysql_fetch_array($query)){
		//echo '<option value="'.$row['branch_id'].'">'.$row['branch_name'].'</option>';
	//}
//} 
?>