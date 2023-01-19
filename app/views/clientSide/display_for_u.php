<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php';?>
    <title>Document</title>
</head>

<body class="for_u">
    <div class="move-container ">
        <div class="descrip">
            <h1><?php echo $data['name']?></h1>
            <p> <?php echo $data['description']?></p>
        </div>
        <div class="move-content">
            <img src="<?php echo "/mvc/public/photo/" . $data['image'];?>" title="<?php echo $data['name']; ?>" alt="">
        </div>
        <a href="/mvc/public/movies" class="back">Go Back</a>
</body>

</html>