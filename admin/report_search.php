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
            <form method="post" id="add_class_report" action="report_action.php">
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
                <div class="span12">
                    <div class="row-fluid report_form_align">
                <div class="control-group span6">
                    <span class="span2"><label>Teacher</label></span>
                    <div class="controls span10">
                        <select name="user"  class="teachers_report" id="report_select1">
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
                <div class="control-group span6">
                    <span class="span2"> <label>Branch</label> </span>
                    <div class="controls span10">
                        <select name="branch"  class="branchs_report" id="report_select2">
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
            </div>
        
                <!-- commented by kalai -->
                
                <!-- <div class="control-group">
                    <label>Class :</label>
                    <div class="controls">
                        <select name = "classs" class="classs" required>
                            <option></option>
                        </select>
                    </div>
                </div> -->
                <!-- newly added by kalai -->
                <!-- <div class="control-group">
                    <label>Class :</label>
                    <div class="controls">
                        <select name = "classs" class="classs" required>
                            <option></option>
                            <?php
                            // $query = mysql_query("select * from class");
                            // while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php 
                                // echo $row['class_id']; ?>"><?php 
                                // echo $row['class_name']; ?></option>
                            <?php 
                            // } ?>

                        </select>
                    </div>
                </div> -->
               
<?php 
// $dayofweek=date("w", mktime(0, 0, 0, 7, 1, 2000));
// echo $dayofweek;
?>
               <!--  <div class="control-group">
                    <label>Subject :</label>
                    <div class="controls">
                        <select name ="subject" class="subjects_report" required>
                            <option></option>
                            <?php
                                // $query = mysql_query("select * from class");
                                // while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <option value="<?php 
                                    // echo $row['class_id']; ?>"><?php 
                                    // echo $row['class_name']; ?></option>
                            <?php 
                            // } ?>
                        </select>
                    </div>
                </div> -->
                <div class="row-fluid">
                 <div class="control-group span6">
                    <span class="span2"><label>Month</label> </span>
                    <div class="controls span10">
                        <select name="report_month[]" class="report_select3">
                            <option></option>
                            <option value="01">January </option>
                            <option value="02">February</option>
                            <option value="03">March </option>
                            <option value="04">April </option>
                            <option value="05">May </option>
                            <option value="06">June </option>
                            <option value="07">July </option>
                            <option value="08">August </option>
                            <option value="09">September </option>
                            <option value="10"> October</option>
                            <option value="11">November </option>
                            <option value="12">December </option>
                        </select>
                    </div>
                </div>
                 <div class="control-group span6">
                    <span class="span2"><label>Year</label></span>
                    <div class="controls span10">
                        <input type="text" id="datepicker_year" placeholder="Ex: 2016" name="report_year" class="report_select4" >
                    </div>
                </div>

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
               <!--  <div class="control-group">
                    <label>Date Range :</label>
                    <div class="controls">
                        <input id="startdate" class="span6" type="text" class="" name="startdate" value="" placeholder="From Date">
                        <span>to</span>
                        <input id="enddate" class="span6" type="text" class="" name="enddate" value="" placeholder="To Date">
                    </div>
                </div> -->
                <div class="control-group">
                    <div class="controls">
                        <button name="save" class="btn btn-success search_report">Search</button>
                    </div>
                </div>
            </form>

           <!--  <script>
                jQuery(document).ready(function ($) {
                    $("#add_class_report").submit(function (e) {
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
                                   $('.print').css('display','block');
                                } else {
                                    $('.total_result').text('0');
                                    $('.report').nextAll('tr').remove();
                                    alert('No result found');

                                }
                            }
                        });
                    });
                });
            </script> -->
                                <script>
$("#datepicker_year").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});

            </script>

  
        </div>
    </div>
</div>
<!-- /block -->










         
           
        