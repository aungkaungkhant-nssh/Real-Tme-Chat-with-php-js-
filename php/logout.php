<?php
session_start();
if(isset($_SESSION["unique_id"])){
    include_once "../php/db.php";
    $unique_id=$_GET["unique_id"];
    if($unique_id){
        $condition=update("Update users Set status=? where unique_id=?",["Offline Now",$unique_id]);
        session_destroy();
        header("Location: ../login.php");
    }else{
        header("Location: ../login.php");
    }
}else{
    header("Location: ../login.php");
}