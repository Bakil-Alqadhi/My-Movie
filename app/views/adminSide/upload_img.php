<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'adminHead.php';?>
    <title>Movie Upload</title>
    <style>
    html,
    body {
        background: #ececec;
        height: 100%;
        margin: 0;
        font-family: Arial;
    }

    .main {
        height: 100%;
        display: flex;
        justify-content: center;
        position: relative;
    }

    .main .image-box {
        width: 300px;
        margin-top: 30px;
    }

    .main h2 {
        text-align: center;
        color: #4D4D4D;
    }

    .main .tb {
        width: 100%;
        height: 40px;
        margin-bottom: 5px;
        padding-left: 5px;
    }

    .main .file_input {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .main .btn {
        width: 100%;
        height: 40px;
        border: none;
        border-radius: 3px;
        background: #27a465;
        color: #f7f7f7;
    }

    /* .main .msg {
        color: red;
        text-align: center;
    } */

    .msg a {
        position: absolute;
        background-color: #ff0000;
        border-radius: 20px;
        color: white;
        padding: 17px;
        font-size: 20px;
        margin-top: 15px;
        text-decoration: none;
    }

    .msg a:hover {
        padding: 20px;
    }
    </style>
</head>

<body>
    <!-------------------Main Content------------------------------>
    <div class="container main">
        <div class="image-box">
            <h2>Movie Upload</h2>
            <form method="POST" name="upfrm" action="/mvc/public/movies/upload" enctype="multipart/form-data">
                <div>
                    <input type="text" placeholder="Enter movie name" name="name" class="tb" />
                    <textarea name="description" id="" cols="40" rows="10" placeholder="about the movie"></textarea>
                    <input type="file" name="fileImg" class="file_input" />
                    <input type="submit" value="Upload" name="upload" class="btn" />

                </div>
            </form>
            <div class="msg">
                <a href="/mvc/public/movies/admin">GO BACK</a>
            </div>
        </div>
    </div>
</body>

</html>