<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('sidebar_dashboard.php'); ?>
		
                <div class="span9" id="content">
                     <div class="row-fluid">
					 <a href="add_branch.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Branch</a>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Branch List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form action="delete_branch.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#branch_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
											    <th></th>
												<th>Branch Region</th>
												<th>Branch Name</th>
												<th>Branch Owner</th>
												<th>Branch Address</th>
												<th>Branch Email</th>
												<th>Branch Phone No.</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
											
												<?php
											$subject_query = mysql_query("select * from branch")or die(mysql_error());
											while($row = mysql_fetch_array($subject_query)){
											$id = $row['branch_id'];
											?>
										
											<tr>
													<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
													</td>
													<td><?php echo $row['region']; ?></td>
													<td><?php echo $row['branch_name']; ?></td>
													<td><?php echo $row['branch_owner']; ?></td>
													<td><?php echo $row['branch_address']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['phone_number']; ?></td>
												
													<td width="30"><a href="edit_branch.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
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