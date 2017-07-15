<?php
// This file to config database
Class DB {

   var $_db = array(
       "host" => "localhost",
       "username" => "root",
       "password" => "",
       "database" => "test",
   );
    var $connection;

    //Create connecting function to database
    public function __construct() {
        $this->connection = new mysqli($this->_db['host'],$this->_db['username'],$this->_db['password'],
            $this->_db['database']);
        if (!$this->connection) {
           echo "cannot connect";
        }
        return $this->connection;
    }
}
?>