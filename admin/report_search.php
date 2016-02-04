<!-- block -->

<?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left"><h4>Report</h4></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" id="add_class">
               <!--  <div class="control-group">
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
                <div class="control-group">
                    <label>Branch</label>
                    <div class="controls">
                        <select name="branch"  class="branchs" required>
                            <option></option>
                             <?php
                                $query = mysql_query("select * from branch");
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <!-- commented by kalai -->
                <div class="control-group">
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
                <!-- <div class="control-group">
                    <label>Class :</label>
                    <div class="controls">
                        <select name = "classs" class="classs" required>
                            <option></option>
                        </select>
                    </div>
                </div> -->
                <!-- newly added by kalai -->
                <div class="control-group">
                    <label>Class :</label>
                    <div class="controls">
                        <select name = "classs" class="classs" required>
                            <option></option>
                            <?php
                            $query = mysql_query("select * from class");
                            while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
                            <?php } ?>

                        </select>
                    </div>
                </div>

                <div class="control-group">
                    <label>Subject :</label>
                    <div class="controls">
                        <select name ="subject" class="subjects" required>
                            <option></option>
                        </select>
                    </div>
                </div>
                <!-- <div class="control-group">
                    <label>Start date and Time :</label>
                    <div class="controls">
                    <!- Commented By kalai ->
                        <!- <input id="startdate" class="span6" type="text" class="" name="startdate" value="" > ->
                        <input id="startdatetime" class="span6" type="text" class="" name="startdate" value="" >
                    </div>
                </div> -->
                <div class="control-group">
                    <label>Date Range :</label>
                    <div class="controls">
                        <input id="startdate" class="span6" type="text" class="" name="startdate" value="" placeholder="From Date">
                        <span>to</span>
                        <input id="enddate" class="span6" type="text" class="" name="enddate" value="" placeholder="To Date">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button name="save" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>

            <script>
                jQuery(document).ready(function ($) {
                    $("#add_class").submit(function (e) {
                        e.preventDefault();
                        var _this = $(e.target);
                        var formData = $(this).serialize();
                        $.ajax({
                            type: "POST",
                            url: "report_action.php",
                            data: formData,
                            success: function (data) {
                                if (data)
                                {
                                   $('.report').nextAll('tr').remove();
                                   $(data).insertAfter('.report');
                                   $('.total_result').text($('.report_heading tr').length-1);
                                } else {
                                    $('.total_result').text('0');
                                    $('.report').nextAll('tr').remove();
                                    alert('No result found');

                                }
                            }
                        });
                    });
                });
            </script>

        </div>
    </div>
</div>
<!-- /block -->
