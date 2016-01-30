<!-- block -->
<?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add class</h4></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" id="add_class" action="schdule_allocation.php">
                <div>
                    <!-- <div class="control-group span4">
                        <label>Regions</label>
                        <div class="controls">
                            <select name="region"  class="regions" required>
                                <option></option>
                                <?php
                                foreach ($regions as $key => $value) {
                                    echo "<option value=" . $key . ">" . $value . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div> -->
                  <!--   <div class="control-group span4">
                        <label>Branch</label>
                        <div class="controls">
                            <select name="branch"  class="branchs" required>
                                <option></option>
                            </select>
                        </div>
                    </div> -->
                    <div class="control-group span4">
                        <label>Branch</label>
                        <div class="controls">
                            <select name="branch"  class="branchs" required>
                                <option>Select Branch</option>
                                 <?php
                                $query = mysql_query("select * from branch");
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
    				<div class="control-group span4">
                        <label>Teacher</label>
                        <div class="controls">
                            <select name="user"  class="teacher" required>
                                <option></option>
                                <?php
                                $query = mysql_query("select * from users where user_type = 'teacher'");
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $row['user_id']; ?>"><?php echo $row['username']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="control-group span6">
                        <label>Class :</label>
                        <div class="controls">
                            <select name = "classs" class="classs" required>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group span6">
                        <label>Subject :</label>
                        <div class="controls">
                            <select name ="subject" class="subjects" required>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="control-group span5">
                        <label>Start date :</label>
                        <div class="controls">

                            <input id="startdate" class="span6" type="text" class="" name="startdate" value="" >
                        </div>
                    </div>
                    <!-- newly added by kalai -- >
                    <!-- start -->
                    <div class="control-group span5">
                        <label>Time :</label>
                        <div class="controls">
                            <input id="starttime" class="span6" type="text" class="" name="starttime" value="" placeholder="Start Time"> 
                            <!-- <label> to </label> -->
                            <input id="endtime" class="span6" type="text" class="" name="endtime" value="" placeholder="End Time">
                        </div>
                    </div>
                    <!-- end -->
                    <!-- commented by kalai -->
    				<!-- <div class="control-group span5">
                        <label>End date :</label>
                        <div class="controls">
                            <input id="enddate" class="span6" type="text" class="" name="enddate" value="" >
                        </div>
                    </div> -->
                    <div class="control-group span2 margin_top_and_left">
                        <div class="controls">
                            <!-- <button class="btn btn-success">Get</button> -->
                            <span class="get_button">Get</span>

                        </div>
                    </div>
                    <div id="student_list">
                        <table class="schdule_student_list">

                        </table>
                        <input type="checkbox" class="selectall dn">
                        <button class="btn btn-success allocate_button dn">Allocate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /block -->
