<?php
session_start();
include_once("./db.php");
$email=$_POST["email"];
$password=$_POST["password"];

//check input field
if(!empty($email) && !empty($password)){
    //get login user email
    $userEmail=getOne("select * from users where email=?",[$email]);
    if($userEmail){
        //$user password check
        $passwordVerify=password_verify($password,$userEmail->password);
        if($passwordVerify){
            $_SESSION["unique_id"]=$userEmail->unique_id;
            $condition=update("Update users Set status=? where unique_id=?",["Active Now",$_SESSION["unique_id"]]);
            echo "success";
        }else{
            echo "Incorrect Password!Please Try Again";
        }
    }else{
        echo "$email email is not registered";
    }
}else{
    echo "All input fields are required";
}