<?php
//session_start();
include "class.php";
echo "<center>
<h2 style='background:red;padding:10px;color:white;'>Welcome ".$_SESSION['email']."
<a href='logout.php?msg=run' style='float:right'>Logout</a>
</h2>
</center>";
$em=$_SESSION['email'];
$query="select * from register where email='$em'";
$obj->profile($query);
foreach ($obj->val as $data){
    echo "<center>";
   echo "<h2>Name:".$data->name."</h2><br>";
    echo "<h2>Emial:".$data->email."</h2><br>";
    echo "<h2>Mobile:".$data->number."</h2><br>";
    echo "</center>";
}

if($obj->loggedin()==""){
    $obj->url("index.php");
}
