<?php
    class ComentarioController extends CI_Controller {
        
        public function index($id_questao){
            $parametros['comentarios'] =  $this->ComentarioModel->get($id_questao);
            $parametros['titulo'] = "Comentarios";
            $parametros['id_questao'] = $id_questao;
            $this->load->view('cabecalho',$parametros);
            $this->load->view('comentario/index');
            $this->load->view('rodape');
        }

        public function novo($id_questao){
            $parametros['titulo'] ='Novo Comentário';
            $parametros['id_questao'] = $id_questao;
            $this->load->view('cabecalho',$parametros);
            $this->load->view('comentario/novo',$parametros);
            $this->load->view('rodape');
        }
         public function salvar(){
            $comentario = $this->input->post();
            $this->ComentarioModel->inserir($comentario);
            $this->session->set_flashdata('success', 'Comentario cadastrado com sucesso!');
            
            redirect("comentario-index/".$comentario["id_questao"]);
        }

        public function editar($id_questao,$id){
            $parametros['titulo'] = 'Edição de Comentario';
            $parametros['comentario'] =  $this->ComentarioModel->get($id_questao,$id);

            if(!$parametros['comentario']){
                $this->session->set_flashdata('error', 'comentario nao encontrado!');
                redirect('comentario-index/'.$id_questao);
            }

            $this->load->view('cabecalho',$parametros);
            $this->load->view('comentario/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $comentario= $this->input->post();
            $this->ComentarioModel->atualizar($comentario);
            $this->session->set_flashdata('success', 'Comentario atualizado com sucesso!');
            redirect("comentario-index/".$comentario["id_questao"]);
        }
         public function excluir($Id){
            $this->ComentarioModel->deletar($Id);
            $this->session->set_flashdata('success', 'Comentario excluído com sucesso!');
            redirect();
        }
    }

