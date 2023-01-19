<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/labWeb/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="/labWeb/public/css/normalize.css">
    <title>ABOUT PAGE</title>
</head>

<body>
    <div class="container">
        <?php include 'adminHeader.php';?>
        <div class="slide about" style="background-image: url(/mvc/public/images/slider/about1.jpg);">
            <div class="info">
                <form action="/mvc/public/about/update" method="POST">
                    <h1>
                        <input type="text" name="my_title" value="<?php  echo $data['title']; ?>" id="">
                    </h1>
                    <p>
                        <textarea name="my_text" id="" cols="40" rows="10"><?php echo $data['about_text'];?></textarea>
                    </p>
                    <input type="submit" value="UPDATE" name="update"
                        style="background-color: #ff0000; font-size: 25px; color: white; padding:4px;">
                </form>
                <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste quod iusto ab sequi ea voluptatum
                    debitis, fugit perspiciatis aspernatur, pariatur repudiandae deserunt praesentium veritatis
                    perferendis aliquid rem recusandae adipisci quam.</p> -->
            </div>
            <div class="to-contact">
                <div class="myimg">
                    <img src="/mvc/public/images/slider/social.jpg" alt="">
                </div>
                <div>
                    <a href="/mvc/public/contact/admin" class="mybtn">Contact With Us</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>