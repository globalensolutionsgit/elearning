<?php
include('dbcon.php');
$id = $_POST['get_id'];
$user = $_POST['user'];
$branch = $_POST['branch'];
$subject = $_POST['subject'];
$class = $_POST['class'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$short_desc = $_POST['short_desc'];
$allowed = $_POST['allowed'];
$count = $_POST['count'];
$status = $_POST['status'];
mysql_query("update teacher_class_subject_branch set user_id ='$user',branch_id = '$branch' ,subject_id = '$subject',class_id = '$class',start_date='$startdate',end_date= '$enddate',short_desc='$short_desc',allowed_student='$allowed',current_student_count='$count',status='$status' where teacher_class_subject_branch_id = '$id'")or die(mysql_error());
//echo "update teacher_class_subject_branch set user_id ='$user',branch_id = '$branch' ,subject_id = '$subject',class_id = '$class',start_date='$startdate',end_date= '$enddate',short_desc='$short_desc',allowed_student='$allowed',current_student_count='$count',status='$status' where teacher_class_subject_branch = '$id'"
?>