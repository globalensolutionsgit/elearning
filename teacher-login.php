<?php
include('dbcon.php');
require_once 'header_innerpage.php';
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
?>
<!--CONTANT START-->
<div class="page-heading">
    <div class="container">
        <h2>Teacher Register </h2>
    </div>
</div>
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span9">
                <div class="form-box">
                    <?php
                    include('dbcon.php');
                    $message = "";
                    if ($_POST) {
                        $utype = $_POST['user_type'];
                        $uname = $_POST['uname'];
                        $pword = $_POST['pword'];
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $region = $_POST['region'];
                        $city = $_POST['branch'];
                        $gender = $_POST['gender'];
                        $activation = md5($email . time());
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


                        $check = mysql_query("SELECT email from users WHERE email = '$email'");
                        if (mysql_num_rows($check) > 0) {
                            $message = 'Email has been already used';
                        } else {
                            mysql_query("insert into users (user_type, username, password, firstname, lastname, phone_number, email, photo, gender, region, city, activation) values('$utype', '$uname', '$pword', '$fname', '$lname', '$phone', '$email', '$target_file', '$gender', '$region', '$city', '$activation')")or die(mysql_error());
                            $lastuserId = mysql_insert_id();
                            foreach ($_POST['preference_classsubject'] as $key => $value) {
                                $userIds = explode("-", $value);
                                mysql_query("insert into user_preference (usersId, user_classId, user_subjectId) values('$lastuserId', '$userIds[0]', '$userIds[1]')")or die(mysql_error());
                            }
                            $to = $email;
                            $subject = "Email verification";
                            $body = 'Hi,'.$uname.' We need to make sure you are human. Please verify your email and get started using your Website account.http://www.globalensolutions.com/demo/activation.php?code='.$activation;

                            mail($to, $subject, $body);
                            $message = "Registration successful, please activate email.";

                        }
                    }
                    ?>
                    <div class="message"><?php if (isset($message)) {
                        if ($message != "") {
                            echo $message;
                        }
                    } ?></div>
                    <form enctype="multipart/form-data" action="" method="post" id="tec_reg" role="form">
                        <div class="form-body">
                            <fieldset>
                                <h2>First time here? Sign up now!</h2>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>First Name</label>
                                        <input type="text" placeholder="Enter your First Name" class="input-block-level" name="fname" data-validation="required">
                                        <input type="hidden" name="user_type" value="teacher" >
                                    </div>
                                    <div class="span6">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Enter your Last Name" class="input-block-level" name="lname" data-validation="required">
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Enter Email</label>
                                        <input type="text" placeholder="Enter your E-mail ID" class="input-block-level" name='email' data-validation="email">
                                    </div>
                                    <div class="span6">
                                        <label>Enter Phone number</label>
                                        <input type="text" placeholder="Enter your Phone Number" class="input-block-level" name='phone' data-validation="number">
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Select Your Region</label>
                                        <select class="input-block-level regions" name="region" data-validation-error-msg="Please select" data-validation="required">
<?php
foreach ($regions as $key => $value) {
    echo "<option value=" . $key . ">" . $value . "</option>";
}
?>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <label>Select Your Center Name</label>
                                        <select class="input-block-level branchs" name="branch" >

                                        </select>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Gender</label>
                                        <select class="input-block-level" name="gender" data-validation-error-msg="Please select gender" data-validation="required">
                                            <option value='1'>Male</option>
                                            <option value='2'>Female</option>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <label>Upload Your Photo</label>
                                        <input type="file" name="photo" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-max-size="2M">
                                    </div>
                                </div>



                            </fieldset>
                        </div>
                        <div class="span4">
                            <h2>Create your UserName & Password </h2>
                            <div class="row-fluid">
                                <div class="span12">
                                    <label>UserName</label>
                                    <input type="text" placeholder="Enter Your Username" class="input-block-level" name="uname" data-validation="length alphanumeric" data-validation-length="3-12" data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Your Password" class="input-block-level" name="pword" data-validation="strength" data-validation-strength="10">
                                    <span>Password should be one Caps letter, one special character, one numeric</span>
                                </div>
                            </div>
                        </div>

                        <div class="span4 ">
                            <h2>Choose Your Preference </h2>
                            <div class="row-fluid">
                                <div class="span6">
                                    <label>Choose your Class</label>
                                    <?php
                                    $query = mysql_query("SELECT
                                                            cl.class_id,
                                                            su.class_id,
                                                            cl.class_name,
                                                            su.subject_title,
                                                            su.subject_id
                                                            FROM
                                                            class AS cl
                                                            INNER JOIN `subject` AS su
                                                            WHERE
                                                            cl.class_id = su.class_id")or die(mysql_error());
                                    $count = mysql_num_rows($query);
                                    if ($count != '0') {
                                        ?>
                                        <select class="" name="preference_classsubject[]" id="teacher_class" multiple data-validation="required">
                                        <?php while ($row = mysql_fetch_array($query)) { ?>
                                                <option value="<?php echo $row['class_id'] . '-' . $row['subject_id']; ?>">
        <?php echo $row['class_name'] . '-' . $row['subject_title']; ?>
                                                </option>
    <?php } ?>
                                        </select>
<?php } ?>
                                </div>
                            </div>
                        </div>

                        <div class="footer">
                            <div class="row-fluid">
                                <p class="pull-left">By registering, You accept Terms &amp; Conditions</p>
                                <button type="submit" class="btn-style pull-right">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="span3">
                <div class="sidebar">
                    <!--COURSE CATEGORIES WIDGET START-->
                    <div class="widget widget-course-categories">
                        <h2>Course Categorty</h2>
                        <ul>
                            <?php
                            require_once 'dbcon.php';
                            $search = mysql_query("select * from subject LEFT JOIN class ON class.class_id = subject.class_id
                                                    ")or die(mysql_error());
                            while ($row1 = mysql_fetch_assoc($search)) {
                                ?>
                                <li><a href="#"><?php echo $row1['class_name']; ?>-<?php echo $row1['subject_title']; ?></a></li>
    <?php
}
?>
                        </ul>
                    </div>
                    <!--COURSE CATEGORIES WIDGET END-->
                </div>
            </div>
        </div>
    </div>
    <!--FOLLOW US SECTION START-->
    <section class="follow-us">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                            <div class="text">
                                <h4>Follow us on Facebook</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-google"></i>
                            <div class="text">
                                <h4>Follow us on Google Plus</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="span4">
                    <div class="follow">
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                            <div class="text">
                                <h4>Follow us on Linkedin</h4>
                                <p>Faucibus toroot menuts</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FOLLOW US SECTION END-->
</div>
<!--CONTANT END-->
<?php
require_once 'footer.php';
