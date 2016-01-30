<?php
require_once 'dbcon.php';
// Array
// (
//     [region] => NES
//     [branch] => 7
//     [clas_id] => 6
//     [subject_id] => 4
//     [teacher_id] => 38
//     [s_date] => 2016-01-13 21:00
//     [e_date] => 2016-01-13 22:00
// )
$branch_id = $_POST['branch'];
$class_id = $_POST['clas_id'];
$subject_id = $_POST['subject_id'];
$teacher_id = $_POST['teacher_id'];
$start_date = $_POST['s_date'];
$end_date = $_POST['e_date'];
$query = mysql_query("select * from users LEFT JOIN branch ON branch.branch_id = '$branch_id' LEFT JOIN class ON class.class_id = '$class_id' LEFT JOIN subject ON subject.subject_id = '$subject_id' LEFT JOIN student_requests ON student_requests.student_id = users.user_id where student_requests.branch_id = '$branch_id' and student_requests.class_id = '$class_id' and student_requests.subject_id = '$subject_id'");
$count = mysql_num_rows($query);
if ($count > 0) {
    while($row=mysql_fetch_array($query)){
        echo "<tr><td><input type='checkbox' value='".$row['user_id']."'class='student_list_checkbox' name='student[]'></td><td>".$row['firstname']."</td><td>".$row['branch_name']."</td><td>".$row['class_name']."</td><td>".$row['subject_title']."</td></tr>";

    }
}else{
    echo 'nil';
}

 ?>
