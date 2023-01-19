<?php 
       $dsn="mysql:host=localhost;dbname=movies";
       $user="root";
       $pass="";
       $option = array(
           PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8");// for arabic language    
       try{
           $con =new PDO($dsn, $user, $pass, $option);
           $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }catch(PDOException $e){
           echo $e->getMessage();
       }

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbName = "movies";

// // Create connection
// $con = new mysqli($servername, $username, $password,$dbName);
// // Check connection
// if ($con->connect_error) {
//   die("Connection failed: " . $con->connect_error);



?>