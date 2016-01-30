<?php include('dbcon.php');
$get_id = $_GET['id'];
$user_id = $_GET['user_id'];
echo $get_id ;
echo $user_id ;
mysql_query("update teacher_class_subject_branch set current_student_count = current_student_count-1 where teacher_class_subject_branch_id = '$get_id' ")or die(mysql_error());
mysql_query("delete from student_class_subject_branch where user_id = '$user_id'");
header('Location:my_enroll.php');
 ?>
