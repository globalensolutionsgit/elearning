<?php include('dbcon.php'); ?>
<html>
    <head>
        <meta charset="utf-8">
        <title>E-Learning Project Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CUSTOM CSS -->
        <link href="css/style.css" rel="stylesheet" media="screen">
        <link href="css/color.css" rel="stylesheet" media="screen">
        <link href="css/transitions.css" rel="stylesheet" media="screen">
        <!-- BOOTSTRAP -->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <!-- BX SLIDER-->
        <link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">
        <!-- OWL CAROUSEL -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
        <!-- PARALLAX BACKGROUNDS -->
        <link href="css/parallax.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <!--WRAPPER START-->
        <div class="wrapper">
            <!--HEADER START-->
            <header>
                <!--TOP STRIP START-->
                <div class="top-strip">
                    <div class="container">

                        <!--ACCOUNT SECTION START-->
                        <div class="account">
                            <ul>

								<?php
									if(session_id() == '') {
    session_start();
}
									//Check whether the session variable SESS_MEMBER_ID is present or not
									if (isset($_SESSION['user_id'])) {
								?>

                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#">
                                            My Account
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                            <!--li><a href="#">Profile</a></li-->
                                            <?php if (($_SESSION['user_type']) == 'student') { ?> 
											<!-- no need to request as student  <li><a href="my_request_class.php">My Request</a></li> -->
											<li><a href="courses.php">My Schedule</a></li> 
											<?php } else if(($_SESSION['user_type']) == 'teacher'){?>
										<!--commented by siva	<li><a href="teacher_scheduled_class.php">My Schedules</a></li> -->
											<li><a href="teacher_dashboard.php">Today class</a></li> <?php } ?>
                                            <!---li><a href="#">Account Setting</a></li>
                                            <li><a href="#">Privacy Setting</a></li-->
											<li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
								<?php
									}else{
								?><!--<li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#"  >
                                            Register
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="account">
                                            <li> <a href="student-login.php">Student Register</a></li>
                                            <li> <a href="teacher-login.php">Teacher Register</a></li>
                                        </ul>
                                    </div>
                                </li> -->
                                <li><a href="signin.php">Sign In</a></li>
                                                                        <?php } ?>
                            </ul>
                        </div>
                        <!--ACCOUNT SECTION START-->
                    </div>
                </div>
                <!--TOP STRIP END-->
                <!--NAVIGATION START-->
                <div class="navigation-bar">
                    <div class="container">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="navigation">
                            <div class="navbar">
                                <div class="navbar-inner" >
                                    <div class="container">
                                        <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <div class="nav-collapse collapse">
                                            <ul>
                                                <li><a href="about-us.php">About us</a></li>
                                                <!-- <li><a href="javascript:void(0)">Courses</a>
                                                    <ul>
                                                        <?php

                                                //            $search = mysql_query("select DISTINCT class_name,subject_title from teacher_class_subject_branch

                                                //LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id
                                                //LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id")or die(mysql_error());
                                                            //while ($row1 = mysql_fetch_assoc($search)) { ?>

                                                        <li><a href="courses.php?class=<?php //echo $row1['class_name']; ?>&subject=<?php echo $row1['subject_title']; ?>"><?php echo $row1['class_name']; ?>-<?php echo $row1['subject_title']; ?></a></li>
                                                        <?php //} ?>
                                                        <li><a href="courses-detail.php">Course Detail</a></li>
                                                    </ul>
                                                </li> -->

                                                <li><a href="contact-us.php">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--NAVIGATION END-->
            </header>
            <!--HEADER END-->
            <!--BANNER START-->
            <div class="banner">
                <ul class="bxslider">
                    <li><img src="images/banner1.jpg" alt=""> </li>
                    <li><img src="images/banner2.jpg" alt=""></li>
                    <li><img src="images/banner3.jpg" alt=""></li>
                    <li><img src="images/banner4.jpg" alt=""></li>
                </ul>
                <div class="newsletters">
                    <h1></h1>
                    <h4></h4>
                    <!-- <div class="subscribe web">
                        <input type="text" class="input-block-level search_keyword" id="search_keyword_id" placeholder="Search your course">
                        <div id="result"></div>
                        <button>Search</button>
                    </div> -->
                </div>
            </div>

            <script type="text/javascript" src="//code.jquery.com/jquery-1.8.0.min.js"></script>

            <script>
                jQuery(document).ready(function () {
                    $(function () {

                        $(".search_keyword").keyup(function ()
                        {
                            var search_keyword_value = $(this).val();

                            var dataString = 'search_keyword=' + search_keyword_value;

                            if (search_keyword_value !== '')
                            {
                                $.ajax({
                                    type: "POST",
                                    url: "search.php",
                                    data: dataString,
                                    cache: false,
                                    success: function (html)
                                    {
                                        $("#result").html(html).show();
                                    }
                                });
                            }
                            return false;
                        });

                        $("#result").on("click", function (e) {
                            var $clicked = $(e.target);
                            var el = $clicked[0].tagName.toLowerCase();
                            if (el === 'strong') {
                                $clicked = $clicked.parent();
                            }
                            var el = $clicked[0].tagName.toLowerCase();
                            if (el === 'span') {
                                $clicked = $clicked.parent();
                            }
                            var name = $clicked.find('.country_name').html();
                            var rex = /(<([^>]+)>)/ig;
                            var decoded = name.replace(rex, "");
                            $('#search_keyword_id').val(decoded);

                        });

                        $(document).on("click", function (e) {
                            var $clicked = $(e.target);
                            if (!$clicked.hasClass("search_keyword")) {
                                $("#result").fadeOut();
                            }
                        });

                        $('#search_keyword_id').click(function () {
                            $("#result").fadeIn();
                        });

						$('.subscribe button').click(function(){
							var subject = $('#search_keyword_id').val();
							window.location = "courses.php?subject="+subject;
						});
                    });
                });
            </script>
            <!--BANNER END-->
