<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/2/2017
 * Time: 10:09 PM
 */

include("../../../Model/BackEnd/Role.php");
include("AppControllers.php");

class RolesController extends AppController
{
    public function __construct() {
        parent::__construct();
    }

    public function add($role_id,$role_name,$role_description,$role_created,$role_updated) {
    	$Role = new Role();
    	$insertData = $Role->add($role_id,$role_name,$role_description,$role_created,$role_updated);
    	
    	$runQuery = $this->execute($insertData);
    	// Check running query
        if ($runQuery) {
        	echo $this->successMessage("Role has been saved");
        }else {
        	echo $this->failedMessage("Role cannot be saved");
        }
    }

    public function index() {
        $Role = new Role();
        $selectData = $Role->index();
        $data = $this->getData($selectData);
        if (!$data) {
            $this->failedMessage("No record found");    
        }
        return $data;
        
    }

    public function view($id) {
        $Role = new Role();
        $selectData = $Role->view($id);
        //var_dump($selectData);
        $data = $this->getData($selectData);
        //var_dump($data) or die();
        if (!$data) {
            $this->failedMessage("No record found");    
        }
        return $data;
        //var_dump($data) or die();
    }

    public function edit($role_id,$role_name,$role_description,$role_updated) {
        $Role = new Role();
        $updateData = $Role->edit($role_id,$role_name,$role_description,$role_updated);
        //var_dump($insertData) or die();
        $runQuery = $this->execute($updateData);
        //var_dump($runQuery) or die();
        // Check running query
        if ($runQuery) {
            echo $this->successMessage("Role has been updated");
        }else {
            echo $this->failedMessage("Role cannot be updated");
        }
    }

    public function delete($id) {
        $Role = new Role();
        $deleteRole = $Role->delete($id);
        $runQuery = $this->execute($deleteRole);
        if ($runQuery) {
            $this->successMessage("Role has been deleted");
        }else {
            $this->failedMessage("Role cannot be deleted");
        }
    }
}










