<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <link rel="stylesheet" href="/labWeb/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="/labWeb/public/css/normalize.css">
    <title>Movies PAGE</title>
</head>

<body>
    <div class="container">
        <?php include 'adminHeader.php';?>
        <section>
            <div class="move">
                <h1>Your Movies</h1>
                <?php              
                foreach($data as $row ): ?>
                <div class="move-container ">
                    <div class="move-content">
                        <a href="/mvc/public/movies/display/<?php echo $row['id']; ?>" target="new window">
                            <img src="<?php echo "/mvc/public/photo/" . $row['image'];?>"
                                title="<?php echo $row['name']; ?>" alt="">
                        </a>
                    </div>
                    <?php  endforeach;  ?>
                </div>
            </div>
        </section>
    </div>
</body>

</html>