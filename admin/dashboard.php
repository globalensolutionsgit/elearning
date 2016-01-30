<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <!--/span-->
            <div class="span9" id="content">
                <div class="row-fluid"></div>

                <div class="row-fluid">

                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">E-learning</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">

                                <?php
                                $query_reg_teacher = mysql_query("select user_type from users where status = '1' and user_type = 'teacher' ")or die(mysql_error());
                                $count_reg_teacher = mysql_num_rows($query_reg_teacher);
                                ?>

                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Teacher</strong>

                                    </div>
                                </div>
                                
                                <?php
                                $query_student = mysql_query("select user_type from users where status = '1' and user_type = 'student' ")or die(mysql_error());
                                $count_student = mysql_num_rows($query_student);
                                ?>

                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Students</strong>

                                    </div>
                                </div>
                                
                                <?php
                                $query_branch = mysql_query("select * from branch")or die(mysql_error());
                                $count_branch = mysql_num_rows($query_branch);
                                ?>


                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_branch; ?>"><?php echo $count_branch ?></div>
                                    <div class="chart-bottom-heading"><strong>Branchs</strong>

                                    </div>
                                </div>


                                <?php
                                $query_class = mysql_query("select * from class")or die(mysql_error());
                                $count_class = mysql_num_rows($query_class);
                                ?>

                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Class</strong>

                                    </div>
                                </div>


                            


                                <?php
                                $query_subject = mysql_query("select * from subject")or die(mysql_error());
                                $count_subject = mysql_num_rows($query_subject);
                                ?>

                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_subject; ?>"><?php echo $count_subject; ?></div>
                                    <div class="chart-bottom-heading"><strong>Subjects</strong>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /block -->

                    </div>
                </div>




            </div>
        </div>

        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>