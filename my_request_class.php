<?php include('session.php'); ?>
<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post-Secondary');
$user_id = $_SESSION['user_id'];
?>
<?php
if(isset($_POST['submit'])){
    $branch_id = $_POST['branch'];
    $class_row_id = $_POST['classes'];
    $subject_id = $_POST['subject'];
    $check_query = mysql_query("select count(*) as count from student_requests where student_id='$user_id' and branch_id='$branch_id' and class_id='$class_row_id' and subject_id='$subject_id'");
    $count = mysql_fetch_assoc($check_query);
    if($count['count'] == 0 ){
        mysql_query("insert into student_requests (branch_id,class_id,subject_id,student_id) values ('$branch_id','$class_row_id','$subject_id','$user_id')");
        $message = "Successfully enroll your booking";
    }else{
        $message = 'You already Booked your Seat';
    }
}
?>
<!--BANNER START-->
<div class="page-heading">
    <div class="container">
        <h2>My Enrolls</h2>
        
    </div>
</div>
<!--BANNER END-->
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<?php

$result = mysql_query("select * from users where user_id ='$user_id'");
$row = mysql_fetch_array($result);
?>

<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span9">
                <div class="featured-courses">
                    <div class="form-box">
                        <div class="message"><?php if (isset($message)) {
                            if ($message != "") {
                                echo $message;
                            }
                        } ?></div>
                        <form enctype="multipart/form-data" method="POST" id="stu_reg" role="form">
                            <div class="form-body">
                                <fieldset>
                                    <h2>Request Your seat!</h2>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <label>Your Region - <?php echo $regions[$row['region']]; ?></label>
                                            <input type="hidden" name="region" value='<?php echo $row['region']; ?>'/>
                                        </div>
                                        <div class="span6">
                                            <label>Your class - <?php echo $classes[$row['classes']]; ?></label>
                                            <?php
                                            $class_name = $classes[$row['classes']];
                                            $class_query = mysql_query("select class_id from class where class_name = '$class_name'");
                                            $class_row = mysql_fetch_array($class_query);
                                            echo "<input type='hidden' name='classes' value='".$class_row['class_id']."'/>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="row-fluid">

                                        <div class="span6">
                                            <label>Select Branch</label>
                                            <select class="input-block-level branch" name="branch" data-validation-error-msg="Please select any one branch" data-validation="required">
                                                <?php
                                                $reg = $row['region'];
                                                $branch = mysql_query("select * from branch where region ='$reg'");
                                                while ($row1 = mysql_fetch_assoc($branch)) {
                                                    echo "<option value=".$row1['branch_id'].">".$row1['branch_name']."</option>";
                                                 } ?>
                                            </select>
                                        </div>
                                        <div class="span6">
                                            <label>Subjects</label>

                                            <select class="input-block-level subject" name="subject" data-validation-error-msg="Please select any one subject" data-validation="required">
                                                <?php
                                                $clas = $classes[$row['classes']];
                                                $subject = mysql_query("select * from subject where class_id = (select class_id from class where class_name = '$clas') ");
                                                while ($subject_row = mysql_fetch_array($subject)) {
                                                    echo "<option value=".$subject_row['subject_id'].">".$subject_row['subject_title']."</option>";
                                                 } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <button type="submit" class="btn-style pull-right" name="submit">Submit</button>
                                        </div>
                                    <div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

                </div>
            </div>
            <div class="span3">
                <!--SIDEBAR START-->
                <!--SIDEBAR END-->
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
<?php require_once 'footer.php'; ?>
