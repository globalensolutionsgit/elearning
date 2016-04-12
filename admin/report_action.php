<?php
include('dbcon.php');
 include('header.php'); 
 include('session.php');
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
?>


<html><body>
<?php include('navbar.php'); 

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


echo '<div class="container-fluid">';
echo '<div class="row-fluid">';
            
include('sidebar_dashboard.php'); 

echo '<div class="span1">';

echo '</div>';

echo '<div class="print_area print_align span8">';
echo "<div id='tue_cation'>Tuesday</div>";
echo '<table border="2px" class="report_table" id="report_table_tue"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';
while ($row = mysql_fetch_array($query)) {
	// $day1=$row['class_date'];
	// $day2 = strtotime('$day1');
	// $day = date('D', $day2);
	$day1=$row['class_date'];
 $day=date("D", strtotime($day1));
// 	$day = "sun";
if($day=='Tue')

{

echo '<tr class="table_row_report padding_column" id="tue_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Tue')

{
echo '<tr class="table_row_report padding_column" id="tue_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}

echo '</table>';


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }


echo "<br>";




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
echo "<div id='wed_cation'>Wednesday</div>";
echo '<table border="2px" class="report_table" id="report_table_wed"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';

while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Wed')

{
echo '<tr class="table_row_report padding_column" id="wed_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Wed')

{
echo '<tr class="table_row_report padding_column" id="wed_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}
echo '</table>';
echo "<br>";

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
echo "<div id='thu_cation'>Thursday</div>";
echo '<table border="2px" class="report_table" id="report_table_thu"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';

while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Thu')

{
echo '<tr class="table_row_report padding_column" id="thu_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Thu')

{
echo '<tr class="table_row_report padding_column" id="thu_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}

echo '</table>';

echo "<br>";
// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }







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

echo "<div id='fri_cation'>Friday</div>";
echo '<table border="2px" class="report_table" id="report_table_fri"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';
while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Fri')

{
echo '<tr class="table_row_report padding_column" id="fri_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Fri')

{
echo '<tr class="table_row_report padding_column" id="fri_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}

echo '</table>';
echo "<br>";
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

echo "<div id='sat_cation'>Saturday</div>";
echo '<table border="2px" class="report_table" id="report_table_sat"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';
while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Sat')

{
echo '<tr class="table_row_report padding_column" id="sat_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Sat')

{
echo '<tr class="table_row_report padding_column" id="sat_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}

echo '</table>';

echo "<br>";
// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }







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
echo "<div id='sun_cation'>Sunday</div>";
echo '<table border="2px" class="report_table" id="report_table_sun"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';

while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Sun')

{
echo '<tr class="table_row_report padding_column" id="sun_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Sun')

{
echo '<tr class="table_row_report padding_column" id="sun_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}
echo '</table>';
echo "</br>";
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

echo "<div id='mon_cation'>Monday</div>";
echo '<table border="2px" class="report_table" id="report_table_mon"><tr>
       <th class="padding_column">Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
         </tr>';
while ($row = mysql_fetch_array($query)) {
   // $day1=$row['class_date'];
   // $day2 = strtotime('$day1');
   // $day = date('D', $day2);
   $day1=$row['class_date'];
 $day=date("D", strtotime($day1));
//    $day = "sun";
if($day=='Mon')

{
echo '<tr class="table_row_report padding_column" id="mon_permanent"><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
}


// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }
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
 if($day=='Mon')

{
echo '<tr class="table_row_report padding_column" id="mon_temporarly"><td>'.$row['branch_name'].'</td><td>'.$row['temp_stu_name'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Temporary</td></tr>';
}

}

echo '</table>';
echo '</div>';

// if($day=='Wed')

// {
// echo '<tr><td>'.$row['branch_name'].'</td><td>'.$row['firstname'].'</td><td>'.$day.'</td><td>'.$row['class_date'].'</td><td>'.$row['class_starttime'].'</td><td>'.$row['class_endtime'].'</td><td>Permanent</td></tr>';
// }


echo "</br>";
?>

<div class="report_action_print">
<button type="button" class="print btn btn-success search_report">Print</button>
</div>                  
</div></div>
<?php include('script.php'); ?>
</body></html>

