<?php 
class Login extends Controller {
    public function index (){
        $this->view("adminSide/login");
        if(isset($_POST['submit'])){
           $login = $this->model("DBHandler",["login", $_POST['userEmail'],md5($_POST['password'])]);
           if($login->isExistUser()){
               $this->view("adminSide/home");
               header("Location: /mvc/public/admin/index");
           }
           else{
               $this->view("adminSide/login");
           }    
        }

    }

    public function user(){
        $this->view("adminSide/login");
        header("Location: /mvc/public/login");
    }
}
?>