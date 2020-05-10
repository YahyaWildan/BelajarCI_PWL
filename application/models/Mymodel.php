<?php
    defined('BASEPATH') OR exit('No direct script acces allowed ');

    class Mymodel extends CI_Model{
       public function Get($table){
           $res = $this->db->get($table);
           return $res->result_array();
           //    mengembalikan hasil operasi $res menjadi array
        }
        public function GetWhere($table, $data){
            $res = $this->db->get_where($table,$data);
            return $res->result_array();
       }
        public function Insert($table, $data){
            $res = $this->db->insert($table,$data);
            return $res;
       }
        public function Update($table, $data,$where){
            $res = $this->db->Update($table,$data,$where);
            return $res;
       }
        public function Delete($table,$where){
            $res = $this->db->delete($table,$where);
            return $res;
       }
    }
?>