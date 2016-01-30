<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';
?>
<!--BANNER START-->
<div class="page-heading">
    <div class="container">
        <h2>My Enrolls</h2>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
    </div>
</div>
<!--BANNER END-->
<script type="text/javascript" src="http://ajax.googleapis.com/
ajax/libs/jquery/1.4.2/jquery.min.js"></script>


<!--CONTANT START-->
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span9">
                <div class="featured-courses">
                    <h2>All Subjects</h2>
                    <div class="row">
                        <?php
						$user_id = $_SESSION['user_id'];
						//$stu_query = mysql_query("select teacher_class_subject_branch_id from student_class_subject_branch where user_id = $user_id")or die(mysql_error());
                        
						$query = mysql_query("select * from student_class_subject_branch
												LEFT JOIN teacher_class_subject_branch ON teacher_class_subject_branch.teacher_class_subject_branch_id = student_class_subject_branch.teacher_class_subject_branch_id
                                                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id 
                                                LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id 
                                                LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
												LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id
                                                where student_class_subject_branch.user_id = $user_id
                                                ")or die(mysql_error());
                        $count = mysql_num_rows($query);
                        if ($count != '0') {
                            while ($row = mysql_fetch_array($query)) {
                                $id = $row['teacher_class_subject_branch_id'];
                                ?>
                                <div class="span3">
                                    <div class="course">
                                        <div class="thumb">
                                            <a href="courses-detail.php<?php echo '?id=' . $id; ?>"></a>
                                                                                    </div>
                                        <div class="text">
                                            <div class="header">
                                                <h4><?php echo $row['class_name']; ?></h4>
                                                <div class="rating">
                                                             <?php echo $row['subject_title']; ?>                                       </div>
                                            </div>
                                            <div class="course-name">
                                                <p><?php echo substr($row['start_date'],0,16) ; ?> <?php echo date('l', strtotime($row['start_date'])); ?></p>
                                                
                                            </div>
                                            <span><b><?php echo $row['firstname'] ; ?></b> take at <?php echo $row['branch_name'] ; ?> - Branch</span>
                                            <span> </span>
                                            <div class="course-detail-btn">
                                                
                                                <a href="cancel_booking.php<?php echo '?id=' . $id.'&user_id='.$user_id; ?>">Cancel Booking</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo 'No Data Present';
                        }
                        ?>                        
                    </div>
                </div>
            </div>
            <div class="span3">
                <!--SIDEBAR START-->
                <!--SIDEBAR END-->
            </div>
        </div>
        <div class="the-best">
            <p>The Best Websites for Free Online Courses, Certificates, Degrees, and Educational Resources</p>
            <h2>take $10 0ff for new users</h2>
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
