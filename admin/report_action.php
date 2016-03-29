<?php
include('dbcon.php');
// print_r("enter");
$user = $_POST['user'];
// $startdate = $_POST['startdate'];
$branch = $_POST['branch'];
// $region = $_POST['region'];
// $class =$_POST['classs'];
// $class_and_user = explode('-', $class);
// $class_id = $class_and_user[0];
$report_month1 = $_POST['report_month'];
$report_month=implode(" ",$report_month1);
$report_year = trim($_POST['report_year']);
// $report_date = $report_month . '-' . $_POST['report_year'];
$report_date =  $report_year. '-' . $report_month . '-' . '%';


// Regular student report
$query = mysql_query("select * from class_attend_students
                                                LEFT JOIN branch ON branch.branch_id = class_attend_students.branch_id
                                                LEFT JOIN class ON class.class_id = class_attend_students.class_id
                                                LEFT JOIN subject ON subject.subject_id = class_attend_students.subject_id
                                                LEFT JOIN users ON users.user_id = class_attend_students.student_id
                                                where class_attend_students.teacher_id='$user' and class_attend_students.branch_id ='$branch' and class_attend_students.class_date LIKE '$report_date' ")or die(mysql_error());
// $query = mysql_query("select * from class_attend_students where class_attend_students.class_date BETWEEN '$startdate' and '$enddate' ")or die(mysql_error());
$counts = mysql_num_rows($query);

// $timestamp = strtotime('$row['class_date']');

// $day = date('D', $timestamp);


while ($row = mysql_fetch_array($query)) {
	// $day1=$row['class_date'];
	// $day2 = strtotime('$day1');
	// $day = date('D', $day2);
	$day1=$row['class_date'];
 $day=date("D", strtotime($day1));
// 	$day = "sun";

echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}



// Temporary student report
$query1 = mysql_query("select * from temp_stu_attend_class
                                             LEFT JOIN branch ON branch.branch_id = temp_stu_attend_class.branch_id
                                             LEFT JOIN class ON class.class_id = temp_stu_attend_class.class_id
                                             LEFT JOIN subject ON subject.subject_id = temp_stu_attend_class.subject_id
                                             where temp_stu_attend_class.teacher_id='$user' and temp_stu_attend_class.branch_id ='$branch'  and temp_stu_attend_class.class_date LIKE '$report_date' ")or die(mysql_error());
while ($row = mysql_fetch_array($query1)) {
		$day1=$row['class_date'];
 $day=date("D", strtotime($day1));
echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}
?>
