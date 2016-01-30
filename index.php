<?php require_once 'header.php';?>
<?php require_once 'dbcon.php';?>
    <!--CONTANT START-->
    <div class="contant">
    	<!--SERVICES SECTION START-->
    <section>
        <div class="container">
            <!--SECTION HEADER START-->
            <div class="sec-header">
                <h2>Our Services</h2>
                <p>Take a look at what we have are doing</p>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!--SECTION HEADER END-->
            <div class="row">
                
                <!--SERVICE ITEM START-->
                <div class="span4">
                    <div class="services">
                        <div class="header">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-cogs inner-icon"></i>
                        </div>
                        <div class="text">
                            <h3><a href="courses.php">Enroll your Tutor</a></h3>

                        </div>
                    </div>
                </div>
                <!--SERVICE ITEM END-->
                
                <!--SERVICE ITEM START-->
                <div class="span4">
                    <div class="services">
                        <div class="header">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-user inner-icon"></i>
                        </div>
                        <div class="text">
                            <h3><a href="about-us.php">About Our Service </a></h3>

                        </div>
                    </div>
                </div>
                <!--SERVICE ITEM END-->
                
                <!--SERVICE ITEM START-->
                <div class="span4">
                    <div class="services">
                        <div class="header">
                            <i class="fa fa-tablet"></i>
                            <i class="fa fa-list-alt inner-icon"></i>
                        </div>
                        <div class="text">
                            <h3><a href="contact-us.php">Reach Our Center</a></h3>

                        </div>
                    </div>
                </div>
                <!--SERVICE ITEM END-->
                
            </div>
        </div>
    </section>
    <!--SERVICES SECTION END-->
        <!--LATEST COURSES SECTION START-->
        <section class="gray-bg">
        	<div class="container">
            	<!--SECTION HEADER START-->
            	<div class="sec-header">
                	<h2>Latest Courses</h2>
                    <p>Check Our Featured Courses</p>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--SECTION HEADER END-->
                <div class="customNavigation">
                    <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                    <a class="btn next"><i class="fa fa-angle-right"></i></a>
                </div>
                <div id="owl-carousel" class="owl-carousel owl-theme">
                    <?php
                      $sql1 = mysql_query("select * from teacher_class_subject_branch LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id ")or die(mysql_error());
                       // echo $sql1;
                        while ($row1 = mysql_fetch_assoc($sql1)) {  
$id = $row1['teacher_class_subject_branch_id'];
?>
                    
                	<!--COURSE ITEM START-->
                    <div class="course">
                    	<div class="thumb">
                
                            
                        </div>
                    	<div class="text">
                        	<div class="header">
                            	<h4><?php echo $row1['class_name']; ?></h4>
                                <div class="rating">
                                   
                                </div>
                            </div>
                            <div class="course-name">
                            	<p><?php echo $row1['subject_code']; ?>-<?php echo $row1['subject_title']; ?></p>
                               
                            </div>
                            <div class="course-detail-btn">
                            	
                                <a href="courses-detail.php<?php echo '?id=' . $id; ?>">Detail</a>
                            </div>
                        </div>
                    </div>
                    <!--COURSE ITEM END-->
                        <?php } ?>
                </div>
            </div>
        </section>
        <!--LATEST COURSES SECTION END-->
        <!--STUDENT FORM SECTION START-->
        <section class="form">
        	<div class="form-contant relative">
            	<div class="container form-fields"> 
                	<div class="row">
                    	<div class="span6">
                        	<img src="images/student.png" alt="">
                        </div>
                        <div class="span6">
                        	<div class="student-form">
                            	<div class="header">
                                	<h2>About Tution Centres</h2>
                                   
                                </div>
                                <div class="form-data">
                                	<ul>
                                    <li>At Kip McGrath we offer a wide range of tutoring programs suited to Singaporean students. We offer Primary English,Primary Maths, Secondary English and  Secondary E Maths and A Maths. </li>
                                    <li> If your child is about to start school, or of primary or secondary school age and could use a little extra help, contact your local Kip McGrath Centre in Singapore today to organise a free assessment.</li>
                                    <li>At Kip McGrath we employ qualified teachers to ensure our tutors have the right experience to assist your child.</li> 
                                    <li> Our tutors are passionate about helping students improve their results through tuition and are committed to this goal. 
                                        The tutors enthusiastic approach helps to make sure your child enjoys their tutoring sessions at Kip McGrath.</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
                <div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>
                <div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:0px -1500px;"></div>
                <div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:0px -900px;"></div>
            </div>
        </section>
        <!--STUDENT FORM SECTION END-->
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
    <!--FOOTER START--> 
        
<?php require_once 'footer.php'; ?>