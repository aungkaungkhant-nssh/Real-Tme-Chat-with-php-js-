<?php
session_start();
include_once("./db.php");
$searchTerm=$_POST["searchTerm"];
 
$output="";
$users=getAll("select * from users where fname like '%{$searchTerm}%' OR
lname like '%{$searchTerm}%'");

if($users){
   include_once("./data.php");
}else{
    $output="No user found related to your search Item";
}
echo $output;
