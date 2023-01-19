<?php
class DBHandler {
    private $movies ;
    private $aboutUs=[];
    private $contactUs;
    private $isExist = false, $isAdmin=false, $out= false, $isupdatedAbout=false, $isAdded= false, $updatedMovie= false, $deletedMovie=false, $isLoaded= false;
    private $movie=[] ;
    public function __construct($params=[]){
        if($params[0]=="getMovies") $this->allMovies();
        else if($params[0]=="isAdmin")$this->checkAdmin();
        else if($params[0]=="login")$this->checkUser($params[1],$params[2]);
        else if($params[0]=="out")$this->logOut();
        else if($params[0]=="infoMovie")$this->infoMovie($params[1]);
        else if($params[0]=="getAboutUs")$this->aboutUs();
        else if($params[0]=="getContactInfo")$this->infoContact();
        else if($params[0]=="message")$this->saveClinetMessage($params[1], $params[2], $params[3], $params[4]);
        else if($params[0]=="updateAbout")$this->updateAboutUs();
        else if($params[0]=="addingSocial")$this->addingSocial();
        else if($params[0]=="updateMovie")$this->updateMovie($params[1]); 
        else if($params[0]=="deleteMovie")$this->deleteMovie($params[1]); 
        else if($params[0]=="upload")$this->upload(); 


    }

    private function upload(){
        global $con;
        if (isset($_POST['upload'])) {
            $movieName = $_POST['name'];
            $movieDescription = $_POST['description'];

            //this is the name of the image that will be saved in the db
            $image = $_FILES['fileImg']["name"];

            $stmt = $con->prepare("INSERT INTO `all_movies`(`name`, `image`, `description`) VALUES (?, ?, ?)");
            $stmt->execute(array($movieName, $image, $movieDescription));
            //upload the image to a specific folder first 
            if ($stmt) {
                $target_dir = '../photo/';
                $target_file = $target_dir . basename($image);
                move_uploaded_file($_FILES['fileImg']["tmp_name"], $target_file);
                $this->isLoaded = true;
            }
            
        }
    }
    public function isUploaded(){
        return $this->isLoaded;
    }
    public function deleteMovie($id){
        global $con;
        $stmt= $con->prepare("DELETE FROM `all_movies` WHERE id='$id'");
          $del = $stmt->execute();
          if($del){
            $this->deletedMovie= true;
          }
    }
    public function movieIsDeleted(){
        return $this->deletedMovie;
    }
    private function updateMovie($id)
    {
        global $con;
        if (isset($_POST['update'])) { 
            $movieName = $_POST['myTitle'];
            $movieDescription = $_POST['myDescription'];
            $image = $_FILES['fileImg']["name"];
            $up = $con->prepare("UPDATE all_movies SET name='$movieName', image='$image', description='$movieDescription' WHERE id='$id'");
            $res = $up->execute();
            //upload the image to a specific folder first 
            $target_dir = '../public/photo/';
            $target_file = $target_dir . basename($image);

            move_uploaded_file($_FILES['fileImg']["tmp_name"], $target_file);

            if ($res) {
                $this->updatedMovie= true;
            }
        }

    }
    public function movieIsUpated(){
        return $this->updatedMovie;
    }

    public function addingSocial(){
        ob_start();
        global $con;
        if(isset($_POST['add'])){
            $code= $_POST['code'];
            $name =$_POST['name'];
            $up =$con->prepare("INSERT INTO contact(`code`,`name`) values('$code', '$name')");
            if($up->execute()){
              $this->isAdded= true;
            }
        } 
    }
    public function isAdded(){
        $this->isAdded;
    }
    public function updateAboutUs(){
       // ob_start();
        global $con;
        if(isset($_POST['update'])){
            $myTitle= $_POST['my_title'];
            $myText =$_POST['my_text'];
            $up =$con->prepare("UPDATE  about SET title='$myTitle',about_text='$myText' WHERE 1");
            if($$up->execute()){
              $this->isupdatedAbout= true;
            }
        }

    }
    public function isUpdated(){
        return $this->isupdatedAbout;
    }
    private function logOut(){
       session_start();
        ob_start();
        global $con;
        $uid=$_SESSION['uid'];
        $del_query= $con->prepare("UPDATE user SET access_token='' WHERE id='$uid' ");
        $result= $del_query->execute();
        if($result){
            unset($_SESSION['uid']);
            $this->out =true;
            session_destroy();
            
          //  header("Location: ../html/index.php");
          //  exit();
        }
    }
    public function isOut(){
        return $this->out;
    }
    private function checkAdmin(){
        session_start();
        ob_start();
        global $con;
        if(isset($_SESSION['uid'])){
            $uid=$_SESSION['uid'];
    
            $verify = $con->prepare("SELECT access_token FROM user WHERE id='$uid'");
            $res=  $verify->execute();
           // $res = $verify->fetch(PDO::FETCH_ASSOC);
            if($res){
                $r = $verify->fetch(PDO::FETCH_ASSOC);
                $auth_code = $r['access_token'];
    
                if($auth_code == $_COOKIE['PHPSESSID']){
                    //header("Location: ../html/login.php");
                    $this->isAdmin=true;
                 //    exit(); 
                }
            }
    
        }
    }
    public function isAdmin(){
        return $this->isAdmin;
    }
    private function checkUser($email, $password){
        session_start();
        ob_start();
        global $con;
        $stmt= $con->prepare("SELECT * FROM `user` WHERE email='$email' and password='$password' ");
           $stmt->execute();
           $user = $stmt->fetch(PDO::FETCH_ASSOC);
           $count= $stmt->rowCount();
            if($count > 0){
                $uid= $user['id'];  
                //session_regenerate_id();
                $auth_code =session_id();
                $_SESSION['uid']= $uid;
                $auth_query= $con->prepare("UPDATE user SET access_token = '$auth_code' WHERE id='$uid' ");
                $result=$auth_query->execute();
                $this->isExist= true;
        }
    }
    public function isExistUser(){
        return $this->isExist;
    }
    private function allMovies(){
        global $con;
        $stmt= $con->prepare("SELECT `id`, `name`, `image`, `description` FROM `all_movies`");
        $stmt->execute();
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
       // $count= $stmt->rowCount();
        if($movies ){
            $this->movies= $movies;
        }
    }
    public function getAllMovies(){
        return $this->movies;
    }
    private function infoMovie($id){
        global $con;
        
        $stmt= $con->prepare("SELECT `id`, `name`, `image`, `description` FROM `all_movies` WHERE id='$id'");
        $stmt->execute();
        $movie = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($movie) {
        $this->movie = $movie;
        }
    }
    public function getInfoMovie(){
        return $this->movie;
    }
    private function aboutUs(){
        global $con;
        $stat =$con->prepare("SELECT title,about_text FROM about WHERE id='1'");
        $stat->execute();
        $text = $stat->fetch(PDO::FETCH_ASSOC);
        if($text){
            $this->aboutUs= $text;
        }else{
            echo "No record found";
        }
       
    }
    public function getAboutUs(){
      return $this->aboutUs;
    } 
    private function infoContact(){
        global $con;
        $stmt= $con->prepare("SELECT  `code`,`name` FROM `contact`");
        $stmt->execute();
        $contact = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($contact ){
            $this->contactUs= $contact;
        }
    }
    public function getInfoContact(){
        return $this->contactUs;
    }
    private function saveClinetMessage($name, $email, $phone, $mymessage){
        global $con;
        if($name != "" && $phone!="" && $mymessage!=""){
        $stmt= $con->prepare("INSERT INTO `messages`(`name`, `email`, `phone`, `text`) VALUES (:nm,:em,:ph, :ms)");
    $stmt->execute(array(
                         ':nm'=>$name,
                         ':em'=>$email,
                         ':ph'=>$phone,
                         ':ms'=>$mymessage ));
    }
    }

}

?>