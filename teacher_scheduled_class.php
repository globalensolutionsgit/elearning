<?php include('session.php'); ?>
<?php require_once 'header_innerpage.php'; ?>

<?php include('dbcon.php'); ?>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="page-heading">
    	<div class="container">
            <h2> My Schedule </h2>
            <p></p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<div class="container">
            <div class="event-page">

            <!--EVENT START-->
            <div class="row events">
            <?php
            $user_id=$_SESSION['user_id'];
            $query = mysql_query("select * from student_teacher_allocation where teacher_id = '$user_id' group by teacher_id,region,branch_id,class_id,subject_id
                    ")or die(mysql_error());
            $count = mysql_num_rows($query);

            if ($count > 0) {
            while ($row = mysql_fetch_array($query)) {
                    $id = $row['student_teacher_allocation_id'];
                ?>

                        <!--EVENT CONTANT START-->
                        <div class="span6">
                            <div class="text">
                                <!--EVENT HEADER START-->
                                <!--EVENT VANUE START-->
                                <div class="event-vanue">
                                    <table>
                                        <tr>
                                            <td><p class="color">Class</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i> <?php
                                            $class_idd = $row['class_id'];
                                            $class_query = mysql_query("select * from class where class_id ='$class_idd'")or die(mysql_error());
                                            $class_row = mysql_fetch_assoc($class_query);
                                            echo $class_row['class_name'];
                                            ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Subject</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i> <?php

                                            $subject_idd = $row['subject_id'];
                                            $subject_query = mysql_query("select * from subject where subject_id ='$subject_idd'")or die(mysql_error());
                                            $subject_row = mysql_fetch_assoc($subject_query);
                                            echo $subject_row['subject_title'];
                                            ?></a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Date:</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i><?php echo substr($row['start_date'],0,16); ?>  -  <?php echo substr($row['end_date'],0,16); ?> (<?php echo date('l', strtotime($row['start_date'])); ?>)</a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Venue:</p></td>
                                            <td><a><?php
                                            $branch_idd = $row['branch_id'];
                                            $branch_query = mysql_query("select * from branch where branch_id ='$branch_idd'")or die(mysql_error());
                                            $branch_row = mysql_fetch_assoc($branch_query);
                                            echo $branch_row['branch_name'].'  -  '.$branch_row['branch_address'].'  - Phone number :'.$branch_row['phone_number'];
                                            ?></a></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--EVENT CONTANT END-->

                <?php
                }
            }
            ?>
                         </div>
            <!--EVENT END-->
            </div>

            <div class="clearfix"></div>

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
