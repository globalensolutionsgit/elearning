<?php

require_once 'dbcon.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
if(isset($_POST['sunday'])){
	for($i=0;$i<sizeof($_POST['sunday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','sun','".$_POST['sunday_branch'][$i]."','".$_POST['sunday_classs'][$i]."','".$_POST['sunday_subject'][$i]."','".$_POST['sunday_starttime'][$i]."','".$_POST['sunday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['monday'])){
	for($i=0;$i<sizeof($_POST['monday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','mon','".$_POST['monday_branch'][$i]."','".$_POST['monday_classs'][$i]."','".$_POST['monday_subject'][$i]."','".$_POST['monday_starttime'][$i]."','".$_POST['monday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['tuesday'])){
	for($i=0;$i<sizeof($_POST['tuesday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','tue','".$_POST['tuesday_branch'][$i]."','".$_POST['tuesday_classs'][$i]."','".$_POST['tuesday_subject'][$i]."','".$_POST['tuesday_starttime'][$i]."','".$_POST['tuesday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['wednesday'])){
	for($i=0;$i<sizeof($_POST['wednesday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','wed','".$_POST['wednesday_branch'][$i]."','".$_POST['wednesday_classs'][$i]."','".$_POST['wednesday_subject'][$i]."','".$_POST['wednesday_starttime'][$i]."','".$_POST['wednesday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['thursday'])){
	for($i=0;$i<sizeof($_POST['thursday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','thu','".$_POST['thursday_branch'][$i]."','".$_POST['thursday_classs'][$i]."','".$_POST['thursday_subject'][$i]."','".$_POST['thurday_starttime'][$i]."','".$_POST['thursday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['friday'])){
	for($i=0;$i<sizeof($_POST['friday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','fri','".$_POST['friday_branch'][$i]."','".$_POST['friday_classs'][$i]."','".$_POST['friday_subject'][$i]."','".$_POST['friday_starttime'][$i]."','".$_POST['friday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
if(isset($_POST['saturday'])){
	for($i=0;$i<sizeof($_POST['saturday_branch']);$i++){
		$sql = "insert into class_schedules (teacher_id,day,branch_id,class_id,subject_id,start_time,end_time,status) values ('".$_POST['user']."','sat','".$_POST['saturday_branch'][$i]."','".$_POST['saturday_classs'][$i]."','".$_POST['saturday_subject'][$i]."','".$_POST['saturday_starttime'][$i]."','".$_POST['saturday_endtime'][$i]."','1')";
		mysql_query($sql);
	}
}
header("Location:class_schedules.php?insert=ture");


















































































































// $branch_id = $_POST['branch'];
// $class_id = $_POST['classs'];
// $subject_id = $_POST['subject'];
// // $region = $_POST['region'];
// $teacher_id = $_POST['user'];
// $start_date = date('Y-m-d',  strtotime($_POST['startdate']));
// //commented by kalai
// // $end_date = $_POST['enddate'];
// //newly added by kalai
// $start_time = $_POST['starttime'];
// $end_time = $_POST['endtime'];
// $days = $_POST['days'];
// $combined_id = '';
// 
 // // mysql_query("insert into student_teacher_allocation (teacher_id,branch_id,class_id,subject_id,start_date,start_time,end_time,days,status) values ('$teacher_id','$branch_id','$class_id','$subject_id','$start_date','$start_time','$end_time','$days','1') ");
   // // if(!empty($_POST['student'])) {
   // //   foreach($_POST['student'] as $comb_id) {
   // //    	$combined_id .=$comb_id.',';
    // //   }
//    
   // // if(!empty($_POST['student'])) {
      // //  foreach($_POST['student'] as $stu_id) {
         // //    mysql_query("insert into student_teacher_allocation (student_id,teacher_id,region,branch_id,class_id,subject_id,start_date,end_date) values ('$stu_id','$teacher_id','$region','$branch_id','$class_id','$subject_id','$start_date','$end_date') ");
        // //	// changed by kalai
       // // 	//mysql_query("insert into student_teacher_allocation (student_id,teach er_id,branch_id,class_id,subject_id,start_date,start_time,end_time,days,status) values ('$stu_id','$teacher_id','$branch_id','$class_id','$subject_id','$start_date','$start_time','$end_time','$days','1') ");
       // // }
  // //  }//
  // $check_query = mysql_query("select * from student_teacher_allocation where branch_id='$branch_id' and class_id = '$class_id' and teacher_id = '$teacher_id' and subject_id = '$subject_id'");
// 
// if(mysql_num_rows($check_query)<=0){
    // //$query = mysql_query("select * from users JOIN branch ON branch.branch_id = '$branch_id' JOIN class ON class.class_id = '$class_id' JOIN subject ON subject.subject_id = '$subject_id' JOIN student_requests ON student_requests.student_id = users.user_id where student_requests.branch_id = '$branch_id' and student_requests.class_id = '$class_id' and student_requests.subject_id = '$subject_id'");
    // //$query = mysql_query("select * from users where city='$branch_id' and classes='$classs1'");
	// //$query = mysql_query("select * from users"); // for testing
	// //$query = mysql_query("select * from users where user_type='student' and city='$branch_id'");
	  // for ($i = 0; $i < sizeof($days); $i++) {
    // //$values .= "('".$ingredients[$i]."', '".$amount[$i]."')";
  // //  if ($i != sizeof($amount) - 1) {
    // //    $values .= ", ";
    // // }
	// //mysql_query("insert into student_teacher_allocation (student_id,teacher_id,branch_id,class_id,subject_id,start_date,start_time,end_time,days,status) values ('$combined_id','$teacher_id','$branch_id','$class_id','$subject_id','$start_date','$start_time[$i]','$end_time[$i]','$days[$i]','1') ");
	// mysql_query("insert into student_teacher_allocation (teacher_id,branch_id,class_id,subject_id,start_date,start_time,end_time,days,status) values ('$teacher_id','$branch_id','$class_id','$subject_id','$start_date','$start_time[$i]','$end_time[$i]','$days[$i]','1') ");
	// }
	// //$count = mysql_num_rows($query);
  // //  if ($count > 0) {
   // //     while($row=mysql_fetch_array($query)){
           // // echo "<tr><td><input type='checkbox' value='".$row['user_id']."'class='student_list_checkbox' name='student[]'></td><td>".$row['firstname']."</td><td>".$row['branch_name']."</td><td>".$row['class_name']."</td><td>".$row['subject_title']."</td></tr>";
		// //	echo "<tr><td><input type='checkbox' value='".$row['user_id']."'class='student_list_checkbox' name='student[]'></td><td>".$row['firstname']."</td><td>".$row['phone_number']."</td><td>".$row['email']."</td></tr>";
     // //   }
   // // }else{
   // //     echo 'nil';
 // //   }
// }
// else{
    // echo "already exist";//already allocated
// }
//   
  


  
  
  
  
  
  
  
  
  
  


?>
