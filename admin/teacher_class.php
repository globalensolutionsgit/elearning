			

<ul id="da-thumbs" class="da-thumbs">
    <?php
    $query = mysql_query("select * from teacher_class_subject_branch
                LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id
                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id
				LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id
				LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
                ")or die(mysql_error());
    $count = mysql_num_rows($query);

    if ($count > 0) {
        while ($row = mysql_fetch_array($query)) {
            $id = $row['teacher_class_subject_branch_id'];
            ?>
            <li id="del<?php echo $id; ?>">

                <!--img src ="<?php //echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt=""-->
              
				<p class="user"><?php echo $row['firstname']; ?></p>
                <p class="branch"><?php echo $row['region']; ?>-<?php echo $row['branch_name']; ?></p>
				<p class="class"><?php echo $row['class_name']; ?></p>
                <p class="subject"><?php echo $row['subject_code']; ?>-<?php echo $row['subject_title']; ?></p>
				<p class="dates"><?php echo $row['start_date']; ?>-<?php echo $row['end_date']; ?></p>
				<p class="student"><?php echo $row['current_student_count']; ?> of <?php echo $row['allowed_student']; ?> Students</p>
				<a href="edit_class_schedules.php<?php echo '?id='.$id; ?>" data-toggle="modal"><i class="icon-trash"></i> Edit</a>
                <a href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	

            </li>
            <?php include("delete_class_modal.php"); ?>
            <?php
        }
    } else {
        ?>
        <div class="alert alert-info"><i class="icon-info-sign"></i> No Class Currently Added</div>
    <?php } ?>
</ul>