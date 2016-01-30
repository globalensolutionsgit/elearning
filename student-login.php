<?php
require_once 'header_innerpage.php';
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$classes = array('PR' => 'Primary', 'SEC' => 'Secondary', 'PSEC' => 'Post Secondary');

?>
<!--CONTANT START-->
<div class="page-heading">
    <div class="container">
        <h2>Students Register </h2>
    </div>
</div>
<div class="contant">
    <div class="container">
        <div class="row">
            <div class="span9">
                <div class="form-box">
                    <form enctype="multipart/form-data" action="student_reg.php" method="POST" id="stu_reg" role="form">
                        <div class="form-body">
                            <fieldset>
                                <h2>First time here? Sign up now!</h2>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Name</label>
                                        <input type="text" placeholder="Enter your  Name" class="input-block-level" name="fname" data-validation="required">
                                        <input type="hidden" name="user_type" value="student" >
                                    </div>
                                    <div class="span6">
                                        <label>Enter Email</label>
                                        <input type="text" placeholder="Enter your E-mail ID" class="input-block-level" name='email' data-validation="email">
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Password</label>
                                        <input type="password" placeholder="Enter Password" class="input-block-level" name="pword" data-validation="strength" data-validation-strength="2">
                                    </div>
                                    <div class="span6">
                                        <label>Enter Phone number</label>
                                        <input type="text" placeholder="Enter your Phone Number" class="input-block-level" name='phone' data-validation="number">
                                    </div>

                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Select Your Region</label>
                                        <select class="input-block-level region" name="region" data-validation-error-msg="Please select" data-validation="required">
                                            <?php
                                            foreach ($regions as $key => $value) {
                                                echo "<option value=" . $key . ">" . $value . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <label>Select Your Class</label>
                                        <select class="input-block-level classes" name="classes" >
                                            <?php
                                            foreach ($classes as $key => $value) {
                                                echo "<option value=" . $key . ">" . $value . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span6">
                                        <label>Gender</label>
                                        <select class="input-block-level" name="gender" data-validation-error-msg="Please select gender" data-validation="required">
                                            <option value='1'>Male</option>
                                            <option value='2'>Female</option>
                                        </select>
                                    </div>
                                    <div class="span6">
                                        <label>Upload Your Photo</label>
                                        <input type="file" name="photo" data-validation="mime size required" data-validation-allowing="jpg, png" data-validation-max-size="2M">
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="span12">
                                        <p class="pull-left">By registering, You accept Terms &amp; Conditions</p>
                                        <button type="submit" class="btn-style pull-right">Submit</button>
                                    </div>
                                <div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
            <div class="span3">
                <div class="sidebar">
                    <!--COURSE CATEGORIES WIDGET START-->
                    <div class="widget widget-course-categories">
                        <h2>Course Categorty</h2>
                        <ul>
                        <?php
                        require_once 'dbcon.php';
                        $search = mysql_query("select * from subject LEFT JOIN class ON class.class_id = subject.class_id
                                                    ")or die(mysql_error());
                        while ($row1 = mysql_fetch_assoc($search)) {
                        ?>
                            <li><a href="#"><?php echo $row1['class_name']; ?>-<?php echo $row1['subject_title']; ?></a></li>
                        <?php
                        }
                        ?>
                        </ul>
                    </div>
                    <!--COURSE CATEGORIES WIDGET END-->
                </div>
            </div>
        </div>
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
<!--CONTANT END-->
<!--FOOTER START-->

<?php
require_once 'footer.php';
?>
