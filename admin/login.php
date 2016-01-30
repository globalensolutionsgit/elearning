<?php
    include('dbcon.php');
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type='admin'")or die(mysql_error());
    $count = mysql_num_rows($query);
    $row = mysql_fetch_array($query);
    if ($count > 0){
        $_SESSION['id']=$row['user_id'];
        echo 'true';
    }else{ 
        echo 'false';
    }					
?>