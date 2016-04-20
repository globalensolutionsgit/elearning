<?php include('header.php'); ?>

<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
				<div class="span7" id="adduser">
				<?php include('report_search.php'); ?>
				</div>
                <div class="span2" id="">
                     <div class="row-fluid">
                        <!-- block -->
                       <!--  <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Report List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12 print_area">
                                    Total Results:<span class="total_result"></span>
                                    <table class="report_heading">
                                        <tr class='report'>
                                            <th>Branch</th><th>Studentname</th><th>day</th><th>date</th><th>start_time</th><th>end_time</th><th>Type</th>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr><td colspan="7"><button type="button" class="print btn btn-success" style="display:none;">Print</button></td></tr>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
    </html>