<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';?>
    <title>CONTACT PAGE</title>
</head>

<body>
    <div class="container">
        <?php include 'header.php';?>
        <div class="owl-carousel">
            <div class="slide contact" style="background-image: url(/mvc/public/images/slider/contact-us.jpg);">
                <div class="info">
                    <h1>Contact info</h1>
                    <div class="socials">
                        <?php
                        if(is_array($data) || is_object($data)){
                        foreach($data as $row ):?>
                        <i class="<?php echo $row["code"]?>"> <?php echo $row["name"]?></i>
                        <?php
                        endforeach;
                    }
                    ?>
                        <!-- <i class="fab fa-vk"> : VK</i>
                        <i class="fab fa-github"> : Github</i>  -->
                    </div>
                </div>
                <div class="message">
                    <h1>Contact Form</h1>
                    <form action="/mvc/public/contact/message" method="POST">
                        <input type="text" name="name" placeholder="Name:" id="">
                        <input type="email" name="email" placeholder="E-mail:" id="">
                        <input type="tel" name="phone" placeholder="Phone:" id="">
                        <textarea name="message" id="" rows="10" placeholder="Enter your message here ..."></textarea>
                        <input type="submit" class="sendMe" style="color: white;" name="submit" value="Send">
                    </form>

                    <!-- <div class="btns">
                    <a href="#" class="mybtn">Clear</a>
                    <a href="#" class="mybtn send">Send</a>
                    </div> -->
                </div>
            </div>
        </div>
</body>

</html>