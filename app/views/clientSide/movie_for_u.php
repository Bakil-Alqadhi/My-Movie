<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- css fles -->
    <link rel="stylesheet" href="/mvc/public/css/main.css" type="text/css">
    <link rel="stylesheet" href="/mvc/public/css/normalize.css">
    <title>Movies PAGE</title>
</head>

<body>
    <div class="container">
        <?php include 'header.php';?>
        <section>
            <div class="move">
                <h1>Your Movies</h1>
                <?php              
                foreach($data as $row ): ?>
                <div class="move-container ">
                    <div class="move-content">
                        <a href="/mvc/public/movies/info/<?php echo $row['id']; ?>" target="new window">
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