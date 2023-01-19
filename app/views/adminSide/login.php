<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/mvc/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="/mvc/public/css/normalize.css">

    <title>Document</title>
</head>
<!-- onclick="loctaion.herf='../html/home.php';" -->

<body>
    <div class="login-form-container">
        <form action="/mvc/public/login" method="POST">
            <h2>User Login</h2>
            <input type="email" placeholder="email" name="userEmail" class="box" id="">
            <input type="password" name="password" placeholder="password" value="password" class="box" id="">
            <!-- <p>forget your password <a href="#">click here</a></p> -->
            <input type="submit" value="Login" name="submit" class="btn">
            <!-- <p>don't have account <a href="home.php">create one</a></p> -->

        </form>
    </div>
</body>

</html>