<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("Location: login.php");
        exit();
    }
    include_once("./php/db.php");
    $user=getOne("select * from users where unique_id=?",[$_GET['user_id']]);
    include_once("./partials/header.php");;
   
?>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                    <a href="./users.php">b</a>
                    <img src="./php/images/<?=$user->image?>" alt="">
                    <div class="details">
                        <span><?=$user->fname." ".$user->lname?></span>
                        <p><?= $user->status?></p>
                    </div>
            
    
            </header>
            <div class="chat-box">
              

            </div>
            <form action="" class="typing-area">
                <input type="text" value="<?=$_SESSION["unique_id"]?>" id="outgoing" hidden >
                <input type="text" value="<?=$_GET["user_id"]?>" id="incomming" hidden >
                <input type="text" placeholder="Type a message here..." id="messages">
                <button>s</button>
            </form>
        </section>
    </div>
    <script src="./javascript/chat.js"></script>
</body>
</html>