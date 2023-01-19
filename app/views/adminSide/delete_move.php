<?php 
include('check_user.php');
include("../connect.php");
ob_start();
$id= $_GET['myid'];
$stmt= $con->prepare("DELETE FROM `all_movies` WHERE id='$id'");
          $del = $stmt->execute();
          if($del){
            header("Location: ../html/movie.php");
            exit();
          }
?>