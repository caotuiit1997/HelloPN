<?php
    include("../../../Controllers/RolesController.php");

    $role = new RolesController();
    // var_dump($role) or die();
    if (isset($_POST['submit'])) {
    	$role_id = $_POST['role_id'];
    	$role_name = $_POST['role_name'];
    	$role_description = $_POST['role_description'];
    	$role_created = $_POST['role_created'];
    	$role_updated = $_POST['role_updated'];

    	$role->add($role_id,$role_name,$role_description,$role_created,$role_updated);
    	// Return message after submit
    	if ($role->returnSuccessMessage()) {

    		echo $role->returnSuccessMessage();

    	}else if ($role->returnFailedMessage()) {
    		
    		echo $role->returnFailedMessage();
    	}


    }
?>
<div class="page-content">
	<?php include("../Elements/page_form_header.php"); ?>
	<div class="row">
		<div class="col-xs-12">
			<!-- ADD USER FORM -->
			<form action="" class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					<div class="col-sm-9">
						<input type="hidden" id="form-field-1" class="col-xs-10 col-sm-5" name="role_id" value="<?php echo $role->idRandom(); ?>"/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter role name" name="role_name" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role description </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Enter description" class="col-xs-10 col-sm-5" name="role_description"/>
					</div>
				</div>
					<!-- Created date -->
                		<input type="hidden" id="form-field-1" placeholder="Enter description" class="col-xs-10 col-sm-5" name="role_created" value="<?php echo date("Y-m-d h:i:sa");?>"/>
                	<!-- Updated date -->
                		<input type="hidden" id="form-field-1" placeholder="Enter description" class="col-xs-10 col-sm-5" name="role_updated" value="<?php echo date("Y-m-d h:i:sa");?>"/>
				<!-- Button -->
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button name="submit" class="btn btn-info" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							Add
						</button>

						&nbsp; &nbsp; &nbsp;
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							Reset
						</button>
					</div>
				</div><!-- /End of button -->

			</form><!-- ./End of add user form -->
		</div>
	</div>
</div>