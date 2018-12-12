<?php
session_start();

class user {

    public $host="localhost";
    public $username="root";
    public $password="rusakhatun";
    public $dbname="oop";
    public $run;

    public function __construct()
    {
        $this->run=new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if(mysqli_connect_errno())
        {
            echo "database connection failed";
            exit;
        }
    }

    public function insert($data)
    {
       $name=($this->run)->query($data);
       if($name){
           return true;
       } else {
           return false;
       }
    }

    public function login($data){
        $log=($this->run)->query($data);
        if($log->num_rows>0){
            //print($log->num_rows); //match return 1
            return true;
        } else {
            //print($log->num_rows); //not match return 0
            return false;
        }
    }

    public function profile($profile){
        $ft=($this->run)->query($profile);
        $value=$ft->fetch_object();
        $this->val[]=$value;
        return $this->val;
    }

    public function loggedin(){
        if(isset($_SESSION['email'])){
            return true;
        }
    }

    public function logout(){
        unset($_SESSION['email']);
        return true;
       // header("location:index.php");
    }

    public function url($url){
        header("location:".$url);
    }
}

$obj=new user;