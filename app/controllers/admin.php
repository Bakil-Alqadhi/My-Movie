<?php 
 class Admin extends Controller {
    public function index(){
     if($this->checkAdmin()){
        $this->view("adminSide/home");
      } 
     else {
        $this->view("adminSide/login");
     } 
    }
    private function checkAdmin(){
        $admin = $this->model("DBHandler", ["isAdmin"]);
        return $admin->isAdmin();
       
    }
    public function logOut(){
        if($this->checkAdmin()){
            $out = $this->model("DBHandler", ["out"]);
            if($out->isOut()){
                $this->view("clientSide/home");
                header("Location: /mvc/public/home");
                
            }
            else {
                $this->view("adminSide/home");   
            }
        }
        else {
            $this->view("adminSide/login");
        }
    }
 }
?>