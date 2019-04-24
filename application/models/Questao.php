<?php
    class Questao extends CI_Model {
        
        function get($id=null) {
            if($id){
                $this->db->where('Id', $id);
                $query = $this->db->get('tb_questao');
                return $query->row_array();
            }else{
                $query = $this->db->get('tb_questao');
                return $query->result_array();
            }
        }
            function inserir($tb_questao) {
            return $this->db->insert('tb_questao', $tb_questao);
        }

        function atualizar($tb_questao) {
            $this->db->where('Id', $tb_questao['Id']);
            return $this->db->update('tb_questao', $tb_questao);
        }

        function deletar($Id) {
            $this->db->where('Id', $Id);
            return $this->db->delete('tb_questao');
        }
 }
    
