<div class="page-content">
	<?php include("Elements/page_form_header.php"); ?>
	<div class="row">
		<div class="col-xs-12">
			<!-- ADD USER FORM -->
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> First name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Last name </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Confirm password </label>

					<div class="col-sm-9">
						<input type="password" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

					<div class="col-sm-9">
						<input type="email" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
					</div>
				</div>

				<!-- Roles -->
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Roles </label>
	                <div class="col-sm-9">
						<select class="col-xs-10 col-sm-5" id="form-field-select-2" multiple="multiple">
							<option value="AL">Admin</option>
							<option value="AK">Super Admin</option>
							<option value="AK">Educator</option>
							<option value="AK">ERO</option>
							<option value="AZ">Teacher</option>
							<option value="AR">Alumni</option>
							<option value="CA">SA board</option>
							<option value="CO">Student</option>
							<option value="CO">Guest</option>
						</select>
					</div>
				</div><!-- / End roles -->

				<!-- Button -->
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-info" type="button">
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