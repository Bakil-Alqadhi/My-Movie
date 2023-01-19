<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/mvc/public/css/display.css">
    <title>Document</title>
</head>
<style>
</style>

<body>
    <div class="move-container ">
        <div class="move">
            <div class="descrip">
                <h1><?php echo $data['name']?></h1>
                <p><?php echo $data['description']?></p>
            </div>
            <div class="move-content">
                <img src="<?php echo "/mvc/public/photo/" . $data['image'];?>" title="<?php echo $data['name']; ?>"
                    alt="">
            </div>
        </div>
        <div class="links">
            <a href="/mvc/public/movies/admin" class="back">Go Back</a>
            <!-- <a href="../html/update_move.php?myid=<//?php echo $id; ?>" class="back">UPDATE</a> -->
            <a href="/mvc/public/movies/toUpdate/<?php echo $data['id']; ?>/<?php echo $data['name']; ?>/<?php echo $data['description']; ?>/<?php echo $data['image']; ?> "
                class="back">UPDATE</a>
            <a href="/mvc/public/movies/delete/<?php echo $data['id']; ?>" class="back ">Delete</a>
        </div>

</body>

</html>