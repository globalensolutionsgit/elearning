<?php
        include('dbcon.php');
        $message = "";
        if (count($_POST) > 0) {
            $result = mysql_query("SELECT * FROM users WHERE username='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");
            $row = mysql_fetch_array($result);
            if (is_array($row)) {
                session_start();
                $_SESSION["user_id"] = $row['user_id'];
                $_SESSION["username"] = $row['username'];
                $_SESSION["user_type"] = $row['user_type'];
                if($row['user_type']=='student'){
                    header("Location:courses.php");
                }
                else if($row['user_type']=='teacher'){
                     header("Location:teacher_dashboard.php");
                }
            } else {
                header("Location:signin.php?error_id=1");
            }
        }
        ?>