<?php
class Movie {
   public $id ;
    public $name;
   public $description;
   public $image;

public function setName($name){
    $this->name =$name;
}
public function setId($id){
    $this->id =$id;
}
public function setDescription($description){
    $this->description =$description;
}

public function setImage($image){
    $this->image =$image;
}
public function getImage(){
    return $this->image;
 }
 public function getName(){
    return $this->name;
}

public function getId(){
    return $this->id;
}

 public function getDescription(){
    return $this->description;
 }
 

    /**
     * @param mixed $id 
     * @param mixed $name 
     * @param mixed $description 
     * @param mixed $image 
     */
 
    public function __construct() {
    }
       
}