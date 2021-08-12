<?php
session_start();
if(isset($_SESSION["unique_id"])){
    include_once("./db.php");
    $message=$_POST["message"];
    $outgoing=$_POST["outgoing"];
    $incomming=$_POST["incomming"];
    if(!empty($message)){
       insertData("insert into messages (message,outgoing_id,incomming_id) values(?,?,?)",[$message,$outgoing,$incomming]);
       
    }
}else{
    header("Location: ../login.php");
}




