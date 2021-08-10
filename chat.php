<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("Location: login.php");
        exit();
    }
    include_once("./php/db.php");
    $user=getOne("select * from users where unique_id=?",[$_GET['user_id']]);
    include_once("./partials/header.php")
?>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                
                    <img src="./php/images/<?=$user->image?>" alt="">
                    <div class="details">
                        <span><?=$user->fname." ".$user->lname?></span>
                        <p><?= $user->status?></p>
                    </div>
            
    
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="chat incomming">
                    <img src="./images.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="chat incomming">
                    <img src="./images.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="chat incomming">
                    <img src="./images.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="chat incomming">
                    <img src="./images.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
                <div class="chat incomming">
                    <img src="./images.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
            <form action="" class="typing-area">
                <input type="text" value="<?=$_SESSION["unique_id"]?>" id="outgoing">
                <input type="text" value="<?=$_GET["user_id"]?>" id="incomming">
                <input type="text" placeholder="Type a message here..." id="messages">
                <button>s</button>
            </form>
        </section>
    </div>
    <script src="./javascript/chat.js"></script>
</body>
</html>