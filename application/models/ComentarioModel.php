<?php
    class  ComentarioModel extends CI_Model {
        
        function get($id_questao,$id=null) {
            if($id){
                $this->db->where('Id',$id);
                $query = $this->db->get('tb_comentario');
                return $query->row_array();
            }else{
                $this->db->where('id_questao',$id_questao);
                $query = $this->db->get('tb_comentario');
                return $query->result_array();
            }  
        }
        
        function inserir($tb_comentario) {
            return $this->db->insert('tb_comentario', $tb_comentario);
        }

        function atualizar($tb_comentario) {
            $this->db->where('Id', $tb_comentario['Id']);
            return $this->db->update('tb_comentario', $tb_comentario);
        }

        function deletar($Id) {
            $this->db->where('Id', $Id);
            return $this->db->delete('tb_comentario');
        }
 }
    