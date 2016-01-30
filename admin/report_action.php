<?php
include('dbcon.php');
$user = $_POST['user'];
$startdate = $_POST['startdate'];
$branch = $_POST['branch'];
$region = $_POST['region'];
$class =$_POST['classs'];
$class_and_user = explode('-', $class);
$class_id = $class_and_user[0];
$subject = $_POST['subject'];
$query = mysql_query("select * from class_attend_students
                                                LEFT JOIN branch ON branch.branch_id = class_attend_students.branch_id
                                                LEFT JOIN class ON class.class_id = class_attend_students.class_id
                                                LEFT JOIN subject ON subject.subject_id = class_attend_students.subject_id
                                                LEFT JOIN users ON users.user_id = class_attend_students.student_id
                                                where class_attend_students.teacher_id='$user' and class_attend_students.class_date = '$startdate' and class_attend_students.branch_id ='$branch' and class_attend_students.region = '$region' and class_attend_students.class_id='$class' and class_attend_students.subject_id='$subject' ")or die(mysql_error());
$count = mysql_num_rows($query);
 while ($row = mysql_fetch_array($query)) {
    echo '<tr><td>'.$row['firstname'].'</td><td>'.$row['class_name'].'</td><td>'.$row['subject_title'].'</td><td>'.substr($row['class_date'],0,16).'</td><td>Permanent</td></tr>';
 }
 $query1 = mysql_query("select * from temp_stu_attend_class
                                                 LEFT JOIN branch ON branch.branch_id = temp_stu_attend_class.branch_id
                                                 LEFT JOIN class ON class.class_id = temp_stu_attend_class.class_id
                                                 LEFT JOIN subject ON subject.subject_id = temp_stu_attend_class.subject_id
                                                 where temp_stu_attend_class.teacher_id='$user' and temp_stu_attend_class.class_date = '$startdate' and temp_stu_attend_class.branch_id ='$branch' and temp_stu_attend_class.region = '$region' and temp_stu_attend_class.class_id='$class' and temp_stu_attend_class.subject_id='$subject' ")or die(mysql_error());
 while ($row = mysql_fetch_array($query1)) {
    echo '<tr><td>'.$row['temp_stu_name'].'</td><td>'.$row['class_name'].'</td><td>'.$row['subject_title'].'</td><td>'.substr($row['class_date'],0,16).'</td><td>Tempporary</td></tr>';
 }
?>
