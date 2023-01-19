<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';?>
    <title>ABOUT PAGE</title>
</head>

<body>
    <div class="container">
        <?php include 'header.php';?>
        <div class="slide about" style="background-image: url(/mvc/public/images/slider/about1.jpg);">
            <div class="info">
                <?php 
                    $title =$data['title'];
                    $txt =$data['about_text'];
                echo "<h1>$title</h1>";
                echo "<p>$txt</p>" ;
            ?>
            </div>
            <div class="to-contact">
                <div class="myimg">
                    <img src="/labWeb/public/images/slider/social.jpg" alt="">
                </div>
                <div>
                    <a href="../html/contact.html" class="mybtn">Contact With Us</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>