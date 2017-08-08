<?php
require_once ("../../../../config/database.php");

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 7/15/2017
 * Time: 10:43 PM
 */
class Role extends DB
{
    var $Role;

    public function __construct() {
        parent::__construct();
    }

    public function add($role_id,$role_name,$role_description,$role_created,$role_updated) {
        $this->Role = "INSERT into PNV_roles(PNV_role_id,PNV_role_name,PNV_role_description,PNV_role_created,PNV_role_updated) VALUES('$role_id','$role_name','$role_description','$role_created','$role_updated') ";
        if (!$this->Role) {
            return false;
        }
        return $this->Role;
    }

    public function index() {
        $this->Role = "SELECT * FROM PNV_roles";
        if (!$this->Role) {
            return false;
        }
        return $this->Role;
    }

    public function view($id) {
        $this->Role = "SELECT * FROM PNV_Roles where PNV_role_id = $id";
        if (!$this->Role) {
            return false;
        }
        return $this->Role;
    }

    public function edit($role_id,$role_name,$role_description,$role_updated) {
        $this->Role = "UPDATE PNV_roles SET PNV_role_name = '$role_name', PNV_role_description = '$role_description', PNV_role_updated = '$role_updated' WHERE PNV_role_id = '$role_id'";
        if (!$this->Role) {
            return false;
        }
        return $this->Role;
    }

    public function delete($id) {
        $this->Role = "DELETE FROM PNV_roles WHERE PNV_role_id = '$id'";
        if (!$this->Role) {
            return false;
        }
        return $this->Role;
    }
}