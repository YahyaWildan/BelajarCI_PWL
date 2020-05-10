<?php
    defined('BASEPATH') OR exit('No direct script acces allowed ');

    class Relawankitabantu extends CI_Controller{
        public function index(){
            $this->load->model('mymodel');
            $data = $this->mymodel->Get('relawan');
            $data = array('data'=>$data);

            $this->load->view('relawan',$data);
            // menampilkan fie relawan.php di folder view dan membawa data
        }
        public function daftar_relawan(){
            $this->load->view('form_daftar_relawan');
        }
        public function proses_daftar_relawan(){
            $this->load->model('mymodel');
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );
            // var_dump($data);
            $query = $this->mymodel->Insert('relawan', $data);
            if($query){
                echo "<script> alert('Daftar Relawan Suksess') </script>";
                $this->index();
            }else{
                echo "<script> alert('Daftar Relawan Gagal') </script>";
                $this->daftar_relawan();
            }
        }
    }
?>