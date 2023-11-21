<?php

class Latihan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('perpustakaan');

    }

    public function index(){
        $this->perpustakaan->kalkulasi();
       
    }
}

?>