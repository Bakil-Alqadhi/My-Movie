<?php
class Movies extends Controller {
    public function index(){
        $movies = $this->model("DBHandler",["getMovies"]);
        $this->view("clientSide/movie_for_u", $movies->getAllMovies());
    }

    public function admin(){
        if($this->checkAdmin()){
            $movies = $this->model("DBHandler",["getMovies"]);
            $this->view("adminSide/movie", $movies->getAllMovies());
           }
           else {
            $this->view("adminSide/login");
           } 
    }
    public function info($id){
        $movies = $this->model("DBHandler",["infoMovie", $id]);
        $this->view("clientSide/display_for_u", $movies->getInfoMovie()); 
    }

    private function checkAdmin(){
        $admin = $this->model("DBHandler", ["isAdmin"]);
        return $admin->isAdmin();
       
    }
    public function display($id){
       if($this->checkAdmin()){
        $movies = $this->model("DBHandler",["infoMovie", $id]);
        $this->view("adminSide/display",$movies->getInfoMovie());
       } 
    }
    public function toUpdate($id, $title, $description, $image){
        if($this->checkAdmin()){
           // $update =$this->model("DBHandler",["infoMovie", $id, $title, $description, $image]);
            $this->view("adminSide/update_move",[ $id, $title, $description, $image]);
        }
        else {
            $this->view("adminSide/login");
           } 
    }
    public function update($id){
        if($this->checkAdmin()){
            $update = $this->model("DBHandler", ["updateMovie", $id]);
            if($update->movieIsUpated()){
                $movies = $this->model("DBHandler",["getMovies"]);
                $this->view("adminSide/movie", $movies->getAllMovies());
            }
            else{
                $this->view("adminSide/movie");
            } 
        }
        else{
            $this->view("adminSide/login");
        } 
    }
    public function delete($id){
        if($this->checkAdmin()){
            $update = $this->model("DBHandler", ["deleteMovie", $id]);
            if($update->movieIsDeleted()){
                $movies = $this->model("DBHandler",["getMovies"]);
                $this->view("adminSide/movie", $movies->getAllMovies());
            }
            else{
                $this->view("adminSide/movie");
            } 
        }
        else{
            $this->view("adminSide/login");
        } 
    }
    public function toUpload(){
        if($this->checkAdmin()){
                $this->view("adminSide/upload_img");
        }
        else{
            $this->view("adminSide/login");
        } 
    }
    public function upload(){
        if($this->checkAdmin()){
            $update = $this->model("DBHandler", ["upload"]);
            if($update->isUploaded()){
                $movies = $this->model("DBHandler",["getMovies"]);
                $this->view("adminSide/movie", $movies->getAllMovies());
            }
            else{
                $this->view("adminSide/movie");
            } 
        }
        else{
            $this->view("adminSide/login");
        }
    }
}


?>