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
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name" name="fname">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname">
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Email Address" name="email">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Password" name="password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat">
                    </div>
                
            </form>
            <div class="link">
                Already signed Up? <a href="/login.php">Login Now</a>
            </div>
        </section>
    </div>
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript//signup.js"></script>
</body>
</html>