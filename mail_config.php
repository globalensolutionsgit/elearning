<?php
include 'dbcon.php';
$msg='';
if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password']) )
{
$utype = $_POST['user_type'];
$uname = $_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$region = $_POST['region'];
$branch = $_POST['branch'];
$gender = $_POST['gender'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES['photo']['name'], $target_file);
mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,region,city) values('$utype','$uname','$pword','$fname','$lname','$phone','$email','$target_file','$gender','$region','$branch')")or die(mysql_error());
$email=mysqli_real_escape_string($conn,$_POST['email']);
$password=mysqli_real_escape_string($conn,$_POST['pword']);
// regular expression for email check
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';

if(preg_match($regex, $email))
{ 
$password=md5($password); // encrypted password
$activation=md5($email.time()); // encrypted email+timestamp
$count=mysqli_query($connection,"SELECT user_id FROM users WHERE email='$email'");
// email check
if(mysqli_num_rows($count) < 1)
{
mysqli_query($conn,"INSERT INTO users(email,password,activation) VALUES('$email','$password','$activation')");
// sending email
include 'sendmail.php';
$to=$email;
$subject="Email verification";
$body='Hi, <br/> <br/> We need to make sure you are human. Please verify your email and get started using your Website account. <br/> <br/> <a href="'.$base_url.'activation/'.$activation.'">'.$base_url.'activation/'.$activation.'</a>';

sendmail($to,$subject,$body);
$msg= "Registration successful, please activate email."; 
}
else
{
$msg= 'The email is already taken, please try new.'; 
}

}
else
{
$msg = 'The email you have entered is invalid, please try again.'; 
}

}
// HTML Part
?>