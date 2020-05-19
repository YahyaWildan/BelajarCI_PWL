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
        public function edit_relawan($id_relawan){
            $this->load->model('mymodel');
            $relawan = $this->mymodel->GetWhere('relawan', array('id_relawan'=>$id_relawan));
            $data = array(
                'id_relawan'=> $id_relawan,
                'username' => $relawan[0]['username'],
                'email' => $relawan[0]['email'],
                'password' => $relawan[0]['password']
            );
            $this->load->view('form_edit_relawan',$data);
        }
        public function proses_edit_relawan($id_relawan){
            $this->load->model('mymodel');
            if(empty($this->input->post('password'))){
                $password = $this->input->post('passwordSebelum');
            }else{
                $password = md5($this->input->post('password'));
            }
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $password
            );
            $where=array(
                'id_relawan' => $id_relawan
            );
            // var_dump($data);
            $query = $this->mymodel->update('relawan',$data,$where);
            if($query){
                echo "<script> alert('Edit Relawan Suksess') </script>";
                $this->index();
            }else{
                echo "<script> alert('Edit Relawan Gagal') </script>";
                $this->edit_relawan();
            }
        }
        public function hapus_relawan($id_relawan){
            $this->load->model('mymodel');
            $id_relawan=array(
                'id_relawan' => $id_relawan
            );
            $query = $this->mymodel->Delete('relawan', $id_relawan);
            if($query){
                echo "<script> alert('Delete Relawan Suksess') </script>";
                $this->index();
            }else{
                echo "<script> alert('Delete Relawan Gagal') </script>";
                $this->index();
            }
        }
        public function proses_login_relawan(){
            $this->load->model('mymodel');
            $where=array(
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );
            $cek = $this->mymodel->Getwhere('relawan', $where);
            $count_cek = count($cek);
            if($count_cek > 0){
                $data_session = array(
                    'id_relawan' => $cek[0]['id_relawan'],
                    'username' => $cek[0]['username'],
                    'foto' => $cek[0]['foto']
                );                
                $this->session->set_userdata($data_session);
                echo "<script> alert('Login Relawan Suksess') </script>";
                redirect(base_url("index.php/dashboardrelawan"));
                //membaca controller baru Dashboardrelawan
            }else{
                echo "<script> alert('Login Relawan Gagal') </script>";
                $this->index();
            }
        }
    }
?>