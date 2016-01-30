<?php require_once 'header_innerpage.php'; ?>
<?php include('dbcon.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="page-heading">
    	<div class="container">
            <h2> My Students </h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<div class="container">
            <div class="event-page">                
            <!--EVENT START-->                        
            <?php           
                $my_student = mysql_query("SELECT * FROM teacher_class_student
                               LEFT JOIN student ON student.student_id = teacher_class_student.student_id 
                               INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ")or die(mysql_error());
                $count_my_student = mysql_num_rows($my_student);

                ?><h2>My Students List ( <?php echo $count_my_student; ?> )</h2><?php
                while ($row = mysql_fetch_array($my_student)) { ?>
                    <div class="row events">
                        <div class="span6">
                            <div class="thumb">
                                <img src="admin/<?php echo $row['location'] ?>" alt="">
                            </div>
                        </div>
                        <!--EVENT CONTANT START-->
                        <div class="span6">
                            <div class="text">
                                <!--EVENT HEADER START-->
                                <div class="event-header">
                                    <span><?php echo $row['firstname']; ?></span>
                                    <h2><?php echo $row['lastname']; ?></h2>
                                    <div class="data-tags">
                                        <a href="#">More details</a>
                                    </div>
                                </div>                                 
                            </div>
                        </div>
                        <!--EVENT CONTANT END-->                
                    </div>
                    <?php    
                }
            ?>	
            <!--EVENT END-->            
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
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
  <?php require_once 'footer.php'; ?>