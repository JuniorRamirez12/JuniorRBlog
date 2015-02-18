<?php

class Database {
    
   private $connection; 
   private $host;
   private $username;
   private $password;
   private $database;
   
   public function __construct($host, $username, $password, $database) {
       $this->host = $host;
       $this->username = $username;
       $this->password = $password;
       $this->database = $database;
    
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        
        if ($connection->connect_error) {
            die("<p>Error: " . $connection->connect_error . "</p>");
        }
        
        $exists = $this->connection->select_db($database);
        
        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");
           
           if($query) {
               echo "<p>Successfully created database: " . $database . "</p>";
           }
    public function closeConnection(){
    if(isset($this->connection)) {
            $this->connection->close();        }
    }
    
    public function query($string){
        
    }
}