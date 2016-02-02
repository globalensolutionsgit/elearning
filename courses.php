<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';    //include of db config file
    include ('paginate.php'); //include of paginat page
    $per_page = 12;
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }

    if (isset($_GET['class']) and isset($_GET['subject'])){
        $class=$_GET['class'];
        $subject=$_GET['subject'];
        $result = mysql_query("select * from student_teacher_allocation
                                                JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                JOIN users ON users.user_id = student_teacher_allocation.teacher_id
                                                where class.class_name = '$class' and subject.subject_title = '$subject' where student_teacher_allocation.student_id = '$user_id' and student_teacher_allocation.status = '1'  ORDER BY teacher_class_subject_branch.start_date DESC ");
    }
    else{
        $result = mysql_query("select * from student_teacher_allocation
                                                JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                JOIN users ON users.user_id = student_teacher_allocation.teacher_id GROUP BY student_teacher_allocation.teacher_id ");
    }
?>
<!--BANNER START-->
<div class="page-heading">
    <div class="container">
        <h2>My class</h2>
    </div>
</div>
<!--BANNER END-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>


<!--CONTANT START-->
<div class="contant">
    <div class="container">

        <div class="row">
            <?php if(isset($_SESSION['user_id'])){ ?>
            <div class="span9">
                <div class="featured-courses">
                    <h2>Your Class</h2>
                    <div class="row" >
                    <?php
                    if ($result) {
                        while($row = mysql_fetch_array($result)) {
                            ?>
                            <div class ="span3">
                                <div class="course">
                                    <div class="thumb">
                                        <a href="courses-detail.php?id="></a>
                                    </div>
                                    <div class="text">
                                        <div class="header">
                                            <h4><?php echo $row['class_name']; ?></h4>
                                            <div class="rating">
                                                <?php echo $row['subject_title']; ?>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <p><?php echo $row['start_date'].date('l', strtotime($row['start_date'])); ?></p>
                                        </div>
                                        <span><?php echo $row['branch_name']; ?></span>
                                        <div class="course-detail-btn">
                                            <a href="courses-detail.php?id=<?php echo $row['student_teacher_allocation_id']; ?>">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }

                    }
                    else {
                        echo mysql_error();
                    }

                     ?>
                    </div>
                </div>
            </div>

            <div class="span3">
                <!--SIDEBAR START-->
                <div class="sidebar">
                    <!--COURSE CATEGORIES WIDGET START-->
                    <div class="widget widget-course-categories">
                        <h2>Courses</h2>
                        <ul>
                            <?php
                            $search = mysql_query("select DISTINCT class.class_name,subject.subject_title from subject

                                                LEFT JOIN class ON class.class_id = subject.class_id

                                                ")or die(mysql_error());
                            while ($row1 = mysql_fetch_assoc($search)) { ?>
                                <li><a><?php echo $row1['class_name']; ?>-<?php echo $row1['subject_title']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--COURSE CATEGORIES WIDGET END-->
                </div>
                <!--SIDEBAR END-->
            </div>
            <?php } ?>
        </div>
        <?php
            if (isset($_GET['class']) and isset($_GET['subject'])){
                $class=$_GET['class'];
                $subject=$_GET['subject'];
                $result = mysql_query("select * from student_teacher_allocation
                                                        JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                        JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                        JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                        JOIN users ON users.user_id = student_teacher_allocation.teacher_id
                                                        where class.class_name = '$class' and subject.subject_title = '$subject' where NOT student_teacher_allocation.student_id = '$user_id' ");
            }
            else{
                $result = mysql_query("select * from student_teacher_allocation
                                                        JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                        JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                        JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                        JOIN users ON users.user_id = student_teacher_allocation.teacher_id GROUP BY student_teacher_allocation.teacher_id");
            }
        ?>
        <div class="row">
            <div class="span9">
                <div class="featured-courses">
                    <h2>Today Classes</h2>
                    <div class="row" >
                    <?php
                    if ($result) {
                        while($row = mysql_fetch_array($result)) {
                            ?>
                            <div class ="span3">
                                <div class="course">
                                    <div class="thumb">
                                        <a href="courses-detail.php?id="></a>
                                    </div>
                                    <div class="text">
                                        <div class="header">
                                            <h4><?php echo $row['class_name']; ?></h4>
                                            <div class="rating">
                                                <?php echo $row['subject_title']; ?>
                                            </div>
                                        </div>
                                        <div class="course-name">
                                            <p><?php echo $row['start_date'].date('l', strtotime($row['start_date'])); ?></p>
                                        </div>
                                        <span><?php echo $row['branch_name']; ?></span>
                                        <div class="course-detail-btn">
                                            <a href="courses-detail.php?id=<?php echo $row['student_teacher_allocation_id']; ?>">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }

                    }
                    else {
                        echo mysql_error();
                    }

                     ?>
                    </div>
                </div>
            </div>
            <div class="span3">
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
<?php require_once 'footer.php'; ?>
