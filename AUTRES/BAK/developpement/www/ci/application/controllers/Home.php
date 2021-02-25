<?php

class Home extends CI_Controller 
{
 public function index()
 {
     $this->load->view('home');
 }
 
    public function lol()
    {
        echo "Lorem Ipsum";
    }

    public function other($nom, $id)
    {
        echo $nom .$id;
    }

}
