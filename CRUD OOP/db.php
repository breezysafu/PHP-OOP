<?php

class Database {

    public $con;

    public function __construct(){
       $conn= $this->con = new mysqli("localhost","root","rusakhatun", "test");
    }
}


?>