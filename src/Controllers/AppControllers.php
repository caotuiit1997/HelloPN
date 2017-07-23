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

    // Set successfully message
    public function successMessage($message) {
        $this->success = $message;
    }

    //Set failed message
    public function failedMessage($message) {
         $this->failed = $message;
    }

    //Display successfully message
    public function returnSuccessMessage() {
        return $this->success;
    }

    // Display falied message
    public function returnFailedMessage() {
        return $this->failed;
    }
}
?>