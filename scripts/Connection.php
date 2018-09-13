<?php

class Connection {  
    
    public $db_conn;
    public $connection_str;


    public function __construct() {
        try{
            $this->db_conn = new PDO('mysql:host=localhost,dbname=storedb', "root","");
        }catch(Exception $ex){
            echo mysqli_errno($ex->getMessage());
        }
    }
    public function getConnection(){       
        
        return $this->db_conn;  
    } 
    public function setConnection(string $str){
        $this->connection_str = $str;
       
    }
    
    
}
