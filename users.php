<?php
    session_start();
    if(!isset($_SESSION["unique_id"])){
        header("Location: login.php");
        exit();
    }
    include_once("./php/db.php");
    $user=getOne("select * from users where unique_id=?",[$_SESSION["unique_id"]]);
    include_once("./partials/header.php")
?>
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="./php/images/<?=$user->image?>" alt="">
                    <div class="details">
                        <span><?= $user->fname." ".$user->lname?></span>
                        <p><?=$user->status?></p>
                    </div>
                </div>
                <a href="/php/logout.php?unique_id=<?= $_SESSION['unique_id']?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">
                    Select an user to start chat
                </span>
                <input type="text" placeholder="Enter name to search ....">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
                
              
            </div>
        </section>
    </div>
    <script src="./javascript/user.js"></script>
</body>
</html>