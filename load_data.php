<?php

require_once 'dbcon.php';
$limit = 12;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit; 
					if(isset($_GET['subject'])){
						if($_GET['subject'] != 'nil'){
							
							$subject = $_GET['subject'];
							$sql1 = mysql_query("select * from teacher_class_subject_branch
                                                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id 
                                                LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id 
                                                LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
                                                LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id where LOWER(subject.subject_title) = '$subject' LIMIT $start_from, $limit
                                                ")or die(mysql_error());
						}else if($_GET['subject'] =='nil') {
							
							$sql1 = mysql_query("select * from teacher_class_subject_branch
                                                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id 
                                                LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id 
                                                LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
                                                LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id LIMIT $start_from, $limit
                                                ")or die(mysql_error());
					}	}
						else  {
							
							$sql1 = mysql_query("select * from teacher_class_subject_branch
                                                LEFT JOIN branch ON branch.branch_id = teacher_class_subject_branch.branch_id 
                                                LEFT JOIN class ON class.class_id = teacher_class_subject_branch.class_id 
                                                LEFT JOIN subject ON subject.subject_id = teacher_class_subject_branch.subject_id
                                                LEFT JOIN users ON users.user_id = teacher_class_subject_branch.user_id LIMIT $start_from, $limit
                                                ")or die(mysql_error());
						}	
while ($row1 = mysql_fetch_assoc($sql1)) {  
$id = $row1['teacher_class_subject_branch_id'];
?>
								
                                <div  class ="span3">
                                    <div class="course">
                                        <div class="thumb">
                                            <a href="courses-detail.php<?php echo '?id=' . $id; ?>"></a>
                                            
                                        </div>
                                        <div class="text">
                                            <div class="header">
                                                <h4><?php echo $row1['class_name']; ?></h4>
                                                <div class="rating">
                                                   
                                                </div>
                                            </div>
                                            <div class="course-name">
                                                <p><?php echo $row1['subject_code']; ?><?php echo $row1['subject_title']; ?></p>
                                                
                                            </div>
                                            <div class="course-detail-btn">
                                                <?php
                                                if($row1['allowed_student'] <= $row1['current_student_count'] )
                                                {
                                                        echo '<a href="#">Course Not available</a>';
                                                }
                                                else{
                                                ?>
                                                
                                                <a href="courses-detail.php<?php echo '?id=' . $id; ?>">Detail</a>
                                                <?php
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<?php  
};  
?> 