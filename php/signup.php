<?php
session_start();
include_once("db.php");
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];

/// check the field
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    //check validate email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        ///record has email check
        $emailVarify=getOne("Select * from users where email=?",[$email]);
        if(!$emailVarify){

            // check file image
            $fileName=$_FILES["image"]['name'];
            $fileTmp=$_FILES["image"]["tmp_name"];
            if(empty($fileName) && empty($fileTmp)){
                echo "please choose an image";
            }else{
               //get file extension
               $fileExt=explode(".",$fileName);
               $img_ext=end($fileExt);
               $extensions=["png","jpg","jpeg"];

               if(in_array($img_ext,$extensions)===true){
                     //set random number
                     $random=rand(time(),1000);
                     ///image file
                     $image=$random ."_".$fileName;
                     //move file to local disk
                     move_uploaded_file($fileTmp,"images/".$image);
                     //unique Id
                     $unique_id=time();
                     //status
                     $status="Active Now";
                     // store database data
                     $users=insertData("insert into users (unique_id,fname,lname,email,password,status,image) values (?,?,?,?,?,?,?)",
                     [$unique_id,$fname,$lname,$email,$password,$status,$image]);
                     
                     //store session data
                     if($users){
                         //get user email
                         $emailCheck=getOne("select * from users where email=?",[$email]);
                         //email Check
                         if($emailCheck){
                             $_SESSION["unique_id"]=$emailCheck->unique_id;
                             echo "success";
                         }else{
                             echo "Something Went Wrong";
                         }
                     }

               }else{
                   echo "Image Extension is png,jpg,jpeg";
               }
            }
          
        }else{
            echo "$email - is already-exist";
        }
    }else{
        echo "$email -email is invalid";
    }
}else{
    echo "All Input Field are required";
}