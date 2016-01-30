<?php

include('dbcon.php');
if ($_POST) {
    $utype = $_POST['user_type'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $region = $_POST['region'];
    $branch = $_POST['branch'];
    $classes = $_POST['classes'];
    $gender = $_POST['gender'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
        } else {
            echo "File is not an image.";
        }
    }
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    mysql_query("insert into users (user_type,username,password,firstname,lastname,phone_number,email,photo,gender,region,city,classes) values('$utype','$uname','$pword','$fname','$lname','$phone','$email','$target_file','$gender','$region','$branch','$classes')")or die(mysql_error());
    header('location: courses.php');
}
?>
