<?php
include('dbcon.php');
$user = $_POST['user'];
$branch = $_POST['branch'];
$subject = $_POST['subject'];
$class = $_POST['class'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$short_desc = $_POST['short_desc'];
$allowed = $_POST['allowed'];
$count = $_POST['count'];
$query = mysql_query("select * from teacher_class_subject_branch where user_id = '$user' and branch_id = '$branch' and subject_id = '$subject' and class_id = '$class' and start_date = '$startdate' and end_date = '$enddate' ")or die(mysql_error());
$count = mysql_num_rows($query);
if ($count > 0) {
    echo "true";
} else {

    mysql_query("insert into teacher_class_subject_branch (user_id,branch_id,subject_id,class_id,start_date,end_date,short_desc,allowed_student,current_student_count) values('$user','$branch','$subject','$class','$startdate','$enddate','$short_desc','$allowed','$count')")or die(mysql_error());
}
?>