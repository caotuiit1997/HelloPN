<?php
    include("../../../Controllers/RolesController.php");

    $role = new RolesController();
    $roleData = $role->index();
?>
<div class="page-content">
	<?php include("../Elements/page_form_header.php"); ?>
	<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table  table-bordered table-hover">
					<thead>
					<tr>
						<th class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</th>
						<th>Role ID</th>
						<th class="detail-col">Role name</th>
						<th>Role Description</th>
						<th>
							<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
							Created
						</th>
						<th class="hidden-480">Updated</th>

						<th>Actions</th>
					</tr>
					</thead>

					<tbody>
					<?php
					// if(!($role->returnFailedMessage())) { 
					    foreach ($roleData as $key => $role) {

					?>

					<tr>
						<td class="center">
							<label class="pos-rel">
								<input type="checkbox" class="ace" />
								<span class="lbl"></span>
							</label>
						</td>

						<td>
							<a href="#"><?php echo $role["PNV_role_id"];?></a>
						</td>
						<td class="center">
							<div class="action-buttons">
								<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
									<?php echo $role["PNV_role_name"];?>
								</a>
							</div>
						</td>

						<td><?php echo $role["PNV_role_description"];?></td>
						<td><?php echo $role["PNV_role_created"];?></td>

						<td class="hidden-480">
							<span class="label label-sm label-warning"><?php echo $role["PNV_role_updated"];?></span>
						</td>

						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<button class="btn btn-xs btn-success">
									<i class="ace-icon fa fa-check bigger-120"></i>
								</button>

								<a href="?page=roles&action=edit&id=<?php echo $role['PNV_role_id']; ?>" class="btn btn-xs btn-info">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>

								<a href="?page=roles&action=delete&id=<?php echo $role['PNV_role_id']; ?>" class="btn btn-xs btn-danger">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</a>
							</div>
						</td>
					</tr>
					<?php
				       } //End foreach
					// }else {
     //                    echo "<tr>".$role->returnFailedMessage()."</tr>";
					// } 
					?>
					</tbody>
				</table><!-- End of tabbles -->
			</div>
		</div>
	</div>
</div>
</div><!-- / .page-content -->
