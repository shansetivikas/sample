<?php

class Database{
    
    public $connection;
    public function __construct()
    {
        $this->connection = mysqli_connect('localhost','root','','sample');
        
        if(!$this->connection)
        {
            echo "connection failed";
        }
       
    }
    
     public function real_escape_string($string) {
    // todo: make sure your connection is active etc.
      return $this->conn->real_escape_string($string);
    }
    
    
   
}

$obj = new Database();

?>