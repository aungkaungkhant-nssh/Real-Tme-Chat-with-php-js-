<?php



include_once("./db.php");
$users=getAll("select * from users");
$output="";
if(count($users)===1){
    $output.="No message available to chat";
}else{
    foreach($users as $user){
     
        $output.='
        <a href="">
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
   
}
echo $output;