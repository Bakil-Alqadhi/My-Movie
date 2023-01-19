<?php 
class About extends Controller {
    public function index(){
       $aboutUs = $this->model("DBHandler", ["getAboutUs"]);
      $this->view("clientSide/about_for_u",$aboutUs->getAboutUs());
    }
    private function checkAdmin(){
      $admin = $this->model("DBHandler", ["isAdmin"]);
      return $admin->isAdmin();
     
  }
    public function admin(){
      if($this->checkAdmin()){
        $aboutUs = $this->model("DBHandler", ["getAboutUs"]);
        $this->view("adminSide/about",$aboutUs->getAboutUs());
      } 
     else {
        $this->view("adminSide/login");
     } 
    }

    public function update(){
      if($this->checkAdmin()){
        $update= $this->model("DBHandler", ["updateAbout"]);
        if($update->isUpdated()){
          $aboutUs = $this->model("DBHandler", ["getAboutUs"]);
          $this->view("adminSide/about",$aboutUs->getAboutUs());
        }
        else {
          $aboutUs = $this->model("DBHandler", ["getAboutUs"]);
          $this->view("adminSide/about",$aboutUs->getAboutUs());
       } 
      }
      else {
        $this->view("adminSide/login");
      }
    }
}
?>