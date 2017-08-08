<?php
require_once ("../../../../config/database.php");

// Class appController
Class AppController extends DB {

    public function __construct() {
        parent::__construct();
    }

    // This function to get data
    public function getData($query) {
        $result = $this->connection->query($query);
        if (!$result) {
            return false;
        }
        $rows = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }else {
            return Null;
        }
        
    }

    //This function to execute the query
    public function execute($query) {
        //var_dump($query) or die();
        $execute = $this->connection->query($query);
        //var_dump($execute) or die();
        if (!$execute) {
            echo "Cannot execute the query".$this->connection->error;
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
        return "<center><h3 style='color:green'>".$this->success."</h3></center>";
    }

    // Display falied message
    public function returnFailedMessage() {
        return "<center><h3 style='color:red'>".$this->failed."</h3></center>";
    }

    // Emcrypt and random id
    public function idRandom() {
        $id_rand = rand(1,9999);
        return md5($id_rand);
    }
}
?>