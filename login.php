<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Time Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Email Address" name="email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat">
                    </div>
            </form>
            <div class="link">
                Not yet signed up? <a href="./index.php">Sign Up Now</a>
            </div>
        </section>
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript//login.js"></script>
</body>
</html>