<?php
// 'post' object
class posts{
 
    // database connection and table name
    private $conn;
    private $table_name="contents";
 
    // object properties
    public $id;
    public $title;
    public $text;
    public $place;
    public $blog;
    public $user_id;
    public $updated_at;
    public $created_at;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
}