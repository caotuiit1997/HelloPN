<?php
    include("../../../Controllers/RolesController.php");
    $role = new RolesController();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $role->delete($id);

	}
?>