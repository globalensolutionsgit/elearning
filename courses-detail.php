<?php require_once 'header_innerpage.php'; ?>
<?php include('dbcon.php'); ?>
<?php $get_id = $_GET['id']; ?>
<!--BANNER START-->
<div class="page-heading">
    <div class="container">
        <h2>Course Details</h2>
    </div>
</div>
<!--BANNER END-->
<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span3 sidebar">
                <!--TUTOR PROFILE START-->
                <?php
                $query = mysql_query("select * from student_teacher_allocation
                                                LEFT JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                LEFT JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                LEFT JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                LEFT JOIN users ON users.user_id = student_teacher_allocation.teacher_id where student_teacher_allocation_id = '$get_id'")or die(mysql_error());
                $row = mysql_fetch_array($query);
                $id = $row['student_teacher_allocation_id'];
                ?>
                <div class="widget course-tutor">
                    <div class="thumb">INSTRUCTOR</div>
                    <div class="text">
                        <p class="tutor-name color"><?php echo $row['firstname'] . '' . $row['lastname']; ?></p>
                        <p>Expert in <?php echo $row['subject_title']; ?></p>
                        <p><i class="fa fa-map-marker"></i><?php echo $row['branch_name']; ?> - Branch </p>
                        <p><i class="fa fa-link"></i> <a href="#" class="color"><?php echo $row['email']; ?></a></p>
                    </div>
                </div>
                <!--TUTOR PROFILE END-->
            </div>

            <!--COURSE DETAIL START-->
            <!--COURSE DETAIL END-->
            <div class="span9">

                <div class="tutor-detail-section">
                    <div class="thumb">
                    </div>
                    <div class="tutor-duration">
                        <div class="duration">
                            <ul>
                                <li>
                                    <h4>Start Time</h4>
                                    <p><?php echo substr($row['start_date'],0,16); ?></p>
                                </li>
                                <li>
                                    <h4>End Time</h4>
                                    <p><?php echo substr($row['end_date'],0,16); ?></p>
                                </li>
                                <li>
                                    <h4>Day</h4>
                                    <p><?php echo date('l', strtotime($row['start_date'])); ?></p>
                                </li>
                                <li>
                                    <h4>Subject Code</h4>
                                    <p><?php echo $row['subject_code']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="text">
                        <h2>Information System</h2>
                        <p></p>
                        <p><?php echo $row['long_description']; ?></p>
                        <?php
                        // if (isset($_SESSION['user_id'])) {
                        //     $user_id = $_SESSION['user_id'];
                        //     $check = mysql_query("select * from student_class_subject_branch where user_id = $user_id and teacher_class_subject_branch_id= $get_id ");
                        //     $count = mysql_num_rows($check);
                        //     if (!$count) {
                        //         echo '<a class="enroll booking">Enroll Now</a>';
                        //     } else {
                        //         echo '<a href="#" class="enroll">Already Booked</a>';
                        //     }
                        // } else {
                        //     echo '<a href="signin.php" class="login enroll">Login with enroll</a>';
                        // }
                        ?>

                        <!-- <div class="enroll_now" style="display:none;">
                            <p>Confirmation</p>
                            <input type="button" class="confirmation_no" value="No">
                            <input type="hidden" class="course_id" value="<?php echo $get_id; ?>">
                            <input type="hidden" class="confirmation_user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <input type="button" class="confirmation_yes" value="Yes">
                        </div> -->
                    </div>
                </div>
            </div>

            <!--COURSE DETAIL END-->
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
