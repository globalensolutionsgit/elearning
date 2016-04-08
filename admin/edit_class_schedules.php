<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
if(isset($_GET['classid']) && isset($_GET['branch_id'])){
    $class_id = $_GET['classid'];
    $branch_id = $_GET['branch_id'];
}else{
    header('Location:404.php');
}
// echo "<pre>";
// print_r(mysql_fetch_array($query2));
// echo "</pre>";
?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
			<div class="span12" id="adduser">
				<?php 
				//include('sidebar_dashboard.php'); ?>
				
				<?php include('adminedit_class.php'); ?>		   			
				</div>
                <!-- <div class="span6" id="">
                     <div class="row-fluid"> -->
                        <!-- block -->
                      <!--  <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Class List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" action="delete_schedule.php">
									<?php 
									//include_once('teacher_class.php');
									?>	
								</form>
                                </div>
                            </div>
                        </div>  -->
                        <!-- /block -->
                    <!-- </div> 


                </div> -->
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>