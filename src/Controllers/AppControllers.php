<?php
require_once ("../../config/database.php");
// Class appController
Class AppController extends DB {

    public function __construct() {
        parent::__construct();
    }

    //This function to execute the query
    public function execute($query) {
        $execute = $this->connection->query($query);
        if (!$execute) {
            echo "Cannot execute the query";
        }else {
            return true;
        }
        return $execute;
    }

    //This function to redirect
    public function redirect($location) {
     header("location: $location");
    }
}
?>