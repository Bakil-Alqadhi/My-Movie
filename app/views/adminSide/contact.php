<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/labWeb/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="/labWeb/public/css/normalize.css">
    <title>CONTACT PAGE</title>
</head>

<body>

    <body>
        <div class="container">
            <?php include 'adminHeader.php';?>
            <div class="owl-carousel">
                <div class="slide contact" style="background-image: url(../images/slider/contact-us.jpg);">
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
                            <form action="/mvc/public/contact/add" method="POST">
                                <input type="text" name="code" placeholder="Enter Code" id="">
                                <input type="text" name="name" placeholder="Name" id="">
                                <input type="submit" value="add" name="add"
                                    style="background-color: #ff0000; font-size: 25px; color: white; padding:4px;">
                            </form>
                        </div>
                    </div>
                    <div class="message">
                        <h1>Contact Form</h1>
                        <form action="../html/contact.php" method="POST">
                            <input type="text" name="name" placeholder="Name:" id="">
                            <input type="email" name="email" placeholder="E-mail:" id="">
                            <input type="tel" name="phone" placeholder="Phone:" id="">
                            <textarea name="message" id="" rows="10"
                                placeholder="Enter your message here ..."></textarea>
                            <input type="submit" class="sendMe" name="submit" value="Submit">
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