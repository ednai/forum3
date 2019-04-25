<?php
    class QuestaoController extends CI_Controller {
        
        public function index(){
            $parametros['questoes'] =  $this->Questao->get();
            $parametros['titulo'] = "Questões";
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/index');
            $this->load->view('rodape');
        }

        public function novo(){
            $parametros['questoes'] = 'Nova Postagem';
            $parametros['titulo'] ='Nova Questão';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/novo');
            $this->load->view('rodape');
        }
         public function salvar(){
            $questao = $this->input->post();
            $this->Questao->inserir($questao);
            $this->session->set_flashdata('success', 'Questao cadastrada com sucesso!');
            redirect();
        }

        public function editar($Id){
            $parametros['titulo'] = 'Edição de Postagem';
            $parametros['questao'] =  $this->Questao->get($Id);

            if(!$parametros['questao']){
                $this->session->set_flashdata('error', 'questao nao encontrada!');
                redirect('questao-index');
            }
            $this->load->view('cabecalho',$parametros);
            $this->load->view('questao/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $questao= $this->input->post();
            var_dump($questao);
            $this->Questao->atualizar($questao);
            $this->session->set_flashdata('success', 'Questao atualizada com sucesso!');
            redirect();
        }
         public function excluir($Id){
            $this->Questao->deletar($Id);
            $this->session->set_flashdata('success', 'Questao excluída com sucesso!');
            redirect();
        }
    }