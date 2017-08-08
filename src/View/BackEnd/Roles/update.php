<?php
    include("../../../Controllers/RolesController.php");

    $role = new RolesController();
    //include("../../../Controllers/RolesController.php");

    $role = new RolesController();
    // var_dump($role) or die();
    if (isset($_GET['id'])) {
        if (isset($_POST['submit'])) {
          $role_id = $_GET['id'];
          //var_dump($role_id) or die();
          $role_name = $_POST['role_name'];
          $role_description = $_POST['role_description'];
          $role_updated = $_POST['role_updated'];

          $checkSuccess = $role->edit($role_id,$role_name,$role_description,$role_updated);
          //var_dump($checkSuccess);
          // Return message after submit
          if ($role->returnSuccessMessage()) {

            echo $role->returnSuccessMessage();

          }else if ($role->returnFailedMessage()) {
            
            echo $role->returnFailedMessage();
          }
        }
    }
?>
