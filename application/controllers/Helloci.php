<?php
    defined('BASEPATH') OR exit('No direct script acces allowed ');

    class Helloci extends CI_Controller{
        public function index(){
            // echo "ini tampilan dari index";
            $this->load->view('hello');
        }
        public function fungsi(){
            echo "ini tampilan dari fungsi";
        }
        public function parameter($nama){
            echo "Selamat datang sis ".$nama;
        }
    }
?>