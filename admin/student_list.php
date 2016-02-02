<?php
require_once 'dbcon.php';
// Array
// (
//     [branch] => 7
//     [user] => 38
//     [classs] => 6-38
//     [subject] => 5
//     [startdate] => 18-02-2016
//     [starttime] => 17:00
//     [endtime] => 17:00
//     [days] => Array
//         (
//             [0] => wed
//             [1] => thu
//             [2] => fri
//         )
//
// )
$teacher_id = $_POST['user'];
$branch_id = $_POST['branch'];
$classs = explode('-',$_POST['classs']);
$class_id = $classs[0];
$subject_id = $_POST['subject'];
$check_query = mysql_query("select * from student_teacher_allocation where  branch_id='$branch_id' and class_id = '$class_id' and teacher_id = '$teacher_id' and subject_id = '$subject_id'");

if(mysql_num_rows($check_query)<=0){
    $query = mysql_query("select * from users JOIN branch ON branch.branch_id = '$branch_id' JOIN class ON class.class_id = '$class_id' JOIN subject ON subject.subject_id = '$subject_id' JOIN student_requests ON student_requests.student_id = users.user_id where student_requests.branch_id = '$branch_id' and student_requests.class_id = '$class_id' and student_requests.subject_id = '$subject_id'");
    $count = mysql_num_rows($query);
    if ($count > 0) {
        while($row=mysql_fetch_array($query)){
            echo "<tr><td><input type='checkbox' value='".$row['user_id']."'class='student_list_checkbox' name='student[]'></td><td>".$row['firstname']."</td><td>".$row['branch_name']."</td><td>".$row['class_name']."</td><td>".$row['subject_title']."</td></tr>";

        }
    }else{
        echo 'nil';
    }
}else{
    echo "already";//already allocated
}
 ?>
