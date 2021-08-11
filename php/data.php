<?php
foreach($users as $user){
    $messages=getOne("
    select * from messages where incomming_id=? or outgoing_id=? and outgoing_id=?
    OR incomming_id=?  order by id desc limit 1
    "
    ,[$user->unique_id,$user->unique_id,$_SESSION["unique_id"],$_SESSION["unique_id"]]);
   
    $msg="";

    if($messages){
        $msg=$messages->message;
      
    }else{
        $msg="No message Avaiable";
        
    }
   
    (strlen($msg)>20)?$msg=substr($msg,0,10).'....':$msg;
    
    ($_SESSION['unique_id']===$messages->outgoing_id)?$you="You":$you="";
    ($user->status==="Offline Now")?$offline="offline":$offline="";
    if($user->unique_id!==$_SESSION["unique_id"]){
        $output.='
    <a href="./chat.php?user_id='.$user->unique_id.'">
    <div class="content">
        <img src="./php/images/'.$user->image.'" alt="">
        <div class="details">
            <span>'.$user->fname.' '.$user->lname.'</span>
            <p>'.$you . '  '.$msg.'</p>
        </div>
       
    </div>
    <div class="status-dot '.$offline.'">
        <i class="fas fa-circle"></i>
    </div>
    </a>
    ';
    }
   
}