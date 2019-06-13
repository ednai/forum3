<?php
    class UsuarioController extends CI_Controller {
        
        public function index(){
            $parametros['usuarios'] =  $this->Usuario_m->get();
            $parametros['titulo'] = "Usuarios";
            $this->load->view('cabecalho',$parametros);
            $this->load->view('usuario/index');
            $this->load->view('rodape');
        }

//parei aqui
        public function novo(){
            $parametros['usuarios'] = 'Cadastrar Novo Usuário';
            $parametros['titulo'] ='Novo Usuario';
            $this->load->view('cabecalho',$parametros);
            $this->load->view('usuario/novo');
            $this->load->view('rodape');
        }
         public function salvar(){
            $usuario = $this->input->post();
            $this->Usuario_m->inserir($usuario);

            $this->session->set_flashdata('success', 'Login Cadastrado com sucesso com sucesso!');
            redirect();
        }

        public function editar($Id){
            $parametros['titulo'] = 'Edição de Postagem';
            $parametros['usuario'] =  $this->Usuario_m->get($Id);
            $parametros['senha'] =  $this->Usuario_m->get($Id);

            if(!$parametros['usuario']){
                $this->session->set_flashdata('error', 'Usuario nao encontrada!');
                redirect('usuario-index');
            }
            $this->load->view('cabecalho',$parametros);
            $this->load->view('usuario/edicao',$parametros);
            $this->load->view('rodape');
        }

        public function atualizar(){
            $usuario= $this->input->post();
           // var_dump($usuario);

            $this->Usuario_m->atualizar($usuario);
            $this->session->set_flashdata('success', 'Usuario atualizado com sucesso!');
            redirect('usuario-index');
        }
         public function excluir($Id){
            $this->Usuario_m->deletar($Id);
            $this->session->set_flashdata('success', 'Usuario excluído com sucesso!');
            redirect();
        }
    }