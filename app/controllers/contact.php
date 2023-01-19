<?php
class Contact extends Controller {
    public function index(){
        $contact= $this->model("DBHandler", ["getContactInfo"]);
        $this->view("clientSide/contact_for_u",$contact->getInfoContact());
        
    }
    public function message(){
        $infoClient =$this->model("DBHandler",["message", $_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message']]);
        $contact= $this->model("DBHandler", ["getContactInfo"]);
        $this->view("clientSide/contact_for_u",$contact->getInfoContact());
        //$this->view("clientSide/contact_for_u");
    }
    private function checkAdmin(){
        $admin = $this->model("DBHandler", ["isAdmin"]);
        return $admin->isAdmin();
    }
    public function admin(){
        if($this->checkAdmin()){
            $contact= $this->model("DBHandler", ["getContactInfo"]);
            $this->view("adminSide/contact",$contact->getInfoContact());
        }
        else {
            $this->view("adminSide/login");
          }
        
    }
    public function add(){
        if($this->checkAdmin()){
            $add = $this->model("DBHandler",["addingSocial"]);
            if($add->isAdded()){
                $contact= $this->model("DBHandler", ["getContactInfo"]);
                $this->view("adminSide/contact",$contact->getInfoContact());
            }
            else {
                $this->admin();
            }
        }else{
            $this->view("adminSide/login");
          }
        
    }
}
?>