<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
				<div class="span3" id="adduser">
				<?php include('report_search.php'); ?>
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Report List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    Total Results:<span class="total_result"></span>
                                    <table class="report_heading">
                                        <tr class='report'>
                                            <th>Students</th><th>Class</th><th>Subject</th><th>Start date</th><th>Start Time</th><th>End Time</th><th>Student type</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>
