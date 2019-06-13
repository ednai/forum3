<?php
    class Usuario_m extends CI_Model {
        
        function get($id=null) {
            if($id){
                $this->db->where('Id', $id);
                $query = $this->db->get('tb_login');
                return $query->row_array();
            }else{
                $query = $this->db->get('tb_login');
                return $query->result_array();
            }
        }
            function inserir($tb_login) {
            return $this->db->insert('tb_login', $tb_login);
        }

        function atualizar($tb_login) {
            $this->db->where('Id', $tb_login['Id']);
            return $this->db->update('tb_login', $tb_login);
            return $this->db->update('tb_login', $senha);
        }

        function deletar($Id) {
            $this->db->where('Id', $Id);
            return $this->db->delete('tb_login');
        }
 }
    