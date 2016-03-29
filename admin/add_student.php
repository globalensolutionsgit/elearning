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
    <div class="block-content">
        <div class="navbar navbar-inner block-header">
            <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add Student</h4></div>
        </div>
        <div class="block-content collapse in span12">
			<div class="control-group span9">
			   <form method="post" id="add_class" action="insert_student.php">
			   	   <input type="hidden" name="class_schedule_id" value="<?php echo $_GET['sche_id']; ?>" />
				   <div id="student_list control-group span12">
                        <table class="schdule_student_list">
						    <tr><th><!-- <input type='checkbox' value='checkall' class="checkall" name='check_all'>all --></th><th>Student Name</th><th>Phone number</th><th>Email</th></tr>
    						<?php
    	                        $query2 = mysql_query("select * from users inner join branch on branch.branch_id = users.city inner join class on class.class_id = users.classes  where users.user_type='student' and users.city='$branch_id' and users.classes='$class_id'");
    	                        $count = mysql_num_rows($query2);
                                if ($count > 0) {
                                    while($row=mysql_fetch_array($query2)){
    			                        echo "<tr><td><input type='checkbox' value='".$row['user_id']."'class='student_list_checkbox' name='students[]'></td><td>".$row['firstname']."</td><td>".$row['phone_number']."</td><td>".$row['email']."</td></tr>";
                                    }
                                }else{
                                    echo 'nil';
                                }
                            ?>
                        </table>
                    </div>
                    <button name="get" class="btn btn-success" type="submit">submit</button>
        		</form>
    		</div> <!-- span -->
		</div>  <!-- /block-content -->
	</div> <!-- /block -->
</body>