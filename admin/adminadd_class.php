<!-- block -->
<!-- <div class="control-group span4">
                        <label>Regions</label>
                        <div class="controls">
                            <select name="region"  class="regions"  >
                                <option></option>
                                <?php
                                //foreach ($regions as $key => $value) {
                                    //echo "<option value=" . $key . ">" . $value . "</option>";
                                //}
                                ?>
                            </select>
                        </div>
                    </div> -->
                  <!--   <div class="control-group span4">
                        <label>Branch</label>
                        <div class="controls">
                            <select name="branch"  class="branchs"  >
                                <option></option>
                            </select>
                        </div>
                    </div> -->
                    <!-- <div class="control-group span6">
                        <label>Branch</label>
                        <div class="controls">
                            <select name="branch"  class="branches_time"  >
                                <option>Select Branch</option>
                                <?php
                                //$query = mysql_query("select * from branch");
                                //while ($row = mysql_fetch_array($query)) {
                                ?>
                                <option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
                                <?php //} ?>
                            </select>
                        </div>
                    </div> -->

                
				
                    <!-- <div class="control-group span6">
                        <label>Start date :</label>
                        <div class="controls">
                            <input id="startdate" class="span6" type="text" class="" name="startdate" value="" >
                        </div>
                    </div> -->
<?php
$regions = array('NS' => 'North Singapore', 'NES' => 'North East Singapore', 'ES' => 'East Singapore', 'CS' => 'Central Singapore', 'WS' => 'West Singapore');
$url = $_SERVER['PHP_SELF'];
if(isset($_GET['insert'])){
	echo "<script>alert('Data inserted successfully!');var url ='".$url."'; window.location = url ;</script>";
}

?>
<div class="block">
    <div class="navbar navbar-inner block-header">
        <div id="" class="muted pull-left"><h4><i class="icon-plus-sign"></i> Add class</h4></div>
    </div>
    <div class="block-content collapse in">
        <div class="span12">
            <form method="post" id="add_class" class="form_submit" action="schdule_allocation.php">
                <div>
    				<div class="control-group span12">
                        <label>Teacher</label>
                        <div class="controls">
                            <select name="user"  class="teacher" >
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
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
							<input type="checkbox" class="days" name="sunday" id="days" value="sun" >Sunday
						</div>

						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="sunday_branch[]"  class="branches_time"   disabled>
	                            			 <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "sunday_classs[]" class="classs"  disabled>
			                                 <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="sunday_subject[]" class="subjects"  disabled>
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "sunday_starttime[]" class="starttime" disabled>
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "sunday_endtime[]" class="endtime"  disabled>
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
							<input type="checkbox" class="days" name="monday" id="days" value="mon" >Monday
						</div>
						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="monday_branch[]"  class="branches_time" disabled  >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "monday_classs[]" class="classs"  disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="monday_subject[]" class="subjects"  disabled  >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "monday_starttime[]" class="starttime"  disabled>
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "monday_endtime[]" class="endtime"  disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button " type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
							<input type="checkbox" class="days" name="tuesday" id="days" value="tue" >Tuesday
						</div>

						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="tuesday_branch[]"  class="branches_time" disabled >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "tuesday_classs[]" class="classs" disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="tuesday_subject[]" class="subjects" disabled >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "tuesday_starttime[]" class="starttime" disabled>
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "tuesday_endtime[]" class="endtime" disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
								<input type="checkbox" class="days" name="wednesday" id="days" value="wed" >Wednesday
						</div>

						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="wednesday_branch[]"  class="branches_time" disabled >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "wednesday_classs[]" class="classs" disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="wednesday_subject[]" class="subjects" disabled >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "wednesday_starttime[]" class="starttime" disabled >
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "wednesday_endtime[]" class="endtime" disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
							<div class="input_schedule">
								<input type="checkbox" class="days" name="thursday" id="days" value="thu" >Thursday
							</div>

						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />

							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="thursday_branch[]"  class="branches_time" disabled >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "thursday_classs[]" class="classs" disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="thursday_subject[]" class="subjects" disabled >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "thurday_starttime[]" class="starttime" disabled >
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "thursday_endtime[]" class="endtime" disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
							<input type="checkbox" class="days" name="friday" id="days" value="fri" >Friday
						</div>
						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="friday_branch[]"  class="branches_time" disabled >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "friday_classs[]" class="classs" disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="friday_subject[]" class="subjects" disabled >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "friday_starttime[]" class="starttime" disabled >
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "friday_endtime[]" class="endtime" disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
                <div>
					<div class="control-group span12 class_schedule_border one_day">
						<div class="input_schedule">
							<input type="checkbox" class="days" name="saturday" id="days" value="sat" >Saturday
						</div>

						<div class="controls clone_content">
							<input type="hidden" class="clone_content_count" value="1" />
							
							<div class="control-group">
								<div class="control-group span6">
	                        		<label>Branch</label>
	                    			<div class="controls">
	                        			<select name="saturday_branch[]"  class="branches_time" disabled >
	                            			<option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from branch");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['branch_id']; ?>"><?php echo $row['branch_name']; ?></option>
	                            			<?php } ?>
	                        			</select>
	                    			</div>
	                    		</div>
	                    		<div class="control-group span6">
			                        <label>Class :</label>
			                        <div class="controls">
			                            <select name = "saturday_classs[]" class="classs" disabled >
			                                <option value="">Select Branch</option>
			                                <?php
			                                	$query = mysql_query("select * from class");
			                                	while ($row = mysql_fetch_array($query)) {
			                                ?>
	                            			<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
	                            			<?php } ?>
			                            </select>
			                        </div>
			                    </div>
                    		</div>
                			<div class="control-group">
                				<div class="control-group span4">
			                        <label>Subject :</label>
			                        <div class="controls">
			                            <select name ="saturday_subject[]" class="subjects" disabled >
			                                <option value="">Select subject</option>
			                            </select>
			                        </div>
			                    </div>
                				<div class="control-group span3">
                					<label>Start time : </label>
									<!-- <input  class="" type="time" class="" name="starttime[]" value="" placeholder="18:55"> -->
									<select name = "saturday_starttime[]" class="starttime" disabled >
		                                <option value="">Select Time</option>
		                                <option value="00:00">00:00</option>
		                                <option value="00:30">00:30</option>
		                                <option value="01:00">01:00</option>
		                                <option value="01:30">01:30</option>
		                                <option value="02:00">02:00</option>
		                                <option value="02:30">02:30</option>
		                                <option value="03:00">03:00</option>
		                                <option value="03:30">03:30</option>
		                                <option value="04:00">04:00</option>
		                                <option value="04:30">04:30</option>
		                                <option value="05:00">05:00</option>
		                                <option value="05:30">05:30</option>
		                                <option value="06:00">06:00</option>
		                                <option value="06:30">06:30</option>
		                                <option value="07:00">07:00</option>
		                                <option value="07:30">07:30</option>
		                                <option value="08:00">08:00</option>
		                                <option value="08:30">08:30</option>
		                                <option value="09:00">09:00</option>
		                                <option value="09:30">09:30</option>
		                                <option value="10:00">10:00</option>
		                                <option value="10:30">10:30</option>
		                                <option value="11:00">11:00</option>
		                                <option value="11:30">11:30</option>
		                                <option value="12:00">12:00</option>
		                                <option value="12:30">12:30</option>
		                                <option value="13:00">13:00</option>
		                                <option value="13:30">13:30</option>
		                                <option value="14:00">14:00</option>
		                                <option value="14:30">14:30</option>
		                                <option value="15:00">15:00</option>
		                                <option value="15:30">15:30</option>
		                                <option value="16:00">16:00</option>
		                                <option value="16:30">16:30</option>
		                                <option value="17:00">17:00</option>
		                                <option value="17:30">17:30</option>
		                                <option value="18:00">18:00</option>
		                                <option value="18:30">18:30</option>
		                                <option value="19:00">19:00</option>
		                                <option value="19:30">19:30</option>
		                                <option value="20:00">20:00</option>
		                                <option value="20:30">20:30</option>
		                                <option value="21:00">21:00</option>
		                                <option value="21:30">21:30</option>
		                                <option value="22:00">22:00</option>
		                                <option value="22:30">22:30</option>
		                                <option value="23:00">23:00</option>
		                                <option value="23:30">23:30</option>
		                                <option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span3">
									<label>End time : </label>
									<!-- <input id="endtime" class="" type="text" class="" name="endtime[]" value="" placeholder="21:30"> -->
									<select name = "saturday_endtime[]" class="endtime" disabled >
										<option value="">Select Time</option>
										<option value="00:00">00:00</option>
										<option value="00:30">00:30</option>
										<option value="01:00">01:00</option>
										<option value="01:30">01:30</option>
										<option value="02:00">02:00</option>
										<option value="02:30">02:30</option>
										<option value="03:00">03:00</option>
										<option value="03:30">03:30</option>
										<option value="04:00">04:00</option>
										<option value="04:30">04:30</option>
										<option value="05:00">05:00</option>
										<option value="05:30">05:30</option>
										<option value="06:00">06:00</option>
										<option value="06:30">06:30</option>
										<option value="07:00">07:00</option>
										<option value="07:30">07:30</option>
										<option value="08:00">08:00</option>
										<option value="08:30">08:30</option>
										<option value="09:00">09:00</option>
										<option value="09:30">09:30</option>
										<option value="10:00">10:00</option>
										<option value="10:30">10:30</option>
										<option value="11:00">11:00</option>
										<option value="11:30">11:30</option>
										<option value="12:00">12:00</option>
										<option value="12:30">12:30</option>
										<option value="13:00">13:00</option>
										<option value="13:30">13:30</option>
										<option value="14:00">14:00</option>
										<option value="14:30">14:30</option>
										<option value="15:00">15:00</option>
										<option value="15:30">15:30</option>
										<option value="16:00">16:00</option>
										<option value="16:30">16:30</option>
										<option value="17:00">17:00</option>
										<option value="17:30">17:30</option>
										<option value="18:00">18:00</option>
										<option value="18:30">18:30</option>
										<option value="19:00">19:00</option>
										<option value="19:30">19:30</option>
										<option value="20:00">20:00</option>
										<option value="20:30">20:30</option>
										<option value="21:00">21:00</option>
										<option value="21:30">21:30</option>
										<option value="22:00">22:00</option>
										<option value="22:30">22:30</option>
										<option value="23:00">23:00</option>
										<option value="23:30">23:30</option>
										<option value="24:00">24:00</option>
			                        </select>
								</div>
								<div class="control-group span2">
									<button class="btn btn-success remove_button dn" type="button">Remove</button>
								</div>
							</div>
						</div>
						<div style="clear: both;"> </div>
						<div class="control-group span2 sch_add_btn">
							<button class="btn btn-success add_button" type="button" disabled>Add</button>    
						</div>
					</div>
                </div>
                <div style="clear: both;"> </div>
			<!-- </div> -->
			<div id="student_list control-group span12">
				<button type="submit" class="btn btn-success allocate_button btn_submit" value="submit">Allocate</button>
			</div> 
			</form>
		</div> 
	</div>  
</div>