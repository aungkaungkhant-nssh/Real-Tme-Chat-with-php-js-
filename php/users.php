<?php
session_start();
include_once("./db.php");
$users=getAll("select * from users");
$output="";
if(count($users)===1){
    $output.="No message available to chat";
}else{
    include_once("./data.php");
   
}
echo $output;