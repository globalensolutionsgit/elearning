<?php
require_once 'header_innerpage.php';
require_once 'dbcon.php';    //include of db config file
    include ('paginate.php'); //include of paginat page
    $per_page = 12;
    $user_id = $_SESSION['user_id'];
    if (isset($_GET['class']) and isset($_GET['subject'])){
        $class=$_GET['class'];
        $subject=$_GET['subject'];
        $result = mysql_query("select * from student_teacher_allocation
                                                LEFT JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                LEFT JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                LEFT JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                LEFT JOIN users ON users.user_id = student_teacher_allocation.teacher_id
                                                where class.class_name = '$class' and subject.subject_title = '$subject' where student_teacher_allocation.student_id = '$user_id' and student_teacher_allocation.start_date <=now()   ORDER BY teacher_class_subject_branch.start_date DESC ");
    }
    else{
        $result = mysql_query("select * from student_teacher_allocation
                                                LEFT JOIN branch ON branch.branch_id = student_teacher_allocation.branch_id
                                                LEFT JOIN class ON class.class_id = student_teacher_allocation.class_id
                                                LEFT JOIN subject ON subject.subject_id = student_teacher_allocation.subject_id
                                                LEFT JOIN users ON users.user_id = student_teacher_allocation.teacher_id where student_teacher_allocation.student_id = '$user_id' and student_teacher_allocation.start_date <=now() ");
    }

    $total_results = mysql_num_rows($result);
    $total_pages = ceil($total_results / $per_page);//total pages we going to have
    //-------------if page is setcheck------------------//
    if (isset($_GET['page'])) {
        if (isset($_GET['page'])) {
        $show_page = $_GET['page'];
        }else{$show_page = 1;}
        if ($show_page > 0 && $show_page <= $total_pages) {
            $start = ($show_page - 1) * $per_page;
            $end = $start + $per_page;
        } else {
            // error - show first set of results
            $start = 0;
            $end = $per_page;
        }
        $page = intval($_GET['page']);
        if ($page <= 0)
            $page = 1;
    } else {
        // if page isn't set, show first set of results
        $start = 0;
        $end = $per_page;
        $show_page = 1;
    }
    // display pagination

    $tpages=$total_pages;
    //current page

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
            <div class="span9">
                <div class="featured-courses">
                    <h2>Class schedules</h2>
                    <div class="row" >
                            <?php
                            if (isset($_GET['class']) and isset($_GET['subject'])){
                                $class=$_GET['class'];
                                $subject=$_GET['subject'];
                                $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages."&class=".$class."&subject=".$subject;
                            }else{
                                $reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages;
                            }

        for ($i = $start; $i < $end; $i++) {
            if ($i == $total_results) {
                break;
            }
            echo'<div class ="span3">';
            echo'<div class="course">';
            //echo'<div class="thumb">';
            //echo'<a href="courses-detail.php?id='.mysql_result($result, $i, 'teacher_class_subject_branch_id').'"></a>';
            //echo'</div>';
            echo'<div class="text">';
            echo'<div class="header">';
            echo'<h4>'.mysql_result($result, $i, 'class_name').'</h4>';
            echo'<div class="rating">'.mysql_result($result, $i, 'subject_title');
            echo'</div>';
            echo'</div>';
            echo'<div class="course-name">';
            echo'<p>'.mysql_result($result, $i, substr('start_date',0,13)).' '.date('l', strtotime(mysql_result($result, $i,'start_date'))).'</p>';
            echo'</div>';
            echo'<span>'.mysql_result($result, $i, 'branch_name').'</span>';
            echo'<div class="course-detail-btn">';
            echo'<a href="courses-detail.php?id='. mysql_result($result, $i, 'student_teacher_allocation_id'). '">Detail</a>';
            echo'</div></div></div></div>';
        }

     echo '<div class="pagination"><ul>';
        if ($total_pages > 1) {
            echo paginate($reload, $show_page, $total_pages);
        }
    echo "</ul></div>";
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
