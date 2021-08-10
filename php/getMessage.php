<?php
session_start();
if($_SESSION["unique_id"]){
    include_once("./db.php");
    
    $messages=getAll("
        select * from messages 
        left join users on users.unique_id=messages.outgoing_id
        where outgoing_id=? and incomming_id=? OR incomming_id=? and outgoing_id=?",
        [$_POST['outgoing'],$_POST["incomming"],$_POST["outgoing"],$_POST["incomming"]]
    );
     $output="";
    foreach($messages as $msg){
        if($msg->outgoing_id===$_POST["outgoing"]){
            $output.='
            <div class="chat outgoing">
            <div class="details">
                <p>'.$msg->message.'</p>
            </div>
            </div>
            ';
        }else{
            $output.='
            <div class="chat incomming">
                <img src="./php/images/'.$msg->image.'" alt="">
                <div class="details">
                    <p>'.$msg->message.'</p>
                </div>
            </div>
            ';
        }
    };
    echo $output;
    
}else{
    header("Location: login.php");
}