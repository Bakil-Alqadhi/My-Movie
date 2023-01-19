<?php 

include('check_user.php');

/*-- we included connection files--*/
include('../connect.php');
//$con = mysqli_connect("localhost", "root", "", "movies");
if(isset($_POST['upload'])){
    $movieName= $_POST['name'];
    $movieDescription =$_POST['description'];
  
    //this is the name of the image that will be saved in the db
    $image= $_FILES['fileImg']["name"];

    $stmt= $con->prepare("INSERT INTO `all_movies`(`name`, `image`, `description`) VALUES (?, ?, ?)");
    $stmt->execute(array($movieName,$image,$movieDescription));
    //upload the image to a specific folder first 

    $target_dir ='../photo/';
    $target_file = $target_dir . basename($image);

    move_uploaded_file($_FILES['fileImg']["tmp_name"], $target_file);

    header('Location: ../html/upload_img.php');

}
?>