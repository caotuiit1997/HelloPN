<?php
    include("../../../Controllers/RolesController.php");

    $role = new RolesController();
    if ($_GET["id"]) {
      $id = $_GET["id"];
      //var_dump($id);
      $roleData = $role->view($id);
    foreach ($roleData as $key => $role) {
    }
?>

<div class="page-content">
  <?php include("../Elements/page_form_header.php"); ?>
  <div class="row">
    <div class="col-xs-12">
      <!-- ADD USER FORM -->
      <form action="<?php echo '?page=roles&action=update&id='.$id; ?>" class="form-horizontal" role="form" method="POST">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role name </label>

          <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Enter role name" name="role_name" class="col-xs-10 col-sm-5" value="<?php echo $role['PNV_role_name'];?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role description </label>

          <div class="col-sm-9">
            <input type="text" id="form-field-1" placeholder="Enter description" class="col-xs-10 col-sm-5" name="role_description" value="<?php echo $role['PNV_role_description'];?>"/>
          </div>
        </div>
        <!-- Updated date -->
          <input type="hidden" id="form-field-1" placeholder="Enter description" class="col-xs-10 col-sm-5" name="role_updated" value="<?php echo date("Y-m-d h:i:sa");?>"/>
        <!-- Button -->
        <div class="clearfix form-actions">
          <div class="col-md-offset-3 col-md-9">
            <button name="submit" class="btn btn-info" type="submit">
              <i class="ace-icon fa fa-check bigger-110"></i>
              Edit
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
<?php
  }
?>

