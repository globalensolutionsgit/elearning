<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar_dashboard.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Teacher Preferances</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <form>
                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Student</th>
                                                <th>Branch</th>
                                                <th>Class</th>
                                                <th>Subject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $subject_query = mysql_query("select * from student_requests LEFT JOIN users ON users.user_id = student_requests.student_id
                                                                                                        LEFT JOIN class ON class.class_id = student_requests.class_id
                                                                                                        LEFT JOIN branch ON branch.branch_id = student_requests.branch_id
                                                                                                        LEFT JOIN subject ON subject.subject_id = student_requests.subject_id where users.user_type = 'student'
                                                                                                         ")or die(mysql_error());
                                                while($row = mysql_fetch_array($subject_query)){
                                                $id = $row['subject_id'];
                                                ?>
                                            <tr>
                                                <td width="30">
                                                    <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                </td>
                                                <td><?php echo $row['firstname'];  ?></td>
                                                <td><?php echo $row['branch_name'];  ?></td>
                                                <td><?php echo $row['class_name'];  ?></td>
                                                <td><?php echo $row['subject_title'];  ?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
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
