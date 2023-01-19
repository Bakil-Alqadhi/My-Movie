<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/mvc/public/css/display.css">
    <title>Document</title>
</head>
<style>
body {
    background-color: black;
}

.move-container {
    width: 700px;
    height: 400px;
    margin-left: 300px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 50px;
    position: relative;
}
</style>

<body>
    <div class="move-container" style="position: relative;">
        <form action="/mvc/public/movies/update/<?php echo $data[0];?>" method="POST" enctype="multipart/form-data">
            <h1>
                <input type="text" name="myTitle" value="<?php echo $data[1]?>" id=""
                    style="font-size: 25px; color: #ff0000;">
            </h1>
            <input type="file" name="fileImg" class="file_input" />
            <p>
                <textarea name="myDescription" id="" cols="40" style="font-size: 15px;"
                    rows="10"><?php echo $data[2]?></textarea>
            </p>
            <input type="submit" value="UPDATE" name="update" style="background-color: #ff0000; font-size: 25px; color:white; padding: 4px; 
                border-radius: 10px; cursor: pointer;
                ">
        </form>
        <div class="move-content " style="margin-left: 100px;">
            <img src="<?php echo "/mvc/public/photo/" . $data[3];?>" title="<?php echo $data[1]; ?>" alt="">
        </div>>
        <a href="/mvc/public/movies/display/<?php echo $data[0]; ?>" class="back"
            style="position: absolute; left: auto;">Go Back</a>
    </div>
</body>

</html>