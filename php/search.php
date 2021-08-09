<?php
include_once("./db.php");
$searchTerm=$_POST["searchTerm"];
 
$output="";
$users=getAll("select * from users where fname like '%{$searchTerm}%' OR
lname like '%{$searchTerm}%'");

if($users){
    foreach($users as $user){
     
        $output.='
        <a href="./chat.php?user_id='.$user->unique_id.'">
        <div class="content">
            <img src="./php/images/'.$user->image.'" alt="">
            <div class="details">
                <span>'.$user->fname.' '.$user->lname.'</span>
                <p>This is test message</p>
            </div>
           
        </div>
        <div class="status-dot">
            <i class="fas fa-circle"></i>
        </div>
        </a>
        ';
    }
}else{
    $output="No user found related to your search Item";
}
echo $output;
