<?php
include "class.php";
extract($_POST);
extract($_GET);
if(isset($submit))
{
    $img=$_FILES['img']['name'] ;
    move_uploaded_file($_FILES['img']['tmp_name'],'images/$img');
    $inserts="insert into register VALUES ('','$n','$e','$nm','$p','$img')";
   // $inserts="insert into register VALUES('".$_POST["n"]."','".$_POST["e"]."','".$_POST["nm"]."','".$_POST["p"]."','".$_POST["img"]."')";
    if($obj->insert($inserts)){
        $obj->url("index.php?msg=run");
    }else{
        echo "Your registration is not successful";
    }
}
